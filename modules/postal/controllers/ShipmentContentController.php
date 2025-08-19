<?php

namespace app\modules\postal\controllers;

use app\modules\postal\forms\ContentTypeForm;
use app\modules\postal\models\ShipmentContent;
use app\models\ShipmentContentPostSearch;
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

class ShipmentContentController extends Controller
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
                    'only' => ['create',  'update', 'delete'],
                    'rules' => [
                        [
                            'actions' => ['create', 'update', 'delete'],
                            'allow' => true,
                            'roles' => ['@'],
                        ]
                    ],
                    'denyCallback' => function () {
                        Yii::$app->session->setFlash('warning', Module::t('common', 'You must be logged in to view this page.'));
                        return Yii::$app->response->redirect(['/postal/shipment-content/index']);
                    }
                ]
            ]
        );
    }

    public function actionIndex(): string
    {
        $searchModel = new ShipmentContentPostSearch();
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
    public function actionCreate(): Response|string
    {
        $model = new ContentTypeForm();

        if ($model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->getID()]);
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
     * @throws Throwable
     * @throws StaleObjectException
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
    protected function findModel(int $id): ShipmentContent
    {
        if (($model = ShipmentContent::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(\Yii::t('app', 'The requested page does not exist.'));
    }
}
