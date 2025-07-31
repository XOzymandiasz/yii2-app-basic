<?php

use app\modules\postal\forms\ShipmentForm;
use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\Module;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

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

    <?= $form->field($model, 'provider')->widget(Select2::class, [
        'data' => $model::getProvidersNames(),
        'options' => ['placeholder' => Module::t('postal', 'Choose provider')],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]) ?>

    <!--    --><?php //= $form->field($model, 'direction')->dropDownList(
    //        $model::getDirectionsNames(),
    //        ['prompt' => Module::t('poczta-polska', 'Choose direction')])
    //    ?>

    <?= $form->field($model, 'content_id')->widget(Select2::class, [
        'data' => $model->getContentNames(),
        'options' => ['placeholder' => Module::t('postal', 'Choose content')],
        'pluginOptions' => [
            'tags' => true
        ]
    ]) ?>

    <?= $form->field($model, 'sender_id')->widget(Select2::class, [
        'data' => $model->getSenderAddressesNames(),
        'options' => ['placeholder' => Module::t('postal', 'Choose Receiver')],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ])->hint(Html::a(
        Module::t('postal', 'Create Address'), [
            'shipment-address/create', 'direction' => ShipmentDirectionInterface::DIRECTION_IN
        ]
    )) ?>

    <!--    --><?php //= $form->field($model, 'direction')->dropDownList(
    //        $model::getDirectionsNames(),
    //        ['prompt' => Module::t('poczta-polska', 'Choose direction')])
    //    ?>

    <?= $form->field($model, 'receiver_id')->widget(Select2::class, [
        'data' => $model->getReceiverAddressesNames(),
        'options' => ['placeholder' => Module::t('postal', 'Choose Sender')],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ])->hint(Html::a(
        Module::t('postal', 'Create Address'), [
            'shipment-address/create', 'direction' => ShipmentDirectionInterface::DIRECTION_OUT
        ]
    )) ?>

    <!--    --><?php //= $this->render('_addressForm', [
    //        'form' => $form,
    //        'model' => $model->getAddressReceiver(),
    //        'id' => 'address-receiver-form'
    //    ]) ?>



    <?= $model->isInScenario()
        ? $form->field($model, 'finished_at')->textInput()
        : ''
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
