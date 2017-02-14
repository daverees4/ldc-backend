<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Form".
 *
 * @property integer $id
 * @property string $author
 * @property string $whygrateful
 * @property string $threethingshappy1
 * @property string $threethingshappy2
 * @property string $threethingshappy3
 * @property string $threethingsunhappy1
 * @property string $threethingsunhappy2
 * @property string $threethingsunhappy3
 * @property string $threeimprovements1
 * @property string $threeimprovements2
 * @property string $threeimprovements3
 * @property integer $healthscore
 * @property string $healthcomment
 * @property integer $financesscore
 * @property string $financescomment
 * @property integer $workyouscore
 * @property string $workyoucomment
 * @property integer $workothersscore
 * @property string $workotherscomment
 * @property integer $experiencescore
 * @property string $experiencecomment
 * @property integer $impactscore
 * @property string $impactcomment
 * @property integer $personaldevelopmentscore
 * @property string $personaldevelopmentcomment
 * @property integer $relationshipsscore
 * @property string $relationshipscomment
 * @property string $previoustarget1
 * @property string $previoustarget2
 * @property string $previoustarget3
 * @property string $newtarget1
 * @property string $newtarget2
 * @property string $newtarget3
 * @property string $otherthoughts
 */
class Form extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'whygrateful', 'threethingshappy1', 'threethingshappy2', 'threethingshappy3', 'threethingsunhappy1', 'threethingsunhappy2', 'threethingsunhappy3', 'threeimprovements1', 'threeimprovements2', 'threeimprovements3', 'healthscore', 'financesscore', 'workyouscore', 'workothersscore',  'experiencescore','impactscore',  'personaldevelopmentscore',  'relationshipsscore', 'previoustarget1', 'previoustarget2', 'previoustarget3', 'newtarget1', 'newtarget2', 'newtarget3', 'otherthoughts'], 'required'],
            [['healthscore', 'financesscore', 'workyouscore', 'workothersscore', 'experiencescore', 'impactscore', 'personaldevelopmentscore', 'relationshipsscore'], 'integer'],
            [['author'], 'string', 'max' => 100],
            [['whygrateful', 'threethingshappy1', 'threethingshappy2', 'threethingshappy3', 'threethingsunhappy1', 'threethingsunhappy2', 'threethingsunhappy3', 'threeimprovements1', 'threeimprovements2', 'threeimprovements3', 'healthcomment', 'financescomment', 'workyoucomment', 'workotherscomment', 'experiencecomment', 'impactcomment', 'personaldevelopmentcomment', 'relationshipscomment', 'previoustarget1', 'previoustarget2', 'previoustarget3', 'newtarget1', 'newtarget2', 'newtarget3'], 'string', 'max' => 1000],
            [['otherthoughts'], 'string', 'max' => 5000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'whygrateful' => 'Write something you are grateful about.',
            'threethingshappy1' => 'Happy Thing 1',
            'threethingshappy2' => 'Happy Thing 2',
            'threethingshappy3' => 'Happy Thing 3',
            'threethingsunhappy1' => 'Unhappy Thing 1',
            'threethingsunhappy2' => 'Unhappy Thing 2',
            'threethingsunhappy3' => 'Unhappy Thing 3',
            'threeimprovements1' => 'Suggested Improvement 1',
            'threeimprovements2' => 'Suggested Improvement 2',
            'threeimprovements3' => 'Suggested Improvement 3',
            'healthscore' => 'Healthscore',
            'healthcomment' => 'Healthcomment',
            'financesscore' => 'Financesscore',
            'financescomment' => 'Financescomment',
            'workyouscore' => 'Workyouscore',
            'workyoucomment' => 'Workyoucomment',
            'workothersscore' => 'Workothersscore',
            'workotherscomment' => 'Workotherscomment',
            'experiencescore' => 'Experiencescore',
            'experiencecomment' => 'Experiencecomment',
            'impactscore' => 'Impactscore',
            'impactcomment' => 'Impactcomment',
            'personaldevelopmentscore' => 'Personaldevelopmentscore',
            'personaldevelopmentcomment' => 'Personaldevelopmentcomment',
            'relationshipsscore' => 'Relationshipsscore',
            'relationshipscomment' => 'Relationshipscomment',
            'previoustarget1' => 'Report back on previous target 1',
            'previoustarget2' => 'Report back on previous target 2',
            'previoustarget3' => 'Report back on previous target 3',
            'newtarget1' => 'New Target 1',
            'newtarget2' => 'New Target 2',
            'newtarget3' => 'New Target 3',
            'otherthoughts' => 'Any other thoughts',
        ];
    }
}
