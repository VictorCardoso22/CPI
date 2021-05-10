<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "local".
 *
 * @property int $id
 * @property int $opm_id
 * @property string $nome
 *
 * @property Opm $opm
 */
class Local extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'local';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['opm_id', 'nome'], 'required'],
            [['opm_id'], 'integer'],
            [['nome'], 'string', 'max' => 40],
            [['opm_id'], 'exist', 'skipOnError' => true, 'targetClass' => Opm::className(), 'targetAttribute' => ['opm_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'opm_id' => 'Opm ID',
            'nome' => 'Nome',
        ];
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
}
