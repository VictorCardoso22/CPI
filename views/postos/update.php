<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Postos */

$this->title = 'Update Postos: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Postos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="postos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
