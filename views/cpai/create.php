<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cpai */

$this->title = 'Create Cpai';
$this->params['breadcrumbs'][] = ['label' => 'Cpais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cpai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
