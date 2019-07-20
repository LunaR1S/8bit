<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 20.07.2019
 * Time: 14:38
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Регистрация</h1>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'full_name') ?>
    <?= $form->field($model, 'age') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'repassword')->passwordInput() ?>
    <?= $form->field($model, 'descriptions')->textarea(['rows' => '7'])?>
    <?= Html::submitButton('Регистрация', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end(); ?>
