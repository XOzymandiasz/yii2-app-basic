<?php

use app\modules\postal\forms\BufforForm;
use app\modules\postal\Module;
use edzima\teryt\models\Region;
use kartik\depdrop\DepDrop;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use edzima\teryt;

/** @var View $this */
/** @var BufforForm $model */
/** @var ActiveForm $form */
?>

<div class="postal-poczta-polska-buffor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idBuffor')->textInput() ?>

    <?= DepDrop::widget([
        'data' => Region::getNames(),
    ]) ?>

    <?= $form->field($model, 'dispatchOffice')->widget(\kartik\depdrop\DepDrop::class, [
        'type' => DepDrop::TYPE_SELECT2,
        // 'data' => $model->getDispatchOfficesNames(),
        'options' => ['placeholder' => Module::t('postal', 'Choose dispatch office')],
        'pluginOptions' => [
            'depends' => [Html::getInputId($model, 'type_id')],
        ],
    ]) ?>

    <?= $form->field($model, 'profile')->widget(Select2::class, [
        'data' => $model->getProfileNames(),
        'options' => ['placeholder' => Module::t('postal', 'Choose sender profile')],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]) ?>


    <?= $form->field($model, 'sendAt')->input('date') ?>

    <?= $form->field($model, 'isActive')->checkbox() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 4]) ?>

    <div class="form-group">
        <?= Html::submitButton('Zapisz', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
