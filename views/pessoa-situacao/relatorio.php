<?php
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
  use yii\widgets\DetailView;
  use yii\grid\GridView;
 
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

<?= GridView::widget([
   
  'dataProvider' => $dataProvider, 
//   'model' => function($model){
//       return $model->situaca->id;
//   },
  'columns' => [
      ['class' => 'yii\grid\SerialColumn'],  
      
           'id',        
        [
            'label' => 'Nome',
            'attribute' => 'pessoa_id',
            'content' => function($model){
                return $model->pessoa->nome;
            }
        ],
        [
            'label' => 'Situação',
            'attribute' => 'situacao_id',
            'content' => function($model){
                return $model->situacao->nome;
            }
        ],        
        ]
]);
?>
<!-- 

//  GridView::widget([
//         'model' => $model,        
//         'attributes' => [
//            'nome',
//            'situacao'            
//         ],
//     ]) 
