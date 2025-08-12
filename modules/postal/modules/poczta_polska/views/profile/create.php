<?php

use app\modules\postal\Module;
use app\modules\postal\modules\poczta_polska\forms\ProfileForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var ProfileForm $model */

$this->title = Module::t('poczta-polska', 'Create Poczta Polska Profile');
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Shipment Addresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poczta-polska-profile">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
