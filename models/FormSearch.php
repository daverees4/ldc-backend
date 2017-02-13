<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Form;

/**
 * FormSearch represents the model behind the search form about `\app\models\Form`.
 */
class FormSearch extends Form
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'healthscore', 'financesscore', 'workyouscore', 'workothersscore', 'experiencescore', 'impactscore', 'personaldevelopmentscore', 'relationshipsscore'], 'integer'],
            [['author', 'whygrateful', 'threethingshappy1', 'threethingshappy2', 'threethingshappy3', 'threethingsunhappy1', 'threethingsunhappy2', 'threethingsunhappy3', 'threeimprovements1', 'threeimprovements2', 'threeimprovements3', 'healthcomment', 'financescomment', 'workyoucomment', 'workotherscomment', 'experiencecomment', 'impactcomment', 'personaldevelopmentcomment', 'relationshipscomment', 'previoustarget1', 'previoustarget2', 'previoustarget3', 'newtarget1', 'newtarget2', 'newtarget3', 'otherthoughts'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Form::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'healthscore' => $this->healthscore,
            'financesscore' => $this->financesscore,
            'workyouscore' => $this->workyouscore,
            'workothersscore' => $this->workothersscore,
            'experiencescore' => $this->experiencescore,
            'impactscore' => $this->impactscore,
            'personaldevelopmentscore' => $this->personaldevelopmentscore,
            'relationshipsscore' => $this->relationshipsscore,
        ]);

        $query->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'whygrateful', $this->whygrateful])
            ->andFilterWhere(['like', 'threethingshappy1', $this->threethingshappy1])
            ->andFilterWhere(['like', 'threethingshappy2', $this->threethingshappy2])
            ->andFilterWhere(['like', 'threethingshappy3', $this->threethingshappy3])
            ->andFilterWhere(['like', 'threethingsunhappy1', $this->threethingsunhappy1])
            ->andFilterWhere(['like', 'threethingsunhappy2', $this->threethingsunhappy2])
            ->andFilterWhere(['like', 'threethingsunhappy3', $this->threethingsunhappy3])
            ->andFilterWhere(['like', 'threeimprovements1', $this->threeimprovements1])
            ->andFilterWhere(['like', 'threeimprovements2', $this->threeimprovements2])
            ->andFilterWhere(['like', 'threeimprovements3', $this->threeimprovements3])
            ->andFilterWhere(['like', 'healthcomment', $this->healthcomment])
            ->andFilterWhere(['like', 'financescomment', $this->financescomment])
            ->andFilterWhere(['like', 'workyoucomment', $this->workyoucomment])
            ->andFilterWhere(['like', 'workotherscomment', $this->workotherscomment])
            ->andFilterWhere(['like', 'experiencecomment', $this->experiencecomment])
            ->andFilterWhere(['like', 'impactcomment', $this->impactcomment])
            ->andFilterWhere(['like', 'personaldevelopmentcomment', $this->personaldevelopmentcomment])
            ->andFilterWhere(['like', 'relationshipscomment', $this->relationshipscomment])
            ->andFilterWhere(['like', 'previoustarget1', $this->previoustarget1])
            ->andFilterWhere(['like', 'previoustarget2', $this->previoustarget2])
            ->andFilterWhere(['like', 'previoustarget3', $this->previoustarget3])
            ->andFilterWhere(['like', 'newtarget1', $this->newtarget1])
            ->andFilterWhere(['like', 'newtarget2', $this->newtarget2])
            ->andFilterWhere(['like', 'newtarget3', $this->newtarget3])
            ->andFilterWhere(['like', 'otherthoughts', $this->otherthoughts]);

        return $dataProvider;
    }
}
