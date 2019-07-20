<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Авторизация</h1>
<?php $form = ActiveForm::begin(); ?>
    <?=$form->field($model,'email'); ?>
    <?=$form->field($model,'password')->passwordInput(); ?>
    <?=Html::submitButton('Войти',['class'=>'btn btn-success']) ?>
<?php ActiveForm::end() ?>

