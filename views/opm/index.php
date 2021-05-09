<?php

use yii\helpers\Html;
// use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OpmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Opms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opm-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Adicionar Opm', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Relatorio', ['relatorio'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => require(__DIR__.'/_columns.php'),'exportConfig' => [
           
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
    ])?> ?>


</div>
