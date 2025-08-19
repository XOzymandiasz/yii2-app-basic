<?php

use app\modules\postal\Module;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\postal\forms\ShipmentForm $model */

$this->title = Module::t('postal', 'Update Postal Shipment: {name}', [
    'name' => $model->getModel()->id,
]);
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Postal Shipments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->getModel()->id, 'url' => ['view', 'id' => $model->getModel()->id]];
$this->params['breadcrumbs'][] = Module::t('common', 'Update');
?>
<div class="postal-shipment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
