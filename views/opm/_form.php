<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Opm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="opm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cpai_id')->dropdownList(
        $cpaiList,
    ['prompt'=>'Selecione a CPA de origem']) ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dimencao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qtd_sd')->textInput() ?>

    <?= $form->field($model, 'qtd_cb')->textInput() ?>

    <?= $form->field($model, 'qtd_3sgt')->textInput() ?>

    <?= $form->field($model, 'qtd_2sgt')->textInput() ?>

    <?= $form->field($model, 'qtd_1sgt')->textInput() ?>

    <?= $form->field($model, 'qtd_st')->textInput() ?>

    <?= $form->field($model, 'qtd_2ten')->textInput() ?>

    <?= $form->field($model, 'qtd_1ten')->textInput() ?>

    <?= $form->field($model, 'qtd_cap')->textInput() ?>

    <?= $form->field($model, 'qtd_maj')->textInput() ?>

    <?= $form->field($model, 'qtd_tc')->textInput() ?>

    <?= $form->field($model, 'qtd_cel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
