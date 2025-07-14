<?php

use app\modules\postal\models\PocztaPolskaShipment;
use app\modules\postal\Module;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/** @var View $this */
/** @var PocztaPolskaShipment $model */
/** @var ActiveForm $form */
?>

<div class="poczta-polska-shipment-form">

    <?php $form = ActiveForm::begin([
        'id' => 'poczta-polska-shipment-check-shipment-form',
    ]); ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'finished_at')->textInput() ?>

    <?= $form->field($model, 'shipment_at')->textInput() ?>

    <?= $form->field($model, 'api_data')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('poczta-polska', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
