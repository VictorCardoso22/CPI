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
 * @property string $dimencao
 * @property int|null $qtd_sd
 * @property int|null $qtd_cb
 * @property int|null $qtd_3sgt
 * @property int|null $qtd_2sgt
 * @property int|null $qtd_1sgt
 * @property int|null $qtd_st
 * @property int|null $qtd_2ten
 * @property int|null $qtd_1ten
 * @property int|null $qtd_cap
 * @property int|null $qtd_maj
 * @property int|null $qtd_tc
 * @property int|null $qtd_cel
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
            [['cpai_id', 'qtd_sd', 'qtd_cb', 'qtd_3sgt', 'qtd_2sgt', 'qtd_1sgt', 'qtd_st', 'qtd_2ten', 'qtd_1ten', 'qtd_cap', 'qtd_maj', 'qtd_tc', 'qtd_cel'], 'integer'],
            [['descricao'], 'string'],
            [['nome'], 'string', 'max' => 40],
            [['dimencao'], 'string', 'max' => 100],
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
            'qtd_sd' => 'Qtd Sd',
            'qtd_cb' => 'Qtd Cb',
            'qtd_3sgt' => 'Qtd 3sgt',
            'qtd_2sgt' => 'Qtd 2sgt',
            'qtd_1sgt' => 'Qtd 1sgt',
            'qtd_st' => 'Qtd St',
            'qtd_2ten' => 'Qtd 2ten',
            'qtd_1ten' => 'Qtd 1ten',
            'qtd_cap' => 'Qtd Cap',
            'qtd_maj' => 'Qtd Maj',
            'qtd_tc' => 'Qtd Tc',
            'qtd_cel' => 'Qtd Cel',
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
