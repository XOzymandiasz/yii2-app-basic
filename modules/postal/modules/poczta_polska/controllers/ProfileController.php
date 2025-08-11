<?php

namespace app\modules\postal\modules\poczta_polska\controllers;

use app\modules\postal\modules\poczta_polska\forms\ProfileForm;
use app\modules\postal\modules\poczta_polska\Module;
use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use app\modules\postal\modules\poczta_polska\repositories\RepositoryFactory;
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

        /**
         * @var ProfileRepository $repository
         */

        $repository = $this->module
            ->getRepositoryFactory()
            ->createRepository(RepositoryFactory::REPOSITORY_PROFILE);

        if ($model->load(Yii::$app->request->post()) && $model->create($repository)) {
            return $this->redirect(['index',
                'model'=>$model]
            );
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

}