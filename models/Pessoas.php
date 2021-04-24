<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoas".
 *
 * @property int $id
 * @property float $cpf
 * @property string $nome
 * @property string $nome_guerra
 * @property string $sexo
 * @property int $opm_id
 * @property int $posto_id
 *
 * @property PessoaSituacao[] $pessoaSituacaos
 * @property Opm $opm
 * @property Postos $posto
 */
class Pessoas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pessoas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cpf', 'nome', 'nome_guerra', 'sexo', 'opm_id', 'posto_id'], 'required'],
            [['cpf'], 'number'],
            [['opm_id', 'posto_id'], 'integer'],
            [['nome'], 'string', 'max' => 100],
            [['nome_guerra'], 'string', 'max' => 40],
            [['sexo'], 'string', 'max' => 10],
            [['opm_id'], 'exist', 'skipOnError' => true, 'targetClass' => Opm::className(), 'targetAttribute' => ['opm_id' => 'id']],
            [['posto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Postos::className(), 'targetAttribute' => ['posto_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cpf' => 'Cpf',
            'nome' => 'Nome',
            'nome_guerra' => 'Nome Guerra',
            'sexo' => 'Sexo',
            'opm_id' => 'Opm ID',
            'posto_id' => 'Posto ID',
        ];
    }

    /**
     * Gets query for [[PessoaSituacaos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPessoaSituacaos()
    {
        return $this->hasMany(PessoaSituacao::className(), ['pessoa_id' => 'id']);
    }

    /**
     * Gets query for [[Opm]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOpm()
    {
        return $this->hasOne(Opm::className(), ['id' => 'opm_id']);
    }

    /**
     * Gets query for [[Posto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosto()
    {
        return $this->hasOne(Postos::className(), ['id' => 'posto_id']);
    }
}
