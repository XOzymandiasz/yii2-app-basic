<?php

use app\modules\postal\Module;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType $model */
/** @var int $bufferId */

$this->params['breadcrumbs'][] = ['label' => Module::t('poczta-polska', 'Shipment'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('common', 'Update'), ['update', 'bufferId' => $bufferId, 'guid' => $model->getGuid()], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Module::t('common', 'Delete'), ['delete', 'bufferId' => $bufferId, 'guid' => $model->getGuid()], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Module::t('poczta-polska', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => Module::t('poczta-polska', 'Mass'),
                'value' => $model->getMasa(),
            ],
            [
                'label' => Module::t('poczta-polska', 'Format'),
                'value' => $model->getFormat()
            ],
            [
                'label' => Module::t('poczta-polska', 'Category'),
                'value' => $model->getKategoria(),
            ],
        ],
    ]) ?>
</div>
