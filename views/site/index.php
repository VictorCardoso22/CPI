<?php
use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="local-view">

<h3 class="mt-4 mb-4"><?= Html::encode($this->title) ?></h3>


<div class="row">
  <div class="col-md-4">
    <!-- Widget: user widget style 2 -->
    <div class="card card-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-warning">
        <div class="widget-user-image">
          <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
        </div>
        <!-- /.widget-user-image -->
        <h3 class="widget-user-username">CPAS</h3>
        <h5 class="widget-user-desc"></h5>
      </div>
      <div class="card-footer p-0">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="/index.php?r=cpai/index" class="nav-link">
            ver <!--  <span class="float-right badge bg-primary">31</span> -->
            </a>
          </li>
   
        </ul>
      </div>
    </div>
    <!-- /.widget-Unidades -->
  </div>
  <!-- /.col -->
  <div class="col-md-4">
    <!-- Widget: user widget style 2 -->
    <div class="card card-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-warning">
        <div class="widget-user-image">
          <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
        </div>
        <!-- /.widget-user-image -->
        <h3 class="widget-user-username">OPMS</h3>
        <h5 class="widget-user-desc"></h5>
      </div>
      <div class="card-footer p-0">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="/index.php?r=opm/index" class="nav-link">
              ver 
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /.widget-Unidades -->
  </div>
  <!-- /.col -->
  <div class="col-md-4">
    <!-- Widget: user widget style 2 -->
    <div class="card card-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-warning">
        <div class="widget-user-image">
          <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
        </div>
        <!-- /.widget-user-image -->
        <h3 class="widget-user-username">Efetivo</h3>
        <h5 class="widget-user-desc"></h5>
      </div>
      <div class="card-footer p-0">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="/index.php?r=pessoas/index" class="nav-link">
              Ver 
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <!-- /.widget-Unidades -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

</div>