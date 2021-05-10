<?php

namespace app\models;

use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "pessoa_situacao".
 *
 * @property int $id
 * @property int $pessoa_id
 * @property int $situacao_id
 * @property string $data_inicio
 * @property string|null $data_fim
 * @property string $status
 *
 * @property Pessoas $pessoa
 * @property Situacao $situacao
 */
class PessoaSituacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pessoa_situacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pessoa_id', 'situacao_id', 'data_inicio', 'status'], 'required'],
            [['pessoa_id', 'situacao_id'], 'integer'],
            [['data_inicio', 'data_fim'], 'safe'],
            [['status'], 'string', 'max' => 20],
            [['pessoa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoas::className(), 'targetAttribute' => ['pessoa_id' => 'id']],
            [['situacao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Situacao::className(), 'targetAttribute' => ['situacao_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome_pessoa' => 'Pessoa ID',
            'situacao_id' => 'Situacao ID',
            'data_inicio' => 'Data Inicio',
            'data_fim' => 'Data Fim',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Pessoa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPessoa()
    {
        return $this->hasOne(Pessoas::className(), 
        [
            'id' => 'pessoa_id'
            
        ]);
    }

    /**
     * Gets query for [[Situacao]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSituacao()
    {
        return $this->hasOne(Situacao::className(), ['id' => 'situacao_id']);
    }
    public static function getList(){
        $droptions = self::find()->asArray()
                                 ->orderBy('situacao_id')
                                 ->all();
        return ArrayHelper::map($droptions, "id","situacao_id");
    }

    public static function getSituacaoList(){
        $droptions = self::find()->asArray()
                                 ->where(['situacao_id' => 'situacao_id'])
                                 ->orderBy('situacao_id')
                                 ->all();
        return ArrayHelper::map($droptions, "id", "nome_pessoa","situacao_id");
    }
}
