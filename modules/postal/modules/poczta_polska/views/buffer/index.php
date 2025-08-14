<?php

use app\modules\postal\Module;
use yii\data\DataProviderInterface;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var DataProviderInterface $dataProvider */

$this->title = Module::t('poczta-polska', 'Buffors');
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="buffor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('poczta-polska', 'Create Buffer'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label' => Module::t('poczta-polska', 'Name'),
                'value' => function($dataProvider) {
                    return $dataProvider->getOpis();
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'Send at'),
                'value' => function($dataProvider) {
                    return $dataProvider->getDataNadania();
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'Dispatch Office'),
                'value' => function($dataProvider) {
                    return $dataProvider->getUrzadNadania();
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'Is active'),
                'value' => fn($model) => $model->getActive() ? Module::t('common', 'Yes') : Module::t('common', 'No'),
            ],
            [
                'class' => ActionColumn::class,
                'template' => '{view} {delete} {shipment} {update}',
                'urlCreator' => function ($action, $model, $key) {
                    if ($action === 'shipment') {
                        return Url::to(['shipment/index', 'bufferId' => $key]);
                    }
                    return Url::to([$action, 'id' => $key]);
                },
                'buttons' => [
                    'shipment' => function ($url) {
                        return Html::a(
                            '<i class="fa fa-envelope"></i>',
                            $url,
                            [
                                'title' => Module::t('poczta-polska', 'Shipments'),
                                'aria-label' => Module::t('poczta-polska', 'Shipments'),
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
