<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PessoasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pessoas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pessoas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cpf',
            'nome',
            'nome_guerra',
            'sexo',
            //'opm_id',
            //'posto_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
