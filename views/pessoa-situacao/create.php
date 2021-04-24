<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PessoaSituacao */

$this->title = 'Create Pessoa Situacao';
$this->params['breadcrumbs'][] = ['label' => 'Pessoa Situacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-situacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
