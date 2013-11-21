<?php

/**
 * This is the model class for table "join".
 *
 * The followings are the available columns in table 'join':
 * @property integer $id_dj
 * @property integer $id_sal
 * @property integer $id_ing
 */
class Join extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Join the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'join';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_sal, id_ing', 'required'),
			array('id_sal, id_ing', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_dj, id_sal, id_ing', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_dj' => 'Id Dj',
			'id_sal' => 'Id Sal',
			'id_ing' => 'Id Ing',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_dj',$this->id_dj);
		$criteria->compare('id_sal',$this->id_sal);
		$criteria->compare('id_ing',$this->id_ing);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}