<?php

namespace app\modules\faq\models;

use Yii;
use yii\behaviors\TimestampBehavior;

class Question extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'question';
    }

    public function rules()
    {
        return [
            [['category_id', 'title'], 'required'],
            [['category_id', 'created_at', 'updated_at', 'flag'], 'integer'],
            [['answer'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'title' => 'Вопрос',
            'answer' => 'Ответ',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата редактирования',
            'flag' => 'Скрыть вопрос?',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
}
