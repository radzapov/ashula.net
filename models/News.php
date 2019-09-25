<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $date
 * @property string $author
 * @property string $tags
 * @property string $img
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'date', 'tags', 'img'], 'required'],
            [['content', 'tags'], 'string'],
            [['date'], 'integer'],
            [['title', 'author'], 'string', 'max' => 1000],
            [['img'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'date' => 'Date',
            'author' => 'Author',
            'tags' => 'Tags',
            'img' => 'Img',
        ];
    }
}
