<?php

namespace app\modules\postal\controllers;

use app\modules\postal\forms\ProfileForm;
use app\modules\postal\Module;
use Yii;
use yii\web\Controller;

/**
 * @property Module $module
 */

class PocztaPolskaProfileController extends Controller
{

    public function actionCreate():string
    {
        $model = new ProfileForm();

        if ($model->load(Yii::$app->request->post())) {
            $model->create();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

}