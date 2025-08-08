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
        <?= Html::a(Module::t('poczta-polska', 'Create Buffor'), ['create'], ['class' => 'btn btn-success']) ?>
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
                'template' => '{view} {delete}',
                'urlCreator' => function ($action, $model, $key) {
                    return Url::to([$action, 'id' => $key]);
                },

                'contentOptions' => ['style' => 'white-space:nowrap;'],
                'headerOptions' => ['style' => 'width:1%'],
            ],
        ],
    ]); ?>
</div>
