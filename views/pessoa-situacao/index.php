<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PessoaSituacaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pessoa Situacaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-situacao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pessoa Situacao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            // 'pessoa_id',
            [
                'label' => 'Nome',
                'attribute' => 'pessoa_id',
                'content' => function($model){
                    return $model->pessoa->nome;
                }
            ],
            // 'situacao_id',
            [
                'label' => 'Situação',
                'attribute' => 'situacao_id',
                'content' => function($model){
                    return $model->situacao->nome;
                }
            ],
            'data_inicio',
            'data_fim',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
