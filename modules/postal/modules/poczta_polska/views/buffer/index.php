<?php

use app\modules\postal\Module;
use yii\data\DataProviderInterface;
use yii\grid\GridView;
use yii\helpers\Html;

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
                'attribute' => 'name',
                'label' => Module::t('poczta-polska', 'Name'),
            ],
            [
                'attribute' => 'sendAt',
                'label' => Module::t('poczta-polska', 'Send at'),
            ],
            [
                'attribute' => 'dispatchOfficeId',
                'label' => Module::t('poczta-polska', 'Dispatch Office'),
            ],
            [
                'attribute' => 'isActive',
                'label' => Module::t('poczta-polska', 'Is active'),
                'value' => fn($model) => $model->isActive ? Module::t('common', 'Yes') : Module::t('common', 'No'),
            ],
            [
                'attribute' => 'profilId',
                'label' => Module::t('poczta-polska', 'Profile'),
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->profilId], [
                            'data' => [
                                'confirm' => Module::t('common', 'Are you sure you want to delete this item?'),
                                'method' => 'post',
                            ],
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>
</div>
