<?php
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
  use yii\widgets\DetailView;
  use kartik\grid\GridView;
?>

<h1>Relatorio OPM</h1>

<div class="opm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'opmId')->dropdownList(
        $opmList,
    ['prompt'=>'Selecione a OPM de origem']) ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
</div>



<?= DetailView::widget([
        'model' => $model,        
        'attributes' => [
           'qtdPrevista',
           'qtdReal',
           'qtdInexistente'           
        ],
    ]) 
?>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => require(__DIR__.'/_columnsRelatorio.php'),'exportConfig' => [
           
            GridView::EXCEL=>[],
            
        ], 
        'toolbar'=> [
            ['content'=>
                
                Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''],
                ['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid']).
                '{toggleData}'.
                '{export}',
                
            ],
        ],    
        'striped' => true,
        'condensed' => true,
        'responsive' => true,          
        'panel' => [
            'type' => 'primary', 
            'heading' => '<i class="glyphicon glyphicon-list"></i> OPMs',
            'before'=>'',
            'after'=>''
        ]
    ])?> 