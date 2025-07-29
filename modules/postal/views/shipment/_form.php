<?php

use app\modules\postal\Module;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\postal\models\Shipment $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="postal-shipment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'direction')->dropDownList(
            $model::getDirectionList(),
            ['prompt' => Module::t('poczta-polska','Choose direction')]
    ) ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provider')->dropDownList(
            $model::getProviderList(),
            ['prompt' => Module::t('poczta-polska','Choose provider')]) ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('poczta-polska', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
