<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Opm */

$this->title = 'Create Opm';
$this->params['breadcrumbs'][] = ['label' => 'Opms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
