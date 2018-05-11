<?php 

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class User extends ActiveRecord
{
	public static function tableName()
	{
		return '{{entry_form}}';
	}

	public static function getDb()
	{
		return Yii::$app->get('db');
	}

	public function rules()
	{
		return [
			[['name','email'], 'required'],
		];
	}

	public function beforeSave($insert)
	{
//		$d = date('Y-m-d H:i:s');
		$d = new \yii\db\Expression('NOW()');
		if ($insert) {
			$this->created_at = $d;
			$this->updated_at = $d;
		} else {
			$this->updated_at = $d;
		}
		return true;
	}
}