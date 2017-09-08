<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "order".
 *
 * @property string $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $company
 * @property string $city
 * @property double $price
 * @property string $data
 * @property string $text
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    public function behaviors(){
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }
    
    public function getCategory () {
        return $this->hasOne(Category::classname(), ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'city', 'price', 'text', 'data', 'type', 'text' ], 'required'],
            [['created_at', 'updated_at', 'Category_id', 'company', 'text'], 'safe'],
            ['email', 'email'],
            [['status'], 'string'],
            [['price'], 'number'],
            [['name', 'email', 'phone', 'company', 'city'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'company' => 'Компания',
            'city' => 'Город',
            'price' => 'Бюджет задачи(ГРН)',
            'data' => 'Строки',
            'text' => 'Описание задачи',
            'type' => 'раздел'
        ];
    }
}
