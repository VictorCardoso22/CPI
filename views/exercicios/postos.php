<?php 
use \yii\widgets\LinkPager;
?>

<h1>postos</h1>
<hr>

<ul>
  <?php foreach($postos as $posto) : ?>
  <li> <?= $posto-> nome ?> </li><br>

  <?php endforeach ?>
</ul>

<?= LinkPager::widget(['pagination'=>$pagination]);?>