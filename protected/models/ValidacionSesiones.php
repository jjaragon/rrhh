<?php

/**
 * This is the model class for table "validacion_sesiones".
 *
 * The followings are the available columns in table 'validacion_sesiones':
 * @property string $session_id
 * @property string $ip_address
 * @property string $user_agent
 * @property string $last_activity
 * @property string $user_data
 */
class ValidacionSesiones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'validacion_sesiones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_agent, user_data', 'required'),
			array('session_id', 'length', 'max'=>40),
			array('ip_address', 'length', 'max'=>45),
			array('user_agent', 'length', 'max'=>150),
			array('last_activity', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('session_id, ip_address, user_agent, last_activity, user_data', 'safe', 'on'=>'search'),
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
			'session_id' => 'Session',
			'ip_address' => 'Ip Address',
			'user_agent' => 'User Agent',
			'last_activity' => 'Last Activity',
			'user_data' => 'User Data',
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

		$criteria->compare('session_id',$this->session_id,true);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('user_agent',$this->user_agent,true);
		$criteria->compare('last_activity',$this->last_activity,true);
		$criteria->compare('user_data',$this->user_data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ValidacionSesiones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
