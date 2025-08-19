<?php

use app\modules\postal\Module;
use app\modules\postal\modules\poczta_polska\models\search\EnvelopeSearch;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var EnvelopeSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="envelope-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index','status' => $model->getStatus()],
        'method' => 'get',
    ]); ?>

    <div class="row">

        <?= $form->field($model, 'startDate', [
            'options' => [
                'class' => 'col-6 col-md-4 col-lg-2'
            ]
        ]) ?>

        <?= $form->field($model, 'endDate', [
            'options' => [
                'class' => 'col-6 col-md-4 col-lg-2'
            ]
        ]) ?>

    </div>


    <div class="form-group">
        <?= Html::submitButton(Module::t('common', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Module::t('common', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
