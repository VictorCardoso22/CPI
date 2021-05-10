<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Opm */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Opms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="opm-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [   
                'label'=>'CPAI',
                'value'=> $model->cpai->nome,
            ],
            'nome',
            'descricao:ntext',
            'dimencao',
            'qtd_sd',
            'qtd_cb',
            'qtd_3sgt',
            'qtd_2sgt',
            'qtd_1sgt',
            'qtd_st',
            'qtd_2ten',
            'qtd_1ten',
            'qtd_cap',
            'qtd_maj',
            'qtd_tc',
            'qtd_cel',
        ],
    ]) ?>

</div>
