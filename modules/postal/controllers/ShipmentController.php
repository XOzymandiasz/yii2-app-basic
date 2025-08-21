<?php

namespace app\modules\postal\controllers;

use app\modules\postal\forms\ShipmentForm;
use app\modules\postal\models\search\ShipmentPostSearch;
use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\Module;
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
                    'only' => ['create-out', 'create-in', 'update', 'delete'],
                    'rules' => [
                        [
                            'actions' => ['create-out', 'create-in', 'update', 'delete'],
                            'allow' => true,
                            'roles' => ['@'],
                        ]
                    ],
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
        $searchModel = new ShipmentPostSearch();
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


    /**
     * @throws Exception
     */
    public function actionCreateOut(?string $refTo = null, array $refColumns = []): Response|string
    {
        $model = new ShipmentForm();
        $model->setScenario(ShipmentForm::SCENARIO_DIRECTION_OUT);
        $model->direction = ShipmentDirectionInterface::DIRECTION_OUT;
        $model->creator_id = Yii::$app->user->id;
        if ($model->load($this->request->post())) {
            if ($model->save()) {
                $this->module->afterCreateOutShipment($model->getModel());
                $url = $this->module->getAfterCreateURL($model->getModel()->id, $model->getModel()->provider);
                if ($url) {
                    return $this->redirect($url);
                }
                return $this->redirect(['index']);
            }
        }

        Yii::debug([
            'model' => $model->getAttributes(),
        ], __METHOD__);
        return $this->render('create', [
            'model' => $model,
            'direction' => ShipmentDirectionInterface::DIRECTION_OUT,
        ]);
    }


    /**
     * @throws Exception
     */
    public function actionCreateIn(): Response|string
    {
        $model = new ShipmentForm();
        $model->setScenario(ShipmentForm::SCENARIO_DIRECTION_IN);
        $model->direction = ShipmentDirectionInterface::DIRECTION_IN;
        $model->creator_id = Yii::$app->user->id;
        $model->finished_at = date(DATE_ATOM);
        if ($model->load($this->request->post()) && $model->save()) {
            $this->module->afterCreateInShipment($model->getModel());
            $url = $this->module->getAfterCreateURL($model->getModel()->id, $model->getModel()->provider);
            if ($url) {
                return $this->redirect($url);
            }
            return $this->redirect(['view', 'id' => $model->getModel()->id]);
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

        if ($model->load($this->request->post()) && $model->save()) {
            if($model->direction == ShipmentDirectionInterface::DIRECTION_IN) {
                $url = $this->module->getAfterUpdateURL($model->getModel()->buffer_id, $model->getModel()->guid, $model->getModel()->provider);
                if ($url) {
                    return $this->redirect($url);
                }
                return $this->redirect(['view', 'id' => $id]);
            }
            elseif ($model->direction == ShipmentDirectionInterface::DIRECTION_OUT) {
                $url = $this->module->getAfterUpdateURL($model->getModel()->buffer_id, $model->getModel()->guid, $model->getModel()->provider);
                if ($url) {
                    return $this->redirect($url);
                }
                return $this->redirect(['view', 'id' => $id]);

            }
            else{
                throw new NotFoundHttpException();
            }
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
        if (($model = Shipment::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Module::t('common', 'The requested page does not exist.'));
    }
}
