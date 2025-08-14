<?php

use app\modules\postal\Module;
use app\modules\postal\modules\poczta_polska\forms\BufferForm;
use edzima\teryt\models\Region;
use kartik\depdrop\DepDrop;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/** @var View $this */
/** @var BufferForm $model */
/** @var ActiveForm $form */
/** @var array $profiles */
?>

<div class="postal-poczta-polska-buffor-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'name')->input('name') ?>

    <?= $form->field($model, 'regionId')->widget(Select2::class, [
        'data' => Region::getNames(),
        'options' => ['placeholder' => 'Select ...'],
    ])
    ?>

    <?= $form->field($model, 'dispatchOfficeId')->widget(DepDrop::class, [
        'type' => DepDrop::TYPE_SELECT2,
        // 'data' => $model->getDispatchOfficesNames(),
        'options' => ['placeholder' => Module::t('postal', 'Choose dispatch office')],
        'pluginOptions' => [
            'depends' => [Html::getInputId($model, 'regionId')],
            'url' => ['get-dispatch-offices-names']
        ],
    ]) ?>

    <?= $form->field($model, 'profilId')->widget(Select2::class, [
        'data' => $profiles,
        'options' => ['placeholder' => Module::t('postal', 'Choose sender profile')],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]) ?>


    <?= $form->field($model, 'sendAt')->input('date') ?>

    <?= $form->field($model, 'isActive')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('common','Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
