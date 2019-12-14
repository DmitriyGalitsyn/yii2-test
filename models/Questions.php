<?php

namespace technic\test\models;

use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property int $id
 * @property string|null $question
 * @property int|null $lesson_id
 * @property int|null $course_id
 * @property int|null $status
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lesson_id', 'course_id', 'status'], 'integer'],
            [['question'], 'string', 'max' => 225],
        ];
    }
       
    public function getAnswers(){
        
        return $this->hasMany(Answers::className(), ['question_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question' => 'Question',
            'lesson_id' => 'Lesson ID',
            'course_id' => 'Course ID',
            'status' => 'Status',
        ];
    }
}
