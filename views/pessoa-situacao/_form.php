<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\date\DatePicker;
// use kartikorm\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PessoaSituacao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pessoa-situacao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pessoa_id')->dropdownList(
       $pessoaList,
    ['prompt'=>'Selecione a Pessoa']) ?>

    <?= $form->field($model, 'situacao_id')->dropdownList(
       $situacaoList,
    ['prompt'=>'Selecione a Situação']) ?>

    <?= $form->field($model, 'data_inicio')->textInput() ?>

    <?= $form->field($model, 'data_fim')->widget(DatePicker::class, [
                    'id' => 'data_fim',
                    'options' => [
                        'id' => 'data_fim',
                        'placeholder' => 'Mensagem...'
                    ],
                    'convertFormat' => true,
                    'pluginOptions' => [
                        'format' => 'dd/MM/yyyy',
                        'autoclose' => true,
                        'todayHighlight' => true,
                        'startDate' => '01/01/1900',
                        'endDate' => "0d"
                    ]
                ])
        ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
  
    <?php ActiveForm::end(); ?>
   
   
</div>
