<?php

namespace app\models;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "cpai".
 *
 * @property int $id
 * @property string $nome
 */
class Cpai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cpai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 20],
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
    public static function getList(){
        $droptions = self::find()->asArray()
                                 ->orderBy('nome')
                                 ->all();
        return ArrayHelper::map($droptions, "id","nome");
    }

}
