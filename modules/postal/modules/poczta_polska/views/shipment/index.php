<?php

use app\modules\postal\Module;
use yii\data\DataProviderInterface;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var DataProviderInterface $dataProvider */
/** @var int $idBuffer */

$this->title = Module::t('poczta-polska', 'Shipments');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="buffor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('poczta-polska', 'Send Buffer'), ['send', 'idBuffer' => $idBuffer], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Module::t('poczta-polska', 'Create Buffer'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Module::t('poczta-polska', 'Refresh Buffer'), ['index', 'idBuffer' => $idBuffer, 'refresh' => 1], ['class' => 'btn btn-success']) ?>
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
                'template' => '{view} {delete} {download-label}',
                'urlCreator' => function ($action, $model, $key) use ($idBuffer) {
                    if($action === 'delete') {
                        return Url::to([$action, 'guid' => $key, 'idBuffer' => $idBuffer]);
                    }
                    return Url::to([$action, 'guid' => $key]);
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
