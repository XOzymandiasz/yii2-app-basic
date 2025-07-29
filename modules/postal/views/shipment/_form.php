<?php

use app\modules\postal\forms\ShipmentForm;
use app\modules\postal\Module;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var ShipmentForm $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="postal-shipment-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <!--    --><?php //= $form->field($model, 'direction')->dropDownList(
    //        $model::getDirectionsNames(),
    //        ['prompt' => Module::t('poczta-polska', 'Choose direction')])
    //    ?>

    <?= $form->field($model, 'provider')->dropDownList(
        $model::getProvidersNames(),
        ['prompt' => Module::t('poczta-polska', 'Choose provider')])
    ?>

    <?= $form->field($model, 'content_id')->dropDownList(
        $model::getContentNames(),
        ['prompt' => Module::t('poczta-polska', 'Choose content')])
    ?>

    <?= $form->field($model, 'receiver_id')->dropDownList(
        $model::getAddressesNames(),
        ['prompt' => Module::t('poczta-polska', 'Choose shipper')])
        ->hint(Html::a(
            Module::t('postal', 'Create Address'), [
                'shipment-address/create'
            ]
        ))
    ?>

<!--    --><?php //= $this->render('_addressForm', [
//        'form' => $form,
//        'model' => $model->getAddressReceiver(),
//        'id' => 'address-receiver-form'
//    ]) ?>

    <?= $form->field($model, 'sender_id')->dropDownList(
        $model::getAddressesNames(),
        ['prompt' => Module::t('poczta-polska', 'Choose sender')])
        ->hint(Html::a(
            Module::t('postal', 'Create Address'), [
                'shipment-address/create'
            ]
        ))
    ?>

<!--    --><?php //= $this->render('_addressForm', [
//        'form' => $form,
//        'model' => $model->getAddressReceiver(),
//        'id' => 'address-recever-form'
//    ]) ?>


    <div class="form-group">
        <?= Html::submitButton(Module::t('common', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
