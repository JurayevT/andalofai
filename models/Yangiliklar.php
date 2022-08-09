<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yangiliklar".
 *
 * @property int $post_id
 * @property string $foto
 * @property string $title
 * @property string $izoh
 * @property string $content
 * @property string $author
 * @property int $kurish_soni
 * @property int $created_at
 * @property int $updated_at
 */
class Yangiliklar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yangiliklar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['foto', 'title', 'izoh', 'content', 'author', 'created_at', 'updated_at'], 'required'],
            ['kurish_soni', 'default', 'value' => 0],
            [['kurish_soni', 'created_at', 'updated_at'], 'integer'],
            [['foto', 'title', 'author'], 'string', 'max' => 50],
            [['izoh'], 'string', 'max' => 100]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'foto' => 'Foto',
            'title' => 'Title',
            'izoh' => 'Izoh',
            'content' => 'Content',
            'author' => 'Author',
            'kurish_soni' => 'Kurish Soni',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
