<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pessoas */

$this->title = 'Create Pessoas';
$this->params['breadcrumbs'][] = ['label' => 'Pessoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'postoList' => $postoList,
        'opmList' => $opmList,
    ]) ?>

</div>
