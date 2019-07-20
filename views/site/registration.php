<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="back2">
    <div class="op">Регистрация</div>
    <?php $form = ActiveForm::begin(['options'=>['class'=>'form1']]); ?>
    <?= $form->field($model, 'email')->input('text',['class'=>'input3']) ?>
    <?= $form->field($model, 'full_name')->input('text',['class'=>'input3']) ?>
    <?= $form->field($model, 'age')->input('integer',['class'=>'input3']) ?>
    <?= $form->field($model, 'password')->passwordInput()->input('text',['class'=>'input3']) ?>
    <?= $form->field($model, 'repassword')->passwordInput()->input('text',['class'=>'input3']) ?>
    <?= $form->field($model, 'descriptions')->textarea(['rows' => '7','class'=>'input3'])?>
    <?= Html::submitButton('Регистрация', ['class' => 'reg1'])?>
    <?php ActiveForm::end(); ?>
</div>

