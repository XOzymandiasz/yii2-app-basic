<?php

use app\modules\postal\Module;
use app\modules\postal\modules\poczta_polska\forms\BufferForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var BufferForm $model */
/** @var array $profiles */

$this->title = Module::t('poczta-polska', 'Update Poczta Polska Buffer');
$this->params['breadcrumbs'][] = ['label' => Module::t('poczta-polska', 'Poczta Polska Buffer'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="postal-poczta-polska-buffer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'profiles' => $profiles,
    ]) ?>

</div>
