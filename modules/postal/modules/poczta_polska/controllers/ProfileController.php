<?php

namespace app\modules\postal\modules\poczta_polska\controllers;

use app\modules\postal\modules\poczta_polska\forms\ProfileForm;
use app\modules\postal\modules\poczta_polska\Module;
use Yii;
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

}