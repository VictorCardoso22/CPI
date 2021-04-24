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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
