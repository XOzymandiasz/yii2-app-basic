<?php

use app\modules\postal\Module;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\postal\models\ShipmentAddress $model */

$this->title = Module::t('common', 'Update Shipment Address: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Shipment Addresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Module::t('common', 'Update');
?>
<div class="shipment-address-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
