<?php

use app\modules\postal\Module;
use yii\data\DataProviderInterface;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var DataProviderInterface $dataProvider */

$this->title = Module::t('poczta-polska', 'Shipments');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="buffor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('poczta-polska', 'Send Buffor'), ['send'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Module::t('poczta-polska', 'Create Buffor'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label' => Module::t('poczta-polska', 'Mass'),
                'value' => function($dataProvider) {
                    return $dataProvider->getMasa();
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'Format'),
                'value' => function($dataProvider) {
                    return $dataProvider->getFormat();
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'Category'),
                'value' => function($dataProvider) {
                    return $dataProvider->getKategoria();
                }
            ],
            [
                'class' => ActionColumn::class,
                'template' => '{view} {delete} {downloadLabel}',
                'urlCreator' => function ($action, $model, $key) {
                    return Url::to([$action, 'id' => $key]);
                },
                'buttons' => [
                    'downloadLabel' => function ($url) {
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
