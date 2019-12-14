<?php

namespace technic\test\models;

use Yii;

/**
 * This is the model class for table "answers".
 *
 * @property int $id
 * @property string|null $answer
 * @property int|null $question_id
 * @property int|null $course_id
 * @property int|null $correct_answer
 */
class Answers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'answers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_id', 'course_id', 'correct_answer'], 'integer'],
            [['answer'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'answer' => 'Answer',
            'question_id' => 'Question ID',
            'course_id' => 'Course ID',
            'correct_answer' => 'Correct Answer',
        ];
    }
}
