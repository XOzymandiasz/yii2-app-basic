<?php

namespace app\modules\postal\controllers;

use app\modules\postal\forms\AddressTypeForm;
use app\modules\postal\models\search\ShipmentAddressPostSearch;
use app\modules\postal\models\ShipmentAddress;
use app\modules\postal\Module;
use Throwable;
use yii\db\Exception;
use yii\db\StaleObjectException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * ShipmentAddressController implements the CRUD actions for ShipmentAddress model.
 */
class ShipmentAddressController extends Controller
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
                    'only' => ['create', 'update', 'delete'],
                    'rules' => [
                        [
                            'actions' => ['create', 'update', 'delete'],
                            'allow' => true,
                            'roles' => ['@'],
                        ]
                    ],
                ]
            ]
        );
    }

    /**
     * Lists all ShipmentAddress models.
     *
     * @return string
     */
    public function actionIndex(): string
    {
        $searchModel = new ShipmentAddressPostSearch();
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
    public function actionCreate(?string $direction = null): Response|string
    {
        $model = new AddressTypeForm();
        $model->option = $direction;

        if ($model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->getModel()->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * @throws Exception
     * @throws NotFoundHttpException
     */
    public function actionUpdate(int $id): Response|string
    {
        $model = $this->findModel($id);

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
    protected function findModel($id): ?ShipmentAddress
    {
        if (($model = ShipmentAddress::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Module::t('postal', 'The requested page does not exist.'));
    }
}
