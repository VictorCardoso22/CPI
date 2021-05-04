<?php
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
  use yii\widgets\DetailView;
?>

<h1>Relatorio Pessoa Situação</h1>

<div class="opm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'situacaoList')->dropdownList(
        $situacaoList,
    ['prompt'=>'Selecione a OPM de origem']) ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
</div>

<?= DetailView::widget([
        'model' => $model,        
        'attributes' => [
           'nome',
           'situacao'            
        ],
    ]) 
?>