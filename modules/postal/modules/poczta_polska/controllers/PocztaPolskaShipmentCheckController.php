<?php

namespace app\modules\postal\modules\poczta_polska\controllers;

use app\modules\postal\components\filters\ActionTimeFilter;
use app\modules\postal\modules\poczta_polska\forms\PocztaPolskaShipmentCheckForm;
use app\modules\postal\modules\poczta_polska\Module;
use Yii;
use yii\base\InvalidConfigException;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * @property Module $module
 */
class PocztaPolskaShipmentCheckController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors(): array
    {
        return array_merge(
            parent::behaviors(),
            [
                'actionDateTimeFilter' => [
                    'class' => ActionTimeFilter::class,
                    'only' => ['mail-view'],
                ],
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['check-mail'],
                    'rules' => [
                        [
                            'actions' => ['check-mail'],
                            'allow' => true,
                            'roles' => [],
                        ]
                    ],
                    'denyCallback' => function ()
                    {
                        Yii::$app->session->setFlash('warning', Module::t('poczta-polska', 'You must be logged in to view this page.'));
                        return Yii::$app->response->redirect(['/postal/poczta-polska-shipment-check/shipment/index']);
                    }
                ]
            ]
        );
    }
    public function actionShipmentCheckForm(): Response|string
    {
        $model = new PocztaPolskaShipmentCheckForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->redirect([
                'check-mail',
                'number' => $model->number,
                'addPostInfo' => $model->withPostInfo,
            ]);
        }

        return $this->render(
            'shipment-check-form', [
            'model' => $model,
        ]);
    }

    /**
     * @throws NotFoundHttpException
     * @throws InvalidConfigException
     */
    public function actionCheckMail(string $number, bool $addPostInfo): string
    {
        $form = new PocztaPolskaShipmentCheckForm([
            'number' => $number,
            'withPostInfo' => $addPostInfo,
        ]);

        $tracker = $this->module->getPocztaPolskaTracker();

        $tracker->addPostInfo = $addPostInfo;

        $mail = $form->checkShipment($tracker);

        if (!$mail) {
            throw new NotFoundHttpException();
        }
        return $this->render('mail-view', [
            'model' => $mail,
            'addPostInfo'  => $addPostInfo,
        ]);

    }

}
