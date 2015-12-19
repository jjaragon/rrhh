<?php

/**
 * This is the model class for table "acceso_hoja_de_vida".
 *
 * The followings are the available columns in table 'acceso_hoja_de_vida':
 * @property integer $acceso_id
 * @property string $correo_electronico
 * @property string $passwd
 * @property string $sw_estado
 * @property string $fecha_registro
 * @property string $passwd_default
 *
 * The followings are the available model relations:
 * @property DatosPersonalesHv[] $datosPersonalesHvs
 * @property HojaDeVida[] $hojaDeVidas
 */
class AccesoHojaDeVida extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'acceso_hoja_de_vida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('correo_electronico, passwd, fecha_registro', 'required'),
			array('sw_estado', 'length', 'max'=>1),
			array('passwd_default', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('acceso_id, correo_electronico, passwd, sw_estado, fecha_registro, passwd_default', 'safe', 'on'=>'search'),
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
			'datosPersonalesHvs' => array(self::HAS_MANY, 'DatosPersonalesHv', 'email'),
			'objHojaDeVida' => array(self::BELONGS_TO, 'HojaDeVida', 'acceso_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'acceso_id' => 'Acceso',
			'correo_electronico' => 'Correo Electronico',
			'passwd' => 'Contraseña',
			'sw_estado' => 'Sw Estado',
			'fecha_registro' => 'Fecha Registro',
			'passwd_default' => 'Passwd Default',
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

		$criteria->compare('acceso_id',$this->acceso_id);
		$criteria->compare('correo_electronico',$this->correo_electronico,true);
		$criteria->compare('passwd',$this->passwd,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('passwd_default',$this->passwd_default,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AccesoHojaDeVida the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
