<?php

namespace app\modules\postal\modules\poczta_polska\controllers;

use app\modules\postal\modules\poczta_polska\forms\BufferForm;
use app\modules\postal\modules\poczta_polska\models\search\EnvelopeSearch;
use app\modules\postal\modules\poczta_polska\Module;
use app\modules\postal\modules\poczta_polska\repositories\EnvelopeRepository;
use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use Yii;
use yii\base\InvalidConfigException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\RangeNotSatisfiableHttpException;
use yii\web\Response;

/**
 * @property Module $module
 */
class EnvelopeController extends Controller
{
    public ?EnvelopeRepository $envelopeRepository = null;
    public ?ProfileRepository $profileRepository = null;

    public function behaviors(): array
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'delete' => ['POST'],
                        'get-dispatch-offices-names' => ['POST'],
                        'sender-book' => ['GET']
                    ],
                ],
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['create', 'update', 'delete', 'sender-book'],
                    'rules' => [
                        [
                            'actions' => ['create', 'update', 'delete', 'sender-book'],
                            'allow' => true,
                            'roles' => ['@'],
                        ]
                    ],
                ]
            ]
        );
    }

    public function init(): void
    {
        parent::init();
        if ($this->envelopeRepository === null) {
            $this->envelopeRepository = $this->module
                ->getRepositoryFactory()
                ->getBufferRepository();
        }
        if ($this->profileRepository === null) {
            $this->profileRepository = $this->module
                ->getRepositoryFactory()
                ->getProfileRepository();
        }
    }

    /**
     * @throws NotFoundHttpException|InvalidConfigException
     */
    public function actionIndex(string $status = EnvelopeSearch::STATUS_BUFFER): string
    {

        if (!isset(EnvelopeSearch::getStatusNames()[$status])) {
            throw new NotFoundHttpException();
        }
        $searchModel = new EnvelopeSearch(
            $this->envelopeRepository,
            $status
        );
        $searchModel->startDate = date('Y-m-d', strtotime('-1 month'));
        $searchModel->endDate = date('Y-m-d');

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if ($searchModel->isBuffer()) {
            return $this->render('buffer', [
                'dataProvider' => $dataProvider,
                'searchModel' => $searchModel,
                'statusNavItems' => static::getStatusNavItems($status)
            ]);
        }


        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'statusNavItems' => static::getStatusNavItems($status)
        ]);
    }

    /**
     * @throws NotFoundHttpException|InvalidConfigException
     */
    public function actionView(int $id): string
    {
        $model = $this->envelopeRepository->getBuffer($id);

        if (!$model) {
            throw new NotFoundHttpException();
        }

        return $this->render('view', ['model' => $model]);
    }

    /**
     * @throws InvalidConfigException
     */
    public function actionCreate(): string|Response
    {
        $model = new BufferForm();
        $profiles = $model->getProfilesNames($this->profileRepository);

        if ($model->load(Yii::$app->request->post())
            && $model->create($this->envelopeRepository, $this->profileRepository)) {
            return $this->redirect(['index']);
        }


        return $this->render('create', [
            'model' => $model,
            'profiles' => $profiles,
        ]);
    }

    /**
     * @throws InvalidConfigException
     */
    public function actionUpdate(int $id): string|Response
    {
        $model = new BufferForm();
        $model->setBuforType($this->envelopeRepository->getBuffer($id));
        $profiles = $model->getProfilesNames($this->profileRepository);

        if ($model->load(Yii::$app->request->post())
            && $model->update($this->envelopeRepository, $this->profileRepository)) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
            'profiles' => $profiles
        ]);
    }

    /**
     * @throws RangeNotSatisfiableHttpException
     */
    public function actionSenderBook(int $id): Response
    {
        $fileContent = $this->envelopeRepository->getSenderBook($id);

        $filename = 'senderBook_' . $id . '.pdf';

        return Yii::$app->response->sendContentAsFile($fileContent, $filename, [
            'mimeType' => 'application/pdf',
            'inline' => true,
        ]);
    }

    public function actionDelete(int $id): Response
    {

        $this->envelopeRepository->clear($id);

        return $this->redirect(['index']);
    }

    /**
     * @throws NotFoundHttpException
     */
    public function actionGetDispatchOfficesNames(): Response
    {
        $params = Yii::$app->request->post('depdrop_parents');
        if (empty($params)) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        $regionId = reset($params);

        $models = $this->envelopeRepository->getDispatchOffices($regionId);

        $output = [];
        foreach ($models as $model) {
            $output[] = [
                'id' => $model->getId(),
                'name' => BufferForm::getDispatchOfficeName($model),
            ];
        }
        return $this->asJson([
            'output' => $output,
        ]);
    }

    protected static function getStatusNavItems(string $activeStatus): array
    {

        $items = [];
        foreach (EnvelopeSearch::getStatusNames() as $status => $name) {
            $items[] = [
                'label' => $name,
                'url' => ['index', 'status' => $status],
                'active' => $status === $activeStatus,
            ];
        }

        return $items;
    }


}
