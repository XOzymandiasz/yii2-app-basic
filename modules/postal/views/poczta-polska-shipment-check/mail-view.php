<?php

use app\modules\postal\entities\Mail;
use app\modules\postal\Module;
use app\modules\postal\widgets\MailViewWidget;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;
use yii\web\View;

/** @var View $this */
/** @var Mail $model */
/** @var bool $addPostInfo */
$eventsGridView = new ArrayDataprovider([
    'allModels' => $model->mailInfo->events,
]);
?>

<h2><?= Module::t('poczta-polska', 'Shipment Data') ?></h2>




<div class="poczta-polska-mail-view">
    <?= MailViewWidget::widget([
        'model' => $model,
        'withEvents' => false
    ]) ?>


    <?= GridView::widget([
            'dataProvider' => $eventsGridView,
            'columns' => [
                'name',
                'finished:boolean',
                'canceled:boolean',
                'time:datetime',
                'state.name',
                [
                    'label' => Module::t('poczta-polska', 'Place'),
                    'attribute' => 'postOffice.name',
                    'visible' => $addPostInfo,
                ]
            ]
        ]
    ) ?>
</div>
