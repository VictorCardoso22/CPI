<?php

use yii\helpers\Html;
// use yii\grid\GridView;
use kartik\grid\GridView;
use app\models\Opm;
use app\models\Postos;
use app\models\Situacao;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PessoasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pessoas';
$this->params['breadcrumbs'][] = $this->title;

$pdfHeader = [
    'L' => [
        'content' => '',
        'font-size' => 8,
        'color' => '#333333',
    ],
    'C' => [
        'content' => 'Agendados para testagem - COVID-19',
        'font-size' => 16,
        'color' => '#333333',
    ],
    'R' => [
        'content' => 'Gerado em: ' . ': ' . date('d/m/Y'),
        'font-size' => 8,
        'color' => '#333333',
    ],

    
];

$pdfFooter = [
    'L' => [
        'content' => 'Mensagem Footer',
        'font-size' => 8,
        'font-style' => 'B',
        'color' => '#999999',
    ],
    'R' => [
        'content' => '[ {PAGENO} ]',
        'font-size' => 10,
        'font-style' => 'B',
        'font-family' => 'serif',
        'color' => '#333333',
    ],
    'line' => true,
];
?>
<div class="pessoas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Adicionar Pessoa', ['create'], ['class' => 'btn btn-success']) ?>
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
            'heading' => '<i class="glyphicon glyphicon-list"></i> Pessoas',
            'before'=>'',
            'after'=>''
        ]
    ])?>


</div>
