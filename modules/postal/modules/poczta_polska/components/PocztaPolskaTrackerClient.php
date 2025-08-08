<?php

namespace app\modules\postal\modules\poczta_polska\components;


use app\modules\postal\modules\poczta_polska\components\exceptions\BadRequestException;
use app\modules\postal\modules\poczta_polska\components\exceptions\ForbiddenAuthException;
use app\modules\postal\modules\poczta_polska\components\exceptions\InvalidAuthException;
use app\modules\postal\modules\poczta_polska\components\exceptions\PasswordChangeRequiredException;
use app\modules\postal\modules\poczta_polska\components\exceptions\UnavailableServiceException;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\httpclient\Client;
use yii\httpclient\Exception;
use yii\httpclient\Response;

class PocztaPolskaTrackerClient extends Component
{

    public string $apiUrl = 'https://uss.poczta-polska.pl/uss/v2.0/tracking';
    public string $language = 'PL';
    public string $login = 'sledzeniepp';
    public string $password = '';
    public string $passwordHash = '5EF1C8ABD8BA2186F781B715CAFFF3C8D08567D78F7C5B6138F4013652E3DBB9';

    public array $clientOptions = [];


    /**
     * @throws ForbiddenAuthException
     * @throws InvalidConfigException
     * @throws PasswordChangeRequiredException
     * @throws Exception
     * @throws InvalidAuthException
     * @throws UnavailableServiceException|BadRequestException
     */
    public function auth(): ?string
    {
        $client = $this->getClient();
        $client->requestConfig = [];
        $response = $client->createRequest()
            ->setMethod('POST')
            ->setUrl('login')
            ->setData([
                'login' => $this->login,
                'password' => $this->getPasswordHash(),
                'language' => $this->language,
            ])
            ->setFormat(Client::FORMAT_JSON)
            ->send();

        if (YII_ENV_TEST) {
            codecept_debug([
                'statusCode' => $response->getStatusCode(),
                'content' => $response->getContent(),
            ]);
        }

        if ($response->isOk) {
            return $response->getContent();
        }

        $this->thrown($response);
        Yii::error([
            'message' => 'Problem with auth',
            'response' => $response
        ], __METHOD__);

        return null;
    }


    /**
     * @throws InvalidConfigException
     * @throws PasswordChangeRequiredException
     * @throws Exception
     * @throws ForbiddenAuthException
     * @throws InvalidAuthException
     * @throws UnavailableServiceException
     * @throws BadRequestException
     */
    public function checkMailex(string $number, bool $addPostInfo = true, string $language = null): ?array
    {
        if ($language === null) {
            $language = $this->language;
        }
        $apiKey = $this->auth();
        if ($apiKey) {
            $client = $this->getClient();
            $client->requestConfig['headers']['api_key'] = $apiKey;
            $params = [
                'language' => $language,
                'number' => $number,
                'status' => true,
                'addPostInfo' => $addPostInfo,
            ];
            $response = $client->createRequest()
                ->setUrl(
                    'checkmailex?' . http_build_query($params)
                )
                ->setMethod('GET')
                ->setFormat(Client::FORMAT_JSON)
                ->send();

            if ($response->isOk) {
                return $response->getData();
            }
            \Yii::warning([
                'message' => 'Problem with checkMailex',
                'response' => $response,
            ]);
            $this->thrown($response);
            return null;
        }
    }


    /**
     * @throws Exception
     * @throws InvalidAuthException
     * @throws ForbiddenAuthException
     * @throws UnavailableServiceException
     * @throws PasswordChangeRequiredException
     * @throws BadRequestException
     */
    private function thrown(Response $response): void
    {
        switch ($response->getStatusCode()) {
            case '400':
                throw BadRequestException::createFromResponse($response);
            case '401':
                throw InvalidAuthException::createFromResponse($response);
            case '403':
                throw ForbiddenAuthException::createFromResponse($response);
            case '405':
                throw PasswordChangeRequiredException::createFromResponse($response);
            case '503':
                throw UnavailableServiceException::createFromResponse($response);
        }
    }

    private function getClient(): Client
    {
        $options = $this->clientOptions;
        $options['baseUrl'] = $this->apiUrl;
        $client = new Client($options);

        return $client;
    }


    private function getPasswordHash(): string
    {
        if (empty($this->passwordHash)) {
            if (empty($this->password)) {
                throw new InvalidConfigException('Password must be set when passwordHash is empty.');
            }
            $this->generatePasswordHash();
        }
        return $this->passwordHash;
    }


    private function generatePasswordHash(): void
    {
        $this->passwordHash = strtoupper(hash("sha256", strtoupper(hash("sha256", $this->password))));
    }
}
