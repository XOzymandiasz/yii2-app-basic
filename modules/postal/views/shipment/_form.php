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

    <?php $form = ActiveForm::begin([
            'id' => 'shipment-form',
    ]); ?>


    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provider')->widget(Select2::class, [
        'data' => $model::getProvidersNames(),
        'options' => ['placeholder' => Module::t('postal', 'Choose provider')],

    ]) ?>

    <?= $form->field($model, 'content_id')->widget(Select2::class, [
        'data' => $model->getContentNames(),
        'options' => ['placeholder' => Module::t('postal', 'Choose content')],
        'pluginOptions' => [
            'tags' => true
        ]
    ])->hint(Html::a(
        Module::t('postal', 'Create Content'), [
            'shipment-content/create'
        ]
    )) ?>

    <?= $form->field($model, 'sender_id')->widget(Select2::class, [
        'data' => $model->getSenderAddressesNames(),
        'options' => ['placeholder' => Module::t('postal', 'Choose Receiver')],
    ])->hint(Html::a(
        Module::t('postal', 'Create Sender Address'), [
            'shipment-address/create', 'direction' => ShipmentDirectionInterface::DIRECTION_IN
        ]
    )) ?>

    <?= $form->field($model, 'receiver_id')->widget(Select2::class, [
        'data' => $model->getReceiverAddressesNames(),
        'options' => ['placeholder' => Module::t('postal', 'Choose Sender')],
    ])->hint(Html::a(
        Module::t('postal', 'Create Receiver Address'), [
            'shipment-address/create', 'direction' => ShipmentDirectionInterface::DIRECTION_OUT
        ]
    )) ?>


    <?= ($model->isInScenario() || $model->isUpdateIn())
        ? $form->field($model, 'finished_at')->textInput()
        : ''
    ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('common', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
