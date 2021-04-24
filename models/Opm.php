<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "opm".
 *
 * @property int $id
 * @property int $cpai_id
 * @property string $nome
 * @property string $descricao
 * @property float $dimencao
 *
 * @property Local[] $locals
 * @property Pessoas[] $pessoas
 */
class Opm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'opm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cpai_id', 'nome', 'descricao', 'dimencao'], 'required'],
            [['cpai_id'], 'integer'],
            [['descricao'], 'string'],
            [['dimencao'], 'number'],
            [['nome'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cpai_id' => 'Cpai ID',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'dimencao' => 'Dimencao',
        ];
    }

    /**
     * Gets query for [[Locals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocals()
    {
        return $this->hasMany(Local::className(), ['opm_id' => 'id']);
    }

    /**
     * Gets query for [[Pessoas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPessoas()
    {
        return $this->hasMany(Pessoas::className(), ['opm_id' => 'id']);
    }
}
