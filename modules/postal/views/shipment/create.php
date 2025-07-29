<?php

use app\modules\postal\Module;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\postal\models\Shipment $model */

$this->title = Module::t('common', 'Create Postal Shipment');
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Postal Shipments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="postal-shipment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
