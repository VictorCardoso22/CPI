<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OpmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="opm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cpai_id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'dimencao') ?>

    <?php // echo $form->field($model, 'qtd_sd') ?>

    <?php // echo $form->field($model, 'qtd_cb') ?>

    <?php // echo $form->field($model, 'qtd_3sgt') ?>

    <?php // echo $form->field($model, 'qtd_2sgt') ?>

    <?php // echo $form->field($model, 'qtd_1sgt') ?>

    <?php // echo $form->field($model, 'qtd_st') ?>

    <?php // echo $form->field($model, 'qtd_2ten') ?>

    <?php // echo $form->field($model, 'qtd_1ten') ?>

    <?php // echo $form->field($model, 'qtd_cap') ?>

    <?php // echo $form->field($model, 'qtd_maj') ?>

    <?php // echo $form->field($model, 'qtd_tc') ?>

    <?php // echo $form->field($model, 'qtd_cel') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
