<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OpmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Opms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opm-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Opm', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Relatorio', ['relatorio'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cpai_id',
            'nome',
            'descricao:ntext',
            'dimencao',
            //'qtd_sd',
            //'qtd_cb',
            //'qtd_3sgt',
            //'qtd_2sgt',
            //'qtd_1sgt',
            //'qtd_st',
            //'qtd_2ten',
            //'qtd_1ten',
            //'qtd_cap',
            //'qtd_maj',
            //'qtd_tc',
            //'qtd_cel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
