<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Opm */

$this->title = 'Update Opm: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Opms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="opm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'cpaiList' => $cpaiList,
    ]) ?>

</div>
