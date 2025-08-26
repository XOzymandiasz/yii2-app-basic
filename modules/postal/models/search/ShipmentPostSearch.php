<?php

namespace app\modules\postal\models\search;

use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentContent;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\ActiveQuery;
use yii\db\Expression;
use yii\helpers\ArrayHelper;

/**
 * ShipmentPostSearch represents the model behind the search form of `app\modules\postal\models\Shipment`.
 */
class ShipmentPostSearch extends Shipment
{
    public const SCENARIO_CREATOR = 'creator';
    public ?string $senderName = null;
    public ?string $receiverName = null;
    public ?string $senderAddress = null;
    public ?string $receiverAddress = null;


    public static function getDirectionsNames(): array
    {
        return Shipment::getDirectionsNames();
    }

    public static function getProvidersNames(): array
    {
        return Shipment::getProvidersNames();
    }

    public static function getContentsNames(): array
    {
        return ArrayHelper::map(
            ShipmentContent::find()->andWhere([
                'id' => Shipment::find()
                    ->select('content_id')
                    ->distinct()
            ])
                ->asArray()
                ->all(),
            'id',
            'name'
        );
    }

    public static function getCreatorsNames(): array
    {
        return ArrayHelper::map(
            ShipmentContent::find()->andWhere([
                'id' => Shipment::find()
                    ->select('content_id')
                    ->distinct()
            ])
                ->asArray()
                ->all(),
            'id',
            'name'
        );
    }

    public function rules(): array
    {
        return [
            [['id', 'content_id', 'creator_id', 'buffer_id'], 'integer'],
            ['!creator_id', 'integer', 'on' => static::SCENARIO_CREATOR],
            [['senderName', 'receiverName', 'senderAddress', 'receiverAddress'], 'trim'],
            [['senderName', 'receiverName', 'senderAddress', 'receiverAddress', 'direction', 'number', 'provider',
                'created_at', 'updated_at', 'guid', 'buffer_id', 'finished_at', 'shipment_at', 'api_data'], 'safe'],
        ];
    }

    public function attributes(): array
    {
        return array_merge(parent::attributes(), ['sender_name', 'receiver_name', 'sender_address', 'receiver_address']);
    }

    public function scenarios(): array
    {
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
        $query = Shipment::find()->alias('shipment');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            $query->where('0=1');
            return $dataProvider;
        }

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


        $this->applyReceiverNameFilter($query);
        $this->applySenderNameFilter($query);
        $this->applySenderAddressFilter($query);
        $this->applyReceiverAddressFilter($query);

        return $dataProvider;
    }

    protected function applySenderNameFilter(ActiveQuery $query): void
    {
        if (!empty($this->senderName)) {
            $query->joinWith(['senderAddress SA']);
            $query->andWhere(['like', new Expression(
                'CONCAT_WS(" ", SA.name, SA.name_2)'),
                $this->senderName]);
        }
    }

    protected function applyReceiverNameFilter(ActiveQuery $query): void
    {
        if (!empty($this->receiverName)) {
            $query->joinWith(['receiverAddress RA']);
            $query->andWhere(['like', new Expression(
                'CONCAT_WS(" ", RA.name, RA.name_2)'),
                $this->receiverName]);
        }
    }

    protected function applySenderAddressFilter(ActiveQuery $query): void
    {
        if (!empty($this->senderAddress)) {
            $query->joinWith(['senderAddress SA']);
            $query->andWhere(['like', new Expression(
                'CONCAT_WS(" ", REPLACE(SA.postal_code, "-", ""), SA.city, SA.street, SA.house_number)'),
                str_replace('-', '', $this->senderAddress)]);
        }
    }

    protected function applyReceiverAddressFilter(ActiveQuery $query): void
    {
        if (!empty($this->receiverAddress)) {
            $query->joinWith(['receiverAddress RA']);
            $query->andWhere(['like', new Expression(
                'CONCAT_WS(" ", REPLACE(RA.postal_code, "-", ""), RA.city, RA.street, RA.house_number)'),
                str_replace('-', '', $this->receiverAddress)]);
        }
    }

    public function isCreatorScenario(): bool
    {
        return $this->scenario === static::SCENARIO_CREATOR;
    }

}
