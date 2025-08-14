<?php

use app\modules\postal\Module;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType $model */
/** @var  title */
$this->title = $model->getNazwaSkrocona();
$this->params['breadcrumbs'][] = ['label' => Module::t('poczta-polska', 'Profile'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('common', 'Update'), ['update', 'id' => $model->getIdProfil()], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Module::t('common', 'Delete'), ['delete', 'guid' => $model->getIdProfil()], [
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
                'label' => Module::t('poczta-polska', 'Profile name'),
                'value' => $model->getNazwaSkrocona(),
            ],
            [
                'label' => Module::t('poczta-polska', 'Name'),
                'value' => $model->getNazwa()
            ],
            [
                'label' => Module::t('poczta-polska', 'Postal Code'),
                'value' => $model->getKodPocztowy(),
            ],
            [
                'label' => Module::t('poczta-polska', 'City'),
                'value' => $model->getMiejscowosc(),
            ],
            [
                'label' => Module::t('poczta-polska', 'Street'),
                'value' => $model->getUlica(),
            ],
            [
                'label' => Module::t('poczta-polska', 'House Number'),
                'value' => $model->getNumerDomu(),
            ],
            [
                'label' => Module::t('poczta-polska', 'Apartment Number'),
                'value' => $model->getNumerLokalu(),
            ],
            [
                'label' => Module::t('poczta-polska', 'Country'),
                'value' => $model->getKraj(),
            ],
        ],
    ]) ?>
</div>
