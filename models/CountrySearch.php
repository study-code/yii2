<?php
/**
 * Date: 2015-7-6
 * Time: 23:55
 */

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;


class CountrySearch extends Country
{
    public function attributes()
    {
        // 添加关联字段到可搜索特性
        return array_merge(parent::attributes(), ['country.caption']);
    }

    public function rules()
    {
        return [
            [['population'], 'integer'],
            [['code', 'name', 'country.caption'], 'safe'],
        ];
    }



    public function scenarios()
    {
        // bypass 父类实现的scenarios()
        return Model::scenarios();
    }

    public function search($params)
    {

        $query = Country::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // 加载搜索表单数据并验证
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }



        // 通过添加过滤器来调整查询语句
        $query->andFilterWhere(['code' => $this->code]);
        $query->andFilterWhere(['like', 'name', $this->name]);
        $query->andFilterWhere(['LIKE', 'country.caption', $this->getAttribute('country.caption')]);

        return $dataProvider;
    }
}