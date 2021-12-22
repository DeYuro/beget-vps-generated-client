<?php

namespace app\lib\order\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string|null $patronymic
 * @property string $status
 * @property string $transaction_id
 * @property string|null $error
 * @property string $email
 * @property string $created_at
 * @property string|null $complete_at
 *
 * @property Transaction $transaction
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'status', 'transaction_id', 'email'], 'required'],
            [['status', 'error'], 'string'],
            [['created_at', 'complete_at'], 'safe'],
            [['name', 'surname', 'patronymic'], 'string', 'max' => 32],
            [['transaction_id'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 255],
            [['transaction_id'], 'exist', 'skipOnError' => true, 'targetClass' => Transaction::className(), 'targetAttribute' => ['transaction_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'patronymic' => 'Patronymic',
            'status' => 'Status',
            'transaction_id' => 'Transaction ID',
            'error' => 'Error',
            'email' => 'Email',
            'created_at' => 'Created At',
            'complete_at' => 'Complete At',
        ];
    }

    /**
     * Gets query for [[Transaction]].
     *
     * @return \yii\db\ActiveQuery|TransactionQuery
     */
    public function getTransaction()
    {
        return $this->hasOne(Transaction::className(), ['id' => 'transaction_id']);
    }

    /**
     * {@inheritdoc}
     * @return OrderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrderQuery(get_called_class());
    }
}
