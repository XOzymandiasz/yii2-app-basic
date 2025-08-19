<?php

use app\modules\postal\models\ShipmentAddress;
use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\Module;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var \app\modules\postal\models\search\ShipmentAddressPostSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Module::t('common', 'Shipment Addresses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shipment-address-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('common', 'Create Shipment Address Sender'),
            ['create', 'direction' => ShipmentDirectionInterface::DIRECTION_OUT], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Module::t('common', 'Create Shipment Address Receiver'),
            ['create', 'direction' => ShipmentDirectionInterface::DIRECTION_IN], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'street',
            'house_number',
            'apartment_number',
            'postal_code',
            'city',
            'country',
            'option',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, ShipmentAddress $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
