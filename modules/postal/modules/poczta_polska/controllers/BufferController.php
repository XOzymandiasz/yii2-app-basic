<?php

namespace app\modules\postal\modules\poczta_polska\controllers;

use app\modules\postal\modules\poczta_polska\forms\BufferForm;
use app\modules\postal\modules\poczta_polska\Module;
use app\modules\postal\modules\poczta_polska\repositories\BufferRepository;
use app\modules\postal\modules\poczta_polska\repositories\ProfileRepository;
use app\modules\postal\modules\poczta_polska\repositories\RepositoryFactory;
use Yii;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * @property Module $module
 */
class BufferController extends Controller
{
    public function actionCreate(): string|Response
    {
        $model = new BufferForm();

        /**
         * @var BufferRepository $bufferRepository
         * @var ProfileRepository $profileRepository
         */

        $bufferRepository = $this->module
            ->getRepositoryFactory()
            ->createRepository(RepositoryFactory::REPOSITORY_BUFFER);

        $profileRepository = $this->module
            ->getRepositoryFactory()
            ->createRepository(RepositoryFactory::REPOSITORY_PROFILE);


        if ($model->load(Yii::$app->request->post())
            && $model->create($bufferRepository, $profileRepository)) {
                return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * @throws NotFoundHttpException
     */
    public function actionGetDispatchOfficesNames(): Response
    {
        $params = Yii::$app->request->post('depdrop_parents');
        if (empty($params)) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        $regionId = reset($params);

        /**
         * @var BufferRepository $repository
         */

        $repository = $this->module
            ->getRepositoryFactory()
            ->createRepository(RepositoryFactory::REPOSITORY_BUFFER);

        $models = $repository->getDispatchOffices($regionId);

        $output = [];
        foreach ($models as $model) {
            $output[] = [
                'id' => $model->getId(),
                'name' => BufferForm::getDispatchOfficeName($model),
            ];
        }
        return $this->asJson([
            'output' => $output,
        ]);
    }

    public function actionIndex(): string
    {
        /**
         * @var BufferRepository $repository
         */

        $repository = $this->module
            ->getRepositoryFactory()
            ->createRepository(RepositoryFactory::REPOSITORY_BUFFER);

        $buffers = $repository->getAll();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $buffers,
            'key' => static function($model) {
                return $model->getIdBufor();
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
     * @throws NotFoundHttpException
     */
    public function actionView(int $id): string
    {
        /**
         * @var BufferRepository $repository
         */

        $repository = $this->module
            ->getRepositoryFactory()
            ->createRepository(RepositoryFactory::REPOSITORY_BUFFER);

        $model = $repository->getById($id);

        if (!$model) {
            throw new NotFoundHttpException();
        }

        return $this->render('view', ['model' => $model]);
    }

    public function actionDelete(int $id): Response
    {
        /**
         * @var BufferRepository $repository
         */

        $repository = $this->module
            ->getRepositoryFactory()
            ->createRepository(RepositoryFactory::REPOSITORY_BUFFER);

        $repository->clear($id);

        return $this->redirect(['index']);
    }



}
