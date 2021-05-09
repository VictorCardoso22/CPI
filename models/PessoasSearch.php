<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pessoas;

/**
 * PessoasSearch represents the model behind the search form of `app\models\Pessoas`.
 */
class PessoasSearch extends Pessoas
{
    public $situacaoNome;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'opm_id', 'posto_id'], 'integer'],
            [['cpf'], 'number'],
            [['nome', 'nome_guerra', 'sexo', 'situacaoNome'], 'safe'],
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
        $this->opm_id = '';
        $query = Pessoas::find();
        $query->joinWith(['pessoaSituacao']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            //  'sort'=> ['defaultOrder' => ['situacaoNome' => SORT_ASC]],
        ]);
       

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'cpf' => $this->cpf,
            'opm_id' => $this->opm_id,
            'posto_id' => $this->posto_id,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'nome_guerra', $this->nome_guerra])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['=','pessoa_situacao.situacao_id', $this->situacaoNome]);
            // ->orWhere(['=','pessoa_situacao.situacao_id', '']);

        return $dataProvider;
    }
}
