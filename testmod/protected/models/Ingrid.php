<?php

/**
 * This is the model class for table "ingrid".
 *
 * The followings are the available columns in table 'ingrid':
 * @property integer $id_ing
 * @property string $nazvanie
 * @property double $zena
 */
class Ingrid extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ingrid the static model class
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
		return 'ingrid';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nazvanie, zena', 'required'),
			array('zena', 'numerical'),
			array('nazvanie', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_ing, nazvanie, zena', 'safe', 'on'=>'search'),
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
        'salats' => array(self::MANY_MANY, 'salat', 'join(id_ing, id_sal)'),
        //'salats' => array(self::BELONGS_TO, 'salat', 'id_sal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ing' => 'Id Ing',
			'nazvanie' => 'Nazvanie',
			'zena' => 'Zena',
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

		$criteria->compare('id_ing',$this->id_ing);
		$criteria->compare('nazvanie',$this->nazvanie,true);
		$criteria->compare('zena',$this->zena);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}