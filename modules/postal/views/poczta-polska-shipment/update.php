<?php

use app\modules\postal\models\PocztaPolskaShipment;
use app\modules\postal\Module;
use yii\helpers\Html;
use yii\web\View;

/** @var View $this */
/** @var PocztaPolskaShipment $model */

$this->title = Module::t('poczta-polska', 'Update Poczta Polska Shipment: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Module::t('poczta-polska', 'Poczta Polska Shipments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Module::t('poczta-polska', 'Update');
?>
<div class="poczta-polska-shipment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
