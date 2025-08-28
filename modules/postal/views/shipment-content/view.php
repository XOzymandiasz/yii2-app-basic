<?php

use app\modules\postal\models\ShipmentContent;
use app\modules\postal\Module;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\postal\models\ShipmentContent $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Shipment Contents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="shipment-content-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('common', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Module::t('common', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Module::t('common', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'is_active',
                'value' => function (ShipmentContent $model) {
                    return $model->is_active
                        ? Module::t('common', 'Yes')
                        : Module::t('common', 'No');
                },
            ],
        ],
    ]) ?>

</div>
