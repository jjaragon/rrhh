<?php

/**
 * This is the model class for table "empleados_comprobantes_nomina_envios".
 *
 * The followings are the available columns in table 'empleados_comprobantes_nomina_envios':
 * @property integer $envio_id
 * @property integer $empleado_comprobante_id
 * @property string $fecha_envio
 * @property integer $user_registra
 * @property string $sw_estado
 *
 * The followings are the available model relations:
 * @property EmpleadosComprobantesNominaDetalle $empleadoComprobante
 * @property SystemUsuarios $userRegistra
 */
class EmpleadosComprobantesNominaEnvios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleados_comprobantes_nomina_envios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empleado_comprobante_id, fecha_envio, user_registra', 'required'),
			array('empleado_comprobante_id, user_registra', 'numerical', 'integerOnly'=>true),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('envio_id, empleado_comprobante_id, fecha_envio, user_registra, sw_estado', 'safe', 'on'=>'search'),
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
			'empleadoComprobante' => array(self::BELONGS_TO, 'EmpleadosComprobantesNominaDetalle', 'empleado_comprobante_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'envio_id' => 'Envio',
			'empleado_comprobante_id' => 'Empleado Comprobante',
			'fecha_envio' => 'Fecha Envio',
			'user_registra' => 'User Registra',
			'sw_estado' => 'Sw Estado',
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

		$criteria->compare('envio_id',$this->envio_id);
		$criteria->compare('empleado_comprobante_id',$this->empleado_comprobante_id);
		$criteria->compare('fecha_envio',$this->fecha_envio,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('sw_estado',$this->sw_estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmpleadosComprobantesNominaEnvios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
