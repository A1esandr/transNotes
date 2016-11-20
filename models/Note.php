<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "note".
 *
 * @property integer $id
 * @property string $date
 * @property string $content
 * @property string $process
 */
class Note extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'note';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['content', 'process'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'content' => 'Content',
            'process' => 'Process',
        ];
    }
    /**
     * @inheritdoc
     */
    public function beforeSave()
    {
        $dateValue = $this->getDirtyAttributes(['date']);
        $date = Yii::$app->formatter->asDate($dateValue['date'], 'php:Y-m-d');
        $_POST['Note']['date'] = $date;
    }
}
