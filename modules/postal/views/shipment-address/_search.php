<?php

use app\modules\postal\Module;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var \app\modules\postal\models\search\ShipmentAddressPostSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="shipment-address-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'street') ?>

    <?= $form->field($model, 'house_number') ?>

    <?= $form->field($model, 'apartment_number') ?>

    <?php // echo $form->field($model, 'postal_code') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'country') ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('common', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Module::t('common', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
