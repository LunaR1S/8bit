<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
    <div class="back1">
        <?php $form = ActiveForm::begin(['options'=>['class'=>'form2']]) ?>
            <?= $form->field($model,'email')->input('text',['class'=>'input3']) ?>
            <?= $form->field($model,'password')->input('text',['class'=>'input3']) ?>
            <?= Html::submitButton('Войти',  ['class' => 'reg1']) ?>
        <?php ActiveForm::end(); ?>
        <div class="op">Вход</div>
        <div class="zab">Забыл пароль?</div>
<!--        <button class="login">Войти</button>-->
        <div class="line1">
            <hr class="hr1">
                <font class="font1">ИЛИ</font>
            <hr class="hr1">
        </div>
        <a class="reg" href="registration">Регистрация</a>
    </div>
<!--<input type="email" class="input1" placeholder="E-mail">-->
<!--<input type="password" class="input2" placeholder="Пароль">-->
