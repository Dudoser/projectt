<?php

namespace app\modules\adminos\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property string $id
 * @property string $name
 * @property string $keywords
 * @property string $description
 * @property string $img
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    public function getArticle() {
       return $this->hasMany(Articles::className(), ['category_id' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'keywords', 'description', 'img'], 'required'],
            [['name', 'keywords', 'description', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название категории',
            'keywords' => 'ключевые слова',
            'description' => 'Описание',
            'img' => 'Картинка',
        ];
    }
}
