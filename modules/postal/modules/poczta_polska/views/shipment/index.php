<?php

use app\modules\postal\Module;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaRejestrowanaType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType;
use yii\data\DataProviderInterface;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var DataProviderInterface $dataProvider */
/** @var int $bufferId */

$this->title = Module::t('poczta-polska', 'Shipments');
$this->params['breadcrumbs'][] = ['url' => ['buffer/index'], 'label' => Module::t('poczta-polska', 'Buffers')];

$this->params['breadcrumbs'][] = $this->title;

?>
<div class="buffor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('poczta-polska', 'Send Buffer'), ['send', 'bufferId' => $bufferId], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Module::t('poczta-polska', 'Refresh Buffer'), ['index', 'bufferId' => $bufferId, 'refresh' => 1], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => Module::t('poczta-polska', 'Number'),
                'value' => function(PrzesylkaType $model): ?string {
                    if ($model instanceof PrzesylkaRejestrowanaType) {
                        return $model->getNumerNadania();
                    }
                    return null;
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'Receiver'),
                'value' => function(PrzesylkaType $model): ?string {
                    if ($model instanceof PrzesylkaRejestrowanaType) {
                        return $model->getNadawca()->getNazwa();
                    }
                    return null;
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'Description'),
                'value' => function(PrzesylkaType $model): ?string {
                    return $model->getOpis();
                }
            ],


//            [
//                'label' => Module::t('poczta-polska', 'Mass'),
//                'value' => function (PrzesylkaType $data) {
//                    return $data->getMasa();
//                }
//            ],
//            [
//                'label' => Module::t('poczta-polska', 'Format'),
//                'value' => function ($dataProvider) {
//                    return $dataProvider->getFormat();
//                }
//            ],
//            [
//                'label' => Module::t('poczta-polska', 'Category'),
//                'value' => function ($dataProvider) {
//                    return $dataProvider->getKategoria();
//                }
//            ],
            [
                'class' => ActionColumn::class,
                'template' => '{view} {update} {delete} {download-label}',
                'urlCreator' => function ($action, $model, $key) use ($bufferId) {
                    if ($action === 'download-label') {
                        return Url::to([$action, 'guid' => $key]);
                    }
                    return Url::to([$action, 'bufferId' => $bufferId, 'guid' => $key]);
                },
                'buttons' => [
                    'download-label' => function ($url) {
                        return Html::a(
                            '<i class="fa fa-envelope"></i>',
                            $url,
                            [
                                'title' => Module::t('poczta-polska', 'Label'),
                                'aria-label' => Module::t('poczta-polska', 'Label'),
                                'data-pjax' => '0',
                                'class' => 'btn btn-xs btn-primary',
                            ]
                        );
                    },
                ],

                'contentOptions' => ['style' => 'white-space:nowrap;'],
                'headerOptions' => ['style' => 'width:1%'],
            ],
        ],
    ]); ?>
</div>
