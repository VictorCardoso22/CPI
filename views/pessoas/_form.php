<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pessoas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pessoas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cpf')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome_guerra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opm_id')->dropdownList([
        1 => 'item 1', 
        2 => 'item 2'
    ],
    ['prompt'=>'Selecione a opm']) ?>

    <!-- ->dropdownList([
        1 => 'item 1', 
        2 => 'item 2'
    ],
    ['prompt'=>'Select Category'] -->

    <?= $form->field($model, 'posto_id')->dropdownList([
        1 => 'item 1', 
        2 => 'item 2'
    ],
    ['prompt'=>'Selecione o posto'])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
