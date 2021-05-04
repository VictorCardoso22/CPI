<?php

namespace app\models;
use yii\base\Model;
use app\models\PessoaSituacao;
use app\models\Pessoas;
use app\models\Situacao;

use Yii;

class PessoaSituacaoRelatorio extends Model
{
  public $situacaoId;
  public $situacaoList;
  public $nome;
  public $situacao;

  


  public function rules()
  {

    return [
      [['situacaoList'],'required'],
    ];
  }

  public function attributeLabels()
    {
        return [
            'nome' => 'Nome',
            'situacao' => 'Situação',
        ];
    }
}

?>