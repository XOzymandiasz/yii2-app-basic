<?php

namespace app\modules\postal\modules\poczta_polska\components\exceptions;

use yii\base\Exception;
use yii\httpclient\Response;

abstract class BaseException extends Exception
{
    public static function createFromResponse(Response $response)
    {
        return new static($response->content, $response->statusCode);
    }

}
