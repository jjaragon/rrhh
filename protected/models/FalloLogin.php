<?php

/**
 * This is the model class for table "fallo_login".
 *
 * The followings are the available columns in table 'fallo_login':
 * @property integer $fallo_id
 * @property string $fecha_fallo
 * @property string $correo_electronico
 * @property string $sw_vigente
 */
class FalloLogin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fallo_login';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_fallo, correo_electronico', 'required'),
			array('sw_vigente', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fallo_id, fecha_fallo, correo_electronico, sw_vigente', 'safe', 'on'=>'search'),
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
			'fallo_id' => 'Fallo',
			'fecha_fallo' => 'Fecha Fallo',
			'correo_electronico' => 'Correo Electronico',
			'sw_vigente' => 'Sw Vigente',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('fallo_id',$this->fallo_id);
		$criteria->compare('fecha_fallo',$this->fecha_fallo,true);
		$criteria->compare('correo_electronico',$this->correo_electronico,true);
		$criteria->compare('sw_vigente',$this->sw_vigente,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FalloLogin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
