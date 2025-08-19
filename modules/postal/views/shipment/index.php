<?php

use app\modules\postal\forms\ShipmentForm;
use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentContent;
use app\modules\postal\Module;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PostSearch $searchModel */
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
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'direction',
                    ShipmentForm::getDirectionsNames(),
                    ['class' => 'form-control', 'prompt' => Module::t('common','-- choose --')]
                ),
                'value' => function ($model) {
                    return ShipmentForm::getDirectionsNames()[$model->direction] ?? $model->direction;
                },
                'contentOptions' => ['style' => 'text-align: center; vertical-align: middle;'],
                'headerOptions' => ['style' => 'text-align: center;'],
            ],
            'number',
            [
                'attribute' => 'provider',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'provider',
                    ShipmentForm::getProvidersNames(),
                    ['class' => 'form-control', 'prompt' => Module::t('common','-- choose --')]
                ),
                'value' => function ($model) {
                    return ShipmentForm::getProvidersNames()[$model->provider] ?? $model->provider;
                },
                'contentOptions' => ['style' => 'text-align: center; vertical-align: middle;'],
                'headerOptions' => ['style' => 'text-align: center;'],
            ],
            [
                'attribute' => 'content_id',
                'label' => 'Content',
                'value' => function ($model) {
                    return $model->content->name ?? Module::t('common', '(empty)');
                },
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'content_id',
                    ArrayHelper::map(
                        ShipmentContent::find()->where(['is_active' => 1])->all(),
                        'id',
                        'name'
                    ),
                    ['class' => 'form-control', 'prompt' => Module::t('common', '-- choose --')]
                ),
                'contentOptions' => ['style' => 'text-align: center; vertical-align: middle;'],
                'headerOptions' => ['style' => 'text-align: center; vertical-align: middle;'],
            ],
            //'creator_id',
            //'created_at',
            //'updated_at',
            'guid',
            'buffer_id',
            //'finished_at',
            //'shipment_at',
            //'api_data',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Shipment $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
