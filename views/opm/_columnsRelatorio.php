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
            // 'nome',
            [
              'class'=>'\kartik\grid\DataColumn',
             'label' => 'OPM',
             'attribute' => 'nome',
            ],    
            // 'descricao:ntext',
            // 'dimencao',
            // 'qtd_sd',
             // 'qtd_cb',
            // 'qtd_3sgt',
            // 'qtd_2sgt',
            // 'qtd_1sgt',
            // 'qtd_st',
            // 'qtd_2ten',
            // 'qtd_1ten',
            // 'qtd_cap',
            // 'qtd_maj',
            // 'qtd_tc',
            // 'qtd_cel',
            [
              'class'=>'\kartik\grid\DataColumn',
             'label' => 'SD',
             'attribute' => 'qtd_sd',
            ],     
            [
              'class'=>'\kartik\grid\DataColumn',
             'label' => 'CB',
             'attribute' => 'qtd_cb',
            ], 
            [
              'class'=>'\kartik\grid\DataColumn',
             'label' => '3º SGT',
             'attribute' => 'qtd_3sgt',
            ],     
            [
              'class'=>'\kartik\grid\DataColumn',
             'label' => '2º SGT',
             'attribute' => 'qtd_2sgt',
            ],
            [
              'class'=>'\kartik\grid\DataColumn',
             'label' => '1º SGT',
             'attribute' => 'qtd_1sgt',
            ],
            [
              'class'=>'\kartik\grid\DataColumn',
             'label' => 'ST',
             'attribute' => 'qtd_st',
            ],
            [
              'class'=>'\kartik\grid\DataColumn',
             'label' => '2º TEN',
             'attribute' => 'qtd_2ten',
            ], [
              'class'=>'\kartik\grid\DataColumn',
             'label' => '1º TEN',
             'attribute' => 'qtd_1ten',
            ],     
            [
              'class'=>'\kartik\grid\DataColumn',
             'label' => 'CAP',
             'attribute' => 'qtd_cap',
            ],
            [
              'class'=>'\kartik\grid\DataColumn',
             'label' => 'MAJ',
             'attribute' => 'qtd_maj',
            ],
            [
              'class'=>'\kartik\grid\DataColumn',
             'label' => 'TC',
             'attribute' => 'qtd_tc',
            ],
            [
              'class'=>'\kartik\grid\DataColumn',
             'label' => 'CEL',
             'attribute' => 'qtd_cel',
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