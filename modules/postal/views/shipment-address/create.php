<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\postal\models\User $model */

$this->title = Yii::t('poczta-polska', 'Create User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('poczta-polska', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
