<?php

namespace app\modules\adminos\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property string $id
 * @property string $category_id
 * @property string $title
 * @property string $text
 * @property string $description
 * @property string $keywords
 * @property string $img
 * @property string $author
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    public function getCategory() {
       return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'text', 'author'], 'required'],
            [['text'], 'string'],
            [['title', 'description', 'keywords', 'img', 'author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'category_id' => 'Категория',
            'title' => 'Заголовой статьи',
            'text' => 'Текст',
            'description' => 'Описание',
            'keywords' => 'Ключевые слова',
            'img' => 'Картинка',
            'author' => 'Автор',
        ];
    }
}
