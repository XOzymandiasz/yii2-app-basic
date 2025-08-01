<?php

use app\modules\postal\forms\PocztaPolskaShipmentForm;
use app\modules\postal\Module;
use app\modules\postal\sender\EnumType\FormatType;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var PocztaPolskaShipmentForm $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="shipment-address-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idBuffor')->widget(Select2::class, [
        'data' => $model->getBufforsNames(),
        'options' => ['placeholder' => Module::t('poczta-polska', 'Choose buffor')],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ])
    ?>

    <?= $form->field($model, 'category')->widget(Select2::class, [
        'data' => $model->getCategoriesNames(),
        'options' => ['placeholder' => Module::t('poczta-polska', 'Choose category')],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ])
    ?>

    <?= $form->field($model, 'isRegistered')->checkbox() ?>

    <?= $form->field($model, 'format')->widget(Select2::class, [
        'data' => $model->getFormatTypes(),
        'options' => ['placeholder' => Module::t('poczta-polska', 'Choose format')],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ])
    ?>

    <?= $form->field($model, 'mass')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('common', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
