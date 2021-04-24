<?php
use \yii\bootstrap\ActiveForm;
use \yii\helpers\Html;
?>

<h2> Formulario de Cadastro - Yii2 </h2>

<?php $form = ActiveForm::begin() ?>
  <?= $form->field($model, 'nome') ?>

  <?= $form->field($model, 'idade') ?>

  <?= $form->field($model, 'email') ?>

  <div class="form-group"> 
    <?= Html::submitButton('Enviar Dados', ['class'=>'btn btn-primary']) ?>
  </div>
<?php ActiveForm::end() ?>