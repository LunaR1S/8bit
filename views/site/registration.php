<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 20.07.2019
 * Time: 21:00
 */
use yii\helpers\Html;
?>
<div class="back2">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'full_name') ?>
    <?= $form->field($model, 'age') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'repassword')->passwordInput() ?>
    <?= $form->field($model, 'descriptions')->textarea(['rows' => '7'])?>
    <?= Html::submitButton('Регистрация', ['class' => 'btn btn-success'])?>
    <?php ActiveForm::end(); ?>
</div>
