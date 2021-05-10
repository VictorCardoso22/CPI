<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;


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

    <?= $form->field($model, 'data_inicio')->widget(DatePicker::class, [
                    'id' => 'data_inicio',
                    'options' => [
                        'id' => 'data_inicio',
                        'placeholder' => 'Informe a data inicial da situação.'
                    ],
                    'convertFormat' => true,
                    'pluginOptions' => [
                        // 'format' => 'dd/MM/yyyy',
                        'format' => 'yyyy-MM-dd',
                        'autoclose' => true,
                        'todayHighlight' => true,
                        'startDate' => '01/01/1900',
                        // 'endDate' => "0d"
                    ]
                ]) ?>

    <?= $form->field($model, 'data_fim')->widget(DatePicker::class, [
                    'id' => 'data_fim',
                    'options' => [
                        'id' => 'data_fim',
                        'placeholder' => 'Informe a data prevista para finalizar a situação.'
                    ],
                    'convertFormat' => true,
                    'pluginOptions' => [
                        // 'format' => 'dd/MM/yyyy',
                        'format' => 'yyyy-MM-dd',
                        'autoclose' => true,
                        'todayHighlight' => true,
                        'startDate' => '01/01/1900',
                        // 'endDate' => "0d"
                    ]
                ])
        ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
  
    <?php ActiveForm::end(); ?>
   
   
</div>
