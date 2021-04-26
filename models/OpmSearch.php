<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Opm;

/**
 * OpmSearch represents the model behind the search form of `app\models\Opm`.
 */
class OpmSearch extends Opm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cpai_id', 'qtd_sd', 'qtd_cb', 'qtd_3sgt', 'qtd_2sgt', 'qtd_1sgt', 'qtd_st', 'qtd_2ten', 'qtd_1ten', 'qtd_cap', 'qtd_maj', 'qtd_tc', 'qtd_cel'], 'integer'],
            [['nome', 'descricao', 'dimencao'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Opm::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cpai_id' => $this->cpai_id,
            'qtd_sd' => $this->qtd_sd,
            'qtd_cb' => $this->qtd_cb,
            'qtd_3sgt' => $this->qtd_3sgt,
            'qtd_2sgt' => $this->qtd_2sgt,
            'qtd_1sgt' => $this->qtd_1sgt,
            'qtd_st' => $this->qtd_st,
            'qtd_2ten' => $this->qtd_2ten,
            'qtd_1ten' => $this->qtd_1ten,
            'qtd_cap' => $this->qtd_cap,
            'qtd_maj' => $this->qtd_maj,
            'qtd_tc' => $this->qtd_tc,
            'qtd_cel' => $this->qtd_cel,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'dimencao', $this->dimencao]);

        return $dataProvider;
    }
}
