<?php

namespace app\models;

use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "situacao".
 *
 * @property int $id
 * @property string $nome
 *
 * @property PessoaSituacao[] $pessoaSituacaos
 */
class Situacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'situacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
        ];
    }

    /**
     * Gets query for [[PessoaSituacaos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPessoaSituacao()
    {
        return $this->hasMany(PessoaSituacao::className(), ['situacao_id' => 'id']);
    }
    public static function getList(){
        $droptions = self::find()->asArray()
                                 ->orderBy('nome')
                                 ->all();
        return ArrayHelper::map($droptions, "id","nome");
    }
}
