<?php

use app\modules\postal\Module;
use app\modules\postal\modules\poczta_polska\models\search\EnvelopeSearch;
use app\modules\postal\modules\poczta_polska\sender\StructType\EnvelopeInfoType;
use yii\bootstrap5\Nav;
use yii\data\DataProviderInterface;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var EnvelopeSearch $searchModel */
/** @var DataProviderInterface $dataProvider */
/** @var array $statusNavItems */

$this->title = Module::t('poczta-polska', 'Envelopes - {status}', [
    'status' => $searchModel->getStatusName()
]);
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="envelope-buffers">

    <h1><?= Html::encode($this->title) ?></h1>


    <p>
        <?= Html::a(Module::t('poczta-polska', 'Create Buffer'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= $this->render('_search', [
        'model' => $searchModel
    ]) ?>

    <div class="row">

        <div class="col-xs-12 col-md-3">
            <?= Nav::widget([
                'items' => $statusNavItems,
                'options' => ['class' => 'nav-pills'],
            ]) ?>
        </div>

        <div class="col-xs-12 col-md-9">
            <?= GridView::widget(config: [
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    [   'attribute' => 'envelopeId',
                        'label' => Module::t('poczta-polska', 'Envelope ID'),
                        'value' => function (EnvelopeInfoType $data) {
                            return $data->getIdEnvelope();
                        }
                    ],
                    [   'attribute' => 'cardId',
                        'label' => Module::t('poczta-polska', 'Card ID'),
                        'value' => function (EnvelopeInfoType $data) {
                            return $data->getIdKarta();
                        }
                    ],
                    [   'attribute' => 'transmitAt',
                        'label' => Module::t('poczta-polska', 'Transmit At'),
                        'value' => function (EnvelopeInfoType $data) {
                            return $data->getDataTransmisji();
                        }
                    ],
                    [   'attribute' => 'envelopeStatus',
                        'label' => Module::t('poczta-polska', 'Envelope Status'),
                        'value' => function (EnvelopeInfoType $data) {
                            return $data->getEnvelopeStatus();
                        }
                    ],
                    [   'attribute' => 'envelopeFile',
                        'label' => Module::t('poczta-polska', 'Envelope File'),
                        'value' => function (EnvelopeInfoType $data) {
                            $files = $data->getEnvelopeFilename();
                            return Html::ul($files);
                        },
                        'format' => 'html',
                    ],
                    [
                        'class' => ActionColumn::class,
                        'template' => '{sender-book}',
                        'buttons' => [
                            'sender-book' => function ($url, EnvelopeInfoType $data) {
                                return Html::a('BOOK', $url, [
                                    'data-method' => 'post',
                                ]);
                            }
                        ]
                    ]
                ],
            ]); ?>
        </div>
    </div>

</div>
