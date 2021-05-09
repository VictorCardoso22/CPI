<?php

use yii\helpers\Url;
use app\models\Opm;
use app\models\Cpai;

return [
  [
    'class' => 'kartik\grid\SerialColumn',
    'width' => '30px',
],
            // 'id',
            // 'cpai_id',
            [
                 'class'=>'\kartik\grid\DataColumn',
                'label' => 'CPA',
                'attribute' => 'cpai_id',
                'filter' => Cpai::getlist(),
                'content' => function($model){
                    return $model->cpai->nome;
                }
            ],
            'nome',
            'descricao:ntext',
            'dimencao',
            //'qtd_sd',
            //'qtd_cb',
            //'qtd_3sgt',
            //'qtd_2sgt',
            //'qtd_1sgt',
            //'qtd_st',
            //'qtd_2ten',
            //'qtd_1ten',
            //'qtd_cap',
            //'qtd_maj',
            //'qtd_tc',
            //'qtd_cel',

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