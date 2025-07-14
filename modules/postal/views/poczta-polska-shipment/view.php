<?php

use app\modules\postal\entities\Mail;
use app\modules\postal\Module;
use app\modules\postal\widgets\MailViewWidget;
use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\postal\models\PocztaPolskaShipment $model */
/** @var Mail|null $mail */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Module::t('poczta-polska', 'Poczta Polska Shipments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>
<div class="poczta-polska-shipment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('poczta-polska', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Module::t('poczta-polska', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Module::t('poczta-polska', 'Are you sure you want to delete this item?'),
                'method' => 'poczta-polska-shipment-check',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'number',
            'created_at',
            'updated_at',
            'finished_at',
            'shipment_at',
            'api_data:ntext',
        ],
    ]) ?>


    <?= $mail
        ? MailViewWidget::widget([
            'model' => $mail
        ])
        : ''
    ?>

</div>
