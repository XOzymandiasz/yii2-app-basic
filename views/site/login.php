<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

$this->title = 'Logowanie';

?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name') ?>

<div class="form-group">
    <?= Html::submitButton('Zaloguj', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

