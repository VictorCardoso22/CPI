<?php

namespace app\models;
use app\models\Cpai;
use yii\base\Model;

use Yii;

class OpmRelatorio extends Model
{
  public $opmId;
  public $qtdPrevista;
  public $qtdReal;
  public $qtdInexistente;

  public $percPrevista;
  public $percReal;
  public $percInexistente;




  public function rules()
  {

    return [
      [['opmId'],'required'],
    ];
  }

  public function attributeLabels()
    {
        return [
            'qtdPrevista' => 'Quantidade Prevista',
            'qtdReal' => 'Quantidade Real',
            'qtdInexistente' => 'Quantidade Inexistente'
        ];
    }
}

?>