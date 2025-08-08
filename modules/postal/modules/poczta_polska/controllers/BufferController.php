<?php

namespace app\modules\postal\modules\poczta_polska\controllers;

use app\modules\postal\modules\poczta_polska\forms\BufforForm;
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
        $model = new BufforForm();


        if ($model->load(Yii::$app->request->post()) && $model->create()) {
                return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
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
        $repository = $this->module->getRepositoriesFactory()->getBufforRepository();
        $models = $repository->getDispatchOffices($regionId);
        $output = [];
        foreach ($models as $model) {
            $output[] = [
                'id' => $model->getId(),
                'name' => BufforForm::getDispatchOfficeName($model),
            ];
        }
        return $this->asJson([
            'output' => $output,
        ]);
    }

    public function actionIndex(): string
    {
        $repository = $this->module->getRepositoriesFactory()->getBufforRepository();
        $buffers = $repository->getAll();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $buffers,
            'key' => static function($model) {
                return $model->getIdBufor();
            },
            'pagination' => [
                'pageSize' => 20,
            ],
            'sort' => [
                'attributes' => ['name',
                    'sendAt',
                    'dispatchOfficeId',
                    'isActive',
                    //'profilId'
                ],
            ]
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
        $repo = $this->module->getRepositoriesFactory()->getBufforRepository();
        $model = $repo->getById($id);

        if (!$model) {
            throw new NotFoundHttpException();
        }

        return $this->render('view', ['model' => $model]);
    }

    public function actionDelete(int $id): Response
    {
        $repository = $this->module->getRepositoriesFactory()->getBufforRepository();

        $repository->clear($id);

        return $this->redirect(['index']);
    }



}
