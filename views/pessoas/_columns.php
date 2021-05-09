<?php

use yii\helpers\Url;
use app\models\Opm;
use app\models\Postos;
use app\models\Situacao;
use app\models\PessoaSituacao;

return [
  [
    'class' => 'kartik\grid\SerialColumn',
    'width' => '30px',
],

            'cpf',
            'nome',
            'nome_guerra',
            'sexo',
            // 'opm_id',
            [
                'class'=>'\kartik\grid\DataColumn',
                'label' => 'OPM',
                'attribute' => 'opm_id',
                'filter' => Opm::getlist(),
                'content' => function($model){
                    return $model->opm->nome;
                }
            ],
            // 'posto_id',
            [
                'class'=>'\kartik\grid\DataColumn',
                'label' => 'Posto',
                'attribute' => 'posto_id',
                'filter' => Postos::getlist(),
                'content' => function($model){
                    return $model->posto->nome;
                }
            ],
            [
                'class'=>'\kartik\grid\DataColumn',
                'label' => 'Situação',
                'attribute' => 'situacaoNome',
                'filter' => Situacao::getlist(),
                'content' => function($model){
                    // return $model->pessoaSituacao->situacao->nome;
                }
              ],
              [
                'class' => 'kartik\grid\ActionColumn',
                'dropdown' => false,
                'vAlign'=>'middle',
                // 'template'=>'{view}',
                'urlCreator' => function($action, $model, $key, $index) { 
                        return Url::to([$action,'id'=>$key]);
                },
               
            ],
            ];
?>