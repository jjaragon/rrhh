<?php

/**
 * This is the model class for table "referenciacion_laboral_aspirante_datos".
 *
 * The followings are the available columns in table 'referenciacion_laboral_aspirante_datos':
 * @property integer $dato_referencia_id
 * @property integer $referencia_id
 * @property integer $referencia_item_id
 * @property string $contenido
 * @property string $sw_estado
 * @property string $fecha_registro
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property ReferenciacionLaboralAspirante $referencia
 * @property ReferenciacionLaboralAspiranteItems $referenciaItem
 * @property SystemUsuarios $user
 */
class ReferenciacionLaboralAspiranteDatos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'referenciacion_laboral_aspirante_datos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('referencia_id, referencia_item_id, contenido, fecha_registro, user_id', 'required'),
			array('referencia_id, referencia_item_id, user_id', 'numerical', 'integerOnly'=>true),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('dato_referencia_id, referencia_id, referencia_item_id, contenido, sw_estado, fecha_registro, user_id', 'safe', 'on'=>'search'),
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
			'referencia' => array(self::BELONGS_TO, 'ReferenciacionLaboralAspirante', 'referencia_id'),
			'referenciaItem' => array(self::BELONGS_TO, 'ReferenciacionLaboralAspiranteItems', 'referencia_item_id'),
			'user' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dato_referencia_id' => 'Dato Referencia',
			'referencia_id' => 'Referencia',
			'referencia_item_id' => 'Referencia Item',
			'contenido' => 'Contenido',
			'sw_estado' => 'Sw Estado',
			'fecha_registro' => 'Fecha Registro',
			'user_id' => 'User',
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

		$criteria->compare('dato_referencia_id',$this->dato_referencia_id);
		$criteria->compare('referencia_id',$this->referencia_id);
		$criteria->compare('referencia_item_id',$this->referencia_item_id);
		$criteria->compare('contenido',$this->contenido,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReferenciacionLaboralAspiranteDatos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
