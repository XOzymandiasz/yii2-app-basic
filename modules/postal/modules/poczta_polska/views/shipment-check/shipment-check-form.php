<?php

use app\modules\postal\Module;
use app\modules\postal\modules\poczta_polska\entities\Mail;
use app\modules\postal\modules\poczta_polska\forms\ShipmentCheckForm;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/** @var View $this */
/** @var ShipmentCheckForm $model */
/** @var Mail|null $mail */


$this->title = Module::t('poczta-polska', 'Check Poczta Polska Shipment');
?>



<h1><?= Html::encode($this->title) ?></h1>

<div class="shipment-check-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'withPostInfo')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Check Shipment', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>



