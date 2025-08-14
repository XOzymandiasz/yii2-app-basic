<?php

namespace app\modules\postal\modules\poczta_polska\controllers;

use app\modules\postal\modules\poczta_polska\forms\BufferForm;
use app\modules\postal\modules\poczta_polska\Module;
use Yii;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * @property Module $module
 */
class BufferController extends Controller
{
    public function actionCreate(): string|Response
    {
        $model = new BufferForm();

        if ($model->load(Yii::$app->request->post())
            && $model->create(
                $this->module->getRepositoryFactory()->getBufferRepository(),
                $this->module->getRepositoryFactory()->getProfileRepository()
            )
        ) {
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

        $models = $this->module
                ->getRepositoryFactory()
                ->getBufferRepository()
                ->getDispatchOffices($regionId);

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

    public function actionIndex(): string
    {
        $buffers = $this->module
                ->getRepositoryFactory()
                ->getBufferRepository()
                ->getList();

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
     * @throws NotFoundHttpException
     */
    public function actionView(int $id): string
    {
        $model = $this->module
                ->getRepositoryFactory()
                ->getBufferRepository()
                ->getById($id);

        if (!$model) {
            throw new NotFoundHttpException();
        }

        return $this->render('view', ['model' => $model]);
    }

    public function actionDelete(int $id): Response
    {

        $this->module->getRepositoryFactory()
            ->getBufferRepository()
            ->clear($id);

        return $this->redirect(['index']);
    }



}
