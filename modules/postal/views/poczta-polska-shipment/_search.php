<?php

use app\models\PostSearch;
use app\modules\postal\Module;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/** @var View $this */
/** @var PostSearch $model */
/** @var ActiveForm $form */
?>

<div class="poczta-polska-shipment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'number') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'updated_at') ?>

    <?= $form->field($model, 'finished_at') ?>

    <?php // echo $form->field($model, 'shipment_at') ?>

    <?php // echo $form->field($model, 'api_data') ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('poczta-polska', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Module::t('poczta-polska', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
