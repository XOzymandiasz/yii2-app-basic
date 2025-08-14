<?php

namespace app\modules\postal\modules\poczta_polska\controllers;

use app\modules\postal\modules\poczta_polska\forms\ProfileForm;
use app\modules\postal\modules\poczta_polska\Module;
use Yii;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use yii\web\Response;

/**
 * @property Module $module
 */

class ProfileController extends Controller
{

    public function actionCreate():string|Response
    {
        $model = new ProfileForm();

        if ($model->load(Yii::$app->request->post())
            && $model->create(
                $this->module->getRepositoryFactory()->getProfileRepository()
            )
        ) {
            return $this->redirect(['index',
                'model'=>$model]
            );
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionIndex():string|Response
    {
        $profiles = $this->module
                ->getRepositoryFactory()
                ->getProfileRepository()
                ->getList();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $profiles,
            'key' => static function($model) {
                return $model->getidProfil();
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
     * @throws InvalidConfigException|NotFoundHttpException
     */
    public function actionView(int $id):string|Response
    {
        $model = $this->profileRepository->getById($id);

        if (!$model) {
            throw new NotFoundHttpException();
        }

        return $this->render('view', ['model' => $model]);
    }

    /**
     * @throws InvalidConfigException
     */
    public function actionCreate():string|Response
    {
        $model = new ProfileForm();

        if ($model->load(Yii::$app->request->post()) && $model->create($this->profileRepository)) {

            return $this->redirect(['index',
                    'model'=>$model]
            );
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * @throws InvalidConfigException
     */
    public function actionUpdate(int $id):string|Response
    {
        $model = new ProfileForm();
        $model->setProfilType($this->profileRepository->getById($id));

        if ($model->load(Yii::$app->request->post()) && $model->update($this->profileRepository)) {

            return $this->redirect(['index',
                    'model'=>$model]
            );
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

}