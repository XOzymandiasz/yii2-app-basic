<?php

use app\modules\postal\models\PocztaPolskaShipment;
use app\modules\postal\Module;
use yii\helpers\Html;
use yii\web\View;

/** @var View $this */
/** @var PocztaPolskaShipment $model */

$this->title = Module::t('poczta-polska', 'Create Poczta Polska Shipment');
$this->params['breadcrumbs'][] = ['label' => Module::t('poczta-polska', 'Poczta Polska Shipments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poczta-polska-shipment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
