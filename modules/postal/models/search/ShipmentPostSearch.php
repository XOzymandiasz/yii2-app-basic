<?php

namespace app\modules\postal\models\search;

use app\modules\postal\models\Shipment;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ShipmentPostSearch represents the model behind the search form of `app\modules\postal\models\Shipment`.
 */
class ShipmentPostSearch extends Shipment
{
    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['id', 'content_id', 'creator_id', 'buffer_id'], 'integer'],
            [['direction', 'number', 'provider', 'created_at', 'updated_at', 'guid', 'buffer_id', 'finished_at', 'shipment_at', 'api_data'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios(): array
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search(array $params, string $formName = null): ActiveDataProvider
    {
        $query = Shipment::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'content_id' => $this->content_id,
            'creator_id' => $this->creator_id,
            'buffer_id' => $this->buffer_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'finished_at' => $this->finished_at,
            'shipment_at' => $this->shipment_at,
        ]);

        $query->andFilterWhere(['like', 'direction', $this->direction])
            ->andFilterWhere(['like', 'number', $this->number])
            ->andFilterWhere(['like', 'provider', $this->provider])
            ->andFilterWhere(['like', 'guid', $this->guid])
            ->andFilterWhere(['like', 'api_data', $this->api_data]);

        return $dataProvider;
    }
}
