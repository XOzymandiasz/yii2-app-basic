<?php

use app\modules\postal\forms\BufforForm;
use app\modules\postal\Module;
use edzima\teryt\models\Region;
use kartik\depdrop\DepDrop;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/** @var View $this */
/** @var BufforForm $model */
/** @var ActiveForm $form */
?>

<div class="postal-poczta-polska-buffor-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'name')->input('name') ?>

    <?= $form->field($model, 'regionId')->widget(Select2::class, [
        'data' => Region::getNames(),
        'options' => ['placeholder' => 'Select ...'],
    ])
    ?>

    <?= $form->field($model, 'dispatchOffice')->widget(DepDrop::class, [
        'type' => DepDrop::TYPE_SELECT2,
        // 'data' => $model->getDispatchOfficesNames(),
        'options' => ['placeholder' => Module::t('postal', 'Choose dispatch office')],
        'pluginOptions' => [
            'depends' => [Html::getInputId($model, 'regionId')],
            'url' => ['get-dispatch-offices-names']
        ],
    ]) ?>

    <?= $form->field($model, 'profilId')->widget(Select2::class, [
        'data' => $model->getProfilesNames(),
        'options' => ['placeholder' => Module::t('postal', 'Choose sender profile')],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]) ?>


    <?= $form->field($model, 'sendAt')->input('date') ?>

    <?= $form->field($model, 'isActive')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Zapisz', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
