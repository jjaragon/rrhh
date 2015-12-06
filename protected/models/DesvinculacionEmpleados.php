<?php

/**
 * This is the model class for table "desvinculacion_empleados".
 *
 * The followings are the available columns in table 'desvinculacion_empleados':
 * @property integer $desvinculacion_id
 * @property integer $motivo_id
 * @property string $fecha_inicio_labores
 * @property string $fecha_retiro
 * @property string $fecha_registro
 * @property integer $contrato_id
 * @property integer $empleado_id
 * @property integer $user_desvincula
 *
 * The followings are the available model relations:
 * @property ContratoEmpleados $contrato
 * @property Empleados $empleado
 * @property MotivosRetiroPersonal $motivo
 * @property SystemUsuarios $userDesvincula
 */
class DesvinculacionEmpleados extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'desvinculacion_empleados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('motivo_id, fecha_inicio_labores, fecha_retiro, fecha_registro, contrato_id, empleado_id, user_desvincula', 'required'),
			array('motivo_id, contrato_id, empleado_id, user_desvincula', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('desvinculacion_id, motivo_id, fecha_inicio_labores, fecha_retiro, fecha_registro, contrato_id, empleado_id, user_desvincula', 'safe', 'on'=>'search'),
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
			'contrato' => array(self::BELONGS_TO, 'ContratoEmpleados', 'contrato_id'),
			'empleado' => array(self::BELONGS_TO, 'Empleados', 'empleado_id'),
			'motivo' => array(self::BELONGS_TO, 'MotivosRetiroPersonal', 'motivo_id'),
			'userDesvincula' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_desvincula'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'desvinculacion_id' => 'Desvinculacion',
			'motivo_id' => 'Motivo',
			'fecha_inicio_labores' => 'Fecha Inicio Labores',
			'fecha_retiro' => 'Fecha Retiro',
			'fecha_registro' => 'Fecha Registro',
			'contrato_id' => 'Contrato',
			'empleado_id' => 'Empleado',
			'user_desvincula' => 'User Desvincula',
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

		$criteria->compare('desvinculacion_id',$this->desvinculacion_id);
		$criteria->compare('motivo_id',$this->motivo_id);
		$criteria->compare('fecha_inicio_labores',$this->fecha_inicio_labores,true);
		$criteria->compare('fecha_retiro',$this->fecha_retiro,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('contrato_id',$this->contrato_id);
		$criteria->compare('empleado_id',$this->empleado_id);
		$criteria->compare('user_desvincula',$this->user_desvincula);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DesvinculacionEmpleados the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
