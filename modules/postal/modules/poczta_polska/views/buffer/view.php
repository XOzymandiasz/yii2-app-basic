<?php

use app\modules\postal\Module;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\postal\modules\poczta_polska\sender\StructType\BuforType $model */

$this->title = $model->getOpis();
$this->params['breadcrumbs'][] = ['label' => Module::t('poczta-polska', 'Buffers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buffor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('common', 'Update'), ['update', 'id' => $model->getIdBufor()], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Module::t('common', 'Delete'), ['delete', 'id' => $model->getIdBufor()], [
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
                'label' => Module::t('poczta-polska', 'Name'),
                'value' => $model->getOpis(),
            ],
            [
                'label' => Module::t('poczta-polska', 'Send at'),
                'value' => $model->getDataNadania() instanceof DateTimeInterface
                    ? $model->getDataNadania()->format('Y-m-d H:i')
                    : $model->getDataNadania(),
            ],
            [
                'label' => Module::t('poczta-polska', 'Dispatch Office'),
                'value' => $model->getUrzadNadania(),
            ],
            [
                'label' => Module::t('poczta-polska', 'Is active'),
                'value' => $model->getActive() ? Module::t('common', 'Yes') : Module::t('common', 'No'),
            ],
        ],
    ]) ?>
</div>
