<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "veiculo".
 *
 * @property int $id
 * @property string $modelo
 * @property string $marca
 * @property string $ano
 * @property string $numero
 */
class Veiculo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'veiculo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['modelo', 'marca', 'ano', 'numero'], 'required'],
            [['modelo', 'marca'], 'string', 'max' => 45],
            [['ano'], 'string', 'max' => 4],
            [['numero'], 'string', 'max' => 7],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'modelo' => 'Modelo',
            'marca' => 'Marca',
            'ano' => 'Ano',
            'numero' => 'Numero',
        ];
    }
}
