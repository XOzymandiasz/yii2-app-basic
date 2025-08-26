<?php

use app\modules\postal\models\search\ShipmentPostSearch;
use app\modules\postal\models\Shipment;
use app\modules\postal\Module;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var ShipmentPostSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Module::t('common', 'Postal Shipments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="postal-shipment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('common', 'Create In Postal Shipment'), ['create-in'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Module::t('common', 'Create Out Postal Shipment'), ['create-out'], ['class' => 'btn btn-success']) ?>

    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'direction',
                'filter' => $searchModel::getDirectionsNames(),
                'value' => 'directionName',
            ],
            'number',
            [
                'attribute' => 'provider',
                'value' => 'providerName',
                'filter' => $searchModel::getProvidersNames(),
            ],
            [
                'attribute' => 'content_id',
                'label' => 'Content',
                'value' => function (Shipment $model) {
                    return $model->content->name ?? Module::t('common', '(empty)');
                },
                'filter' => $searchModel::getContentsNames(),
            ],
            [
                'attribute' => 'creator_id',
                'value' => 'creator.name',
                'filter' => $searchModel::getCreatorsNames(),
                'visible' => !$searchModel->isCreatorScenario(),
            ],
            //'creator_id',
            //'created_at',
            //'updated_at',
            //'guid',
            //'buffer_id',
            //'finished_at',
            //'shipment_at',
            //'api_data',
            [
                'attribute' => 'senderName',
                'label' => Module::t('postal', 'Sender Name'),
                'value' => function (Shipment $model) {
                    return $model->senderAddress->getFullName();
                }
            ],
            [
                'attribute' => 'senderAddress',
                'label' => Module::t('postal', 'Sender Address'),
                'value' => function (Shipment $model) {
                    return $model->senderAddress->getFullInfo();
                }
            ],
            [
                'attribute' => 'receiverName',
                'label' => Module::t('postal', 'Receiver Name'),
                'value' => function (Shipment $model) {
                    return $model->receiverAddress->getFullName();
                }
            ],
            [
                'attribute' => 'receiverAddress',
                'label' => Module::t('postal', 'Receiver Address'),
                'value' => function (Shipment $model) {
                    return $model->receiverAddress->getFullInfo();
                }
            ],
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Shipment $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],

        ],
    ]); ?>


</div>
