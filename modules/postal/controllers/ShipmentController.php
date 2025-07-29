<?php

namespace app\modules\postal\controllers;

use app\modules\postal\forms\ShipmentForm;
use app\modules\postal\models\Shipment;
use app\models\PostSearch;
use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\models\ShipmentProviderInterface;
use app\modules\postal\Module;
use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\ServiceType\Get;
use app\modules\postal\sender\StructType\GetGuid;
use Throwable;
use Yii;
use yii\db\Exception;
use yii\db\StaleObjectException;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * @property Module $module
 */
class ShipmentController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors(): array
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['create', 'update', 'delete'],
                    'rules' => [
                        [
                            'actions' => ['create', 'update', 'delete'],
                            'allow' => true,
                            'roles' => ['@'],
                        ]
                    ],
                    'denyCallback' => function () {
                        Yii::$app->session->setFlash('warning', Module::t('poczta-polska', 'You must be logged in to view this page.'));
                        return Yii::$app->response->redirect(['/postal/poczta-polska-shipment-check/shipment/index']);
                    }
                ]
            ]
        );
    }

    public function actionAddShipment(): void
    {
        $model = new Shipment();
    }

    public function actionIndex(): string
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * @throws NotFoundHttpException
     */
    public function actionView(int $id): string
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCreateOut()
    {
        $model = new ShipmentForm();
        $model->setScenario(ShipmentForm::SCENARIO_DIRECTION_OUT);
        $model->direction = ShipmentDirectionInterface::DIRECTION_OUT;
        $model->creator_id = Yii::$app->user->id;
        if ($model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', [
            'model' => $model,
            'direction' => ShipmentDirectionInterface::DIRECTION_OUT,
        ]);
    }

    public function actionCreateIn()
    {
        $model = new ShipmentForm();
        $model->setScenario(ShipmentForm::SCENARIO_DIRECTION_IN);
        $model->direction = ShipmentDirectionInterface::DIRECTION_IN;
        $model->receive_id = $this->getDefaultReceiveId();
        $model->creator_id = Yii::$app->user->id;
        $model->finish_at = date(DATE_ATOM);
        if ($model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', [
            'model' => $model,
            'direction' => ShipmentDirectionInterface::DIRECTION_IN,
        ]);
    }


    /**
     * @throws Exception
     * @throws NotFoundHttpException
     */
    public function actionUpdate(int $id): Response|string
    {
        $model = new ShipmentForm();
        $model->setModel($this->findModel($id));

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * @throws StaleObjectException
     * @throws Throwable
     * @throws NotFoundHttpException
     */
    public function actionDelete(int $id): Response
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * @throws NotFoundHttpException
     */
    protected function findModel(int $id): ?Shipment
    {
        if (($model = Shipment::findOne(['id' => $id, 'provider' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Module::t('poczta-polska', 'The requested page does not exist.'));
    }
}
