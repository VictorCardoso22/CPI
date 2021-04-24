<?php
namespace app\controllers;

use Yii;
use app\models\Postos;
use app\models\CadastroModel;
use yii\web\Controller;
use yii\data\Pagination;



class ExerciciosController extends Controller{
  public function actionFormulario(){

    $cadastroModel = new CadastroModel;
    $post = Yii::$app->request->post();

    if($cadastroModel->load($post) && $cadastroModel->validate()){
      return $this->render('formulario-confirmacao',[
        'model' => $cadastroModel
      ]);

    }else{
      return $this->render('formulario',[
        'model' => $cadastroModel
      ]);
    }

   
  }

  public function actionPostos(){
    // $postos = Postos::find()->orderBy('nome')->all();
    // echo '<pre>'; print_r($postos);

    // $posto = Postos::findOne(5);
    // echo $posto->nome;

    $query = Postos::find();
    $pagination = new Pagination([
      'defaultPageSize' => 3,
      'totalCount' => $query->count()
    ]);

    $postos = $query->orderBy('id')
                    ->offset($pagination->offset)
                    ->limit($pagination->limit)
                    ->all();

    return $this->render('postos', [
      'postos' =>$postos,
      'pagination'=>$pagination
    ]);
  }
}