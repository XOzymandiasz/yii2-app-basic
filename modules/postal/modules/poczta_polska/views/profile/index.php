<?php

use app\modules\postal\Module;
use yii\data\DataProviderInterface;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var DataProviderInterface $dataProvider */

$this->title = Module::t('poczta-polska', 'Profiles');
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="profile-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('poczta-polska', 'Create Profile'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label' => Module::t('poczta-polska', 'Profile Name'),
                'value' => function($dataProvider) {
                    return $dataProvider->getNazwaSkrocona();
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'Name'),
                'value' => function($dataProvider) {
                    return $dataProvider->getNazwa();
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'Postal Code'),
                'value' => function($dataProvider) {
                    return $dataProvider->getKodPocztowy();
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'City'),
                'value' => function($dataProvider) {
                    return $dataProvider->getMiejscowosc();
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'Street'),
                'value' => function($dataProvider) {
                    return $dataProvider->getUlica();
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'House Number'),
                'value' => function($dataProvider) {
                    return $dataProvider->getNumerDomu();
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'Apartment Number'),
                'value' => function($dataProvider) {
                    return $dataProvider->getNumerLokalu();
                }
            ],
            [
                'label' => Module::t('poczta-polska', 'Country'),
                'value' => function($dataProvider) {
                    return $dataProvider->getKraj();
                }
            ],
            [
                'class' => ActionColumn::class,
                'template' => '{view} {update}',
                'urlCreator' => function ($action, $model, $key) {
                    return Url::to([$action, 'id' => $key]);
                },
                'contentOptions' => ['style' => 'white-space:nowrap;'],
                'headerOptions' => ['style' => 'width:1%'],
            ],
        ],
    ]); ?>
</div>
