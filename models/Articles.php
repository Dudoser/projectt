<?php

namespace app\models;

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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'text', 'author'], 'required'],
            [['category_id'], 'integer'],
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
            'id' => 'ID',
            'category_id' => 'Category ID',
            'title' => 'Title',
            'text' => 'Text',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'img' => 'Img',
            'author' => 'Author',
        ];
    }
}
