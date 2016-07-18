<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Noticia;

/**
 * NoticiaSearch represents the model behind the search form about `app\models\Noticia`.
 */
class NoticiaSearch extends Noticia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Titulo', 'Cuerpo', 'Categoria', 'Fecha_creacion'], 'safe'],
            [['Codigo_Noticia', 'Estado'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Noticia::find();

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
            'Codigo_Noticia' => $this->Codigo_Noticia,
            'Estado' => $this->Estado,
            'Fecha_creacion' => $this->Fecha_creacion,
        ]);

        $query->andFilterWhere(['like', 'Titulo', $this->Titulo])
            ->andFilterWhere(['like', 'Cuerpo', $this->Cuerpo])
            ->andFilterWhere(['like', 'Categoria', $this->Categoria]);

        return $dataProvider;
    }
}
