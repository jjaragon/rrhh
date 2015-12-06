<?php

/**
 * This is the model class for table "contrato_empleados_auditoria".
 *
 * The followings are the available columns in table 'contrato_empleados_auditoria':
 * @property integer $auditoria_id
 * @property integer $contrato_id
 * @property integer $empleado_id
 * @property string $tipo_modificacion
 * @property integer $salario
 * @property string $cargo_id
 * @property string $sw_tipo_contrato
 * @property string $periodo_pago
 * @property string $fecha_celebracion
 * @property string $fecha_inicio_labores
 * @property string $fecha_vencimiento
 * @property string $periodo_prueba
 * @property string $duracion_contrato
 * @property string $ruta_contrato_anexo
 * @property string $sw_liquidacion
 * @property string $fecha_finalizacion_labores
 * @property integer $user_id
 * @property string $fecha_auditoria
 * @property string $sw_estado
 * @property integer $intensidad_horaria
 *
 * The followings are the available model relations:
 * @property IntensidadHoraria $intensidadHoraria
 * @property CargosEmpresa $cargo
 * @property ContratoEmpleados $contrato
 * @property Empleados $empleado
 * @property SystemUsuarios $user
 */
class ContratoEmpleadosAuditoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contrato_empleados_auditoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contrato_id, empleado_id, tipo_modificacion, cargo_id, sw_tipo_contrato, periodo_pago, fecha_celebracion, fecha_inicio_labores, sw_liquidacion, user_id, fecha_auditoria, sw_estado', 'required'),
			array('contrato_id, empleado_id, salario, user_id, intensidad_horaria', 'numerical', 'integerOnly'=>true),
			array('tipo_modificacion, sw_tipo_contrato, sw_estado', 'length', 'max'=>1),
			array('fecha_vencimiento, periodo_prueba, duracion_contrato, ruta_contrato_anexo, fecha_finalizacion_labores', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auditoria_id, contrato_id, empleado_id, tipo_modificacion, salario, cargo_id, sw_tipo_contrato, periodo_pago, fecha_celebracion, fecha_inicio_labores, fecha_vencimiento, periodo_prueba, duracion_contrato, ruta_contrato_anexo, sw_liquidacion, fecha_finalizacion_labores, user_id, fecha_auditoria, sw_estado, intensidad_horaria', 'safe', 'on'=>'search'),
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
			'intensidadHoraria' => array(self::BELONGS_TO, 'IntensidadHoraria', 'intensidad_horaria'),
			'cargo' => array(self::BELONGS_TO, 'CargosEmpresa', 'cargo_id'),
			'contrato' => array(self::BELONGS_TO, 'ContratoEmpleados', 'contrato_id'),
			'empleado' => array(self::BELONGS_TO, 'Empleados', 'empleado_id'),
			'user' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'auditoria_id' => 'Auditoria',
			'contrato_id' => 'Contrato',
			'empleado_id' => 'Empleado',
			'tipo_modificacion' => 'Tipo Modificacion',
			'salario' => 'Salario',
			'cargo_id' => 'Cargo',
			'sw_tipo_contrato' => 'Sw Tipo Contrato',
			'periodo_pago' => 'Periodo Pago',
			'fecha_celebracion' => 'Fecha Celebracion',
			'fecha_inicio_labores' => 'Fecha Inicio Labores',
			'fecha_vencimiento' => 'Fecha Vencimiento',
			'periodo_prueba' => 'Periodo Prueba',
			'duracion_contrato' => 'Duracion Contrato',
			'ruta_contrato_anexo' => 'Ruta Contrato Anexo',
			'sw_liquidacion' => 'Sw Liquidacion',
			'fecha_finalizacion_labores' => 'Fecha Finalizacion Labores',
			'user_id' => 'User',
			'fecha_auditoria' => 'Fecha Auditoria',
			'sw_estado' => 'Sw Estado',
			'intensidad_horaria' => 'Intensidad Horaria',
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

		$criteria->compare('auditoria_id',$this->auditoria_id);
		$criteria->compare('contrato_id',$this->contrato_id);
		$criteria->compare('empleado_id',$this->empleado_id);
		$criteria->compare('tipo_modificacion',$this->tipo_modificacion,true);
		$criteria->compare('salario',$this->salario);
		$criteria->compare('cargo_id',$this->cargo_id,true);
		$criteria->compare('sw_tipo_contrato',$this->sw_tipo_contrato,true);
		$criteria->compare('periodo_pago',$this->periodo_pago,true);
		$criteria->compare('fecha_celebracion',$this->fecha_celebracion,true);
		$criteria->compare('fecha_inicio_labores',$this->fecha_inicio_labores,true);
		$criteria->compare('fecha_vencimiento',$this->fecha_vencimiento,true);
		$criteria->compare('periodo_prueba',$this->periodo_prueba,true);
		$criteria->compare('duracion_contrato',$this->duracion_contrato,true);
		$criteria->compare('ruta_contrato_anexo',$this->ruta_contrato_anexo,true);
		$criteria->compare('sw_liquidacion',$this->sw_liquidacion,true);
		$criteria->compare('fecha_finalizacion_labores',$this->fecha_finalizacion_labores,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('fecha_auditoria',$this->fecha_auditoria,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('intensidad_horaria',$this->intensidad_horaria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ContratoEmpleadosAuditoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
