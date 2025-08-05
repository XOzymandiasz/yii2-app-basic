<?php

namespace app\modules\postal\controllers;

use app\modules\postal\forms\BufforForm;
use app\modules\postal\Module;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * @property Module $module
 */
class PocztaPolskaBufforController extends Controller
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


    public function actionStagesList(int $stageId = null): array
    {
        $params = Yii::$app->request->post('depdrop_parents');
        if (empty($params)) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        Yii::$app->response->format = Response::FORMAT_JSON;
        $id = (int)reset($params);

        $output = [];
//        foreach ($stages as $id => $name) {
//            $output[] = [
//                'id' => $id,
//                'name' => $name,
//            ];
//        }
//        $selected = $stageId;
//        if (!isset($stages[$stageId])) {
//            $selected = array_key_first($stages);
//        }

        return [
            'output' => $output,
            //         'selected' => $selected,
        ];
    }

}
