<?php

use app\modules\postal\models\PocztaPolskaShipment;
use app\modules\postal\Module;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\View;

/** @var View $this */
/** @var app\models\PostSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Module::t('poczta-polska', 'Poczta Polska Shipments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poczta-polska-shipment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('poczta-polska', 'Create Poczta Polska Shipment'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'number',
            'created_at',
            'updated_at',
            'finished_at',
            //'shipment_at',
            //'api_data:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PocztaPolskaShipment $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
