<?php

namespace app\models;


use XOzymandias\Yii2Postal\integrations\PostalLinkTrait;
use app\modules\postal\models\Shipment;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "shipment".
 *
 * @property int $id
 * @property string $name
 * @property string $auth_key
 *
 * @property-read Shipment[] $shipments
 */
class User extends ActiveRecord implements IdentityInterface
{
//    public $id;
//    public $username;
//    public $password;
//    public $authKey;
//    public $accessToken;

    use PostalLinkTrait;

    public static function tableName(): string
    {
        return '{{%user}}';
    }

    private static array $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null): ?self
    {
        return static::findOne([
            'access_token' => $token
        ]);
    }

    /**
     * Finds user by username
     *
     * @param string $name
     * @return static|null
     */
    public static function findByUsername(string $name): ?self
    {
        return static::findOne([
            'name' => $name
        ]);
//        foreach (self::$users as $user) {
//            if (strcasecmp($user['username'], $username) === 0) {
//                return new static($user);
//            }
//        }
//
//        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId(): int|string
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey(): ?string
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey): ?bool
    {
        return $this->auth_key === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
