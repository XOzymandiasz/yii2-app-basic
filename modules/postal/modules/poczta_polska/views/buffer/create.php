<?php

use app\modules\postal\Module;
use app\modules\postal\modules\poczta_polska\forms\BufforForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var BufforForm $model */

$this->title = Module::t('poczta-polska', 'Create Poczta Polska Buffor');
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Postal Shipments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="postal-poczta-polska-buffor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
