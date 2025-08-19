<?php

use app\modules\postal\models\search\ShipmentPostSearch;
use app\modules\postal\Module;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var ShipmentPostSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="shipment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'direction') ?>

    <?= $form->field($model, 'number') ?>

    <?= $form->field($model, 'provider') ?>

    <?= $form->field($model, 'content_id') ?>

    <?= $form->field($model, 'buffer_id') ?>

    <?php // echo $form->field($model, 'creator_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'guid') ?>

    <?php // echo $form->field($model, 'finished_at') ?>

    <?php // echo $form->field($model, 'shipment_at') ?>

    <?php // echo $form->field($model, 'api_data') ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('common', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Module::t('common', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
