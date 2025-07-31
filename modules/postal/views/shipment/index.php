<?php

use app\modules\postal\models\Shipment;
use app\modules\postal\Module;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\PostSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Module::t('common', 'Postal Shipments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="postal-shipment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('common', 'Create Postal Shipment'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'direction',
            'number',
            'provider',
            'content_id',
            //'creator_id',
            //'created_at',
            //'updated_at',
            'guid',
            //'finished_at',
            //'shipment_at',
            //'api_data',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Shipment $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
