<?php

namespace app\modules\postal\modules\poczta_polska\controllers;

use app\modules\postal\modules\poczta_polska\forms\BufferForm;
use app\modules\postal\modules\poczta_polska\Module;
use app\modules\postal\modules\poczta_polska\repositories\BufferRepository;
use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use Yii;
use yii\base\InvalidConfigException;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * @property Module $module
 */
class BufferController extends Controller
{
    public ?BufferRepository $bufferRepository = null;
    public ?ProfileRepository $profileRepository = null;

    public function init(): void
    {
        parent::init();
        if ($this->bufferRepository === null) {
            $this->bufferRepository = $this->module
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
     * @throws InvalidConfigException
     */
    public function actionIndex(): string
    {
        $buffers = $this->bufferRepository->getList();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $buffers,
            'key' => static function($model) {
                return $model->getIdBufor();
            },
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @throws InvalidConfigException
     */
    public function actionCreate(): string|Response
    {
        $model = new BufferForm();
        $profiles = $model->getProfilesNames($this->profileRepository);

        if ($model->load(Yii::$app->request->post())
            && $model->create($this->bufferRepository, $this->profileRepository)) {
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
    public function actionUpdate($id): string|Response
    {
        $model = new BufferForm();
        $model->setBuforType($this->bufferRepository->getById($id));
        $profiles = $model->getProfilesNames($this->profileRepository);

        if ($model->load(Yii::$app->request->post())
            && $model->update($this->bufferRepository, $this->profileRepository)){
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
            'profiles' => $profiles
        ]);
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

        $models = $this->bufferRepository->getDispatchOffices($regionId);

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

    /**
     * @throws NotFoundHttpException|InvalidConfigException
     */
    public function actionView(int $id): string
    {
        $model = $this->bufferRepository->getById($id);

        if (!$model) {
            throw new NotFoundHttpException();
        }

        return $this->render('view', ['model' => $model]);
    }

    public function actionDelete(int $id): Response
    {

        $this->bufferRepository->clear($id);

        return $this->redirect(['index']);
    }



}
