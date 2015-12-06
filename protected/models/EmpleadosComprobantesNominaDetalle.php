<?php

/**
 * This is the model class for table "empleados_comprobantes_nomina_detalle".
 *
 * The followings are the available columns in table 'empleados_comprobantes_nomina_detalle':
 * @property integer $empleado_comprobante_id
 * @property integer $empleado_id
 * @property integer $comprobante_id
 * @property integer $actualizacion_id
 * @property string $fecha_inicial_periodo
 * @property string $fecha_final_periodo
 * @property string $base
 * @property string $neto
 * @property string $fecha_registro
 * @property integer $user_registra
 * @property string $comprobante
 * @property string $sw_estado
 * @property string $cargo_id
 *
 * The followings are the available model relations:
 * @property EmpleadosComprobantesNominaEnvios[] $empleadosComprobantesNominaEnvioses
 * @property ComprobantesNomina $comprobante0
 * @property EmpleadosComprobantesNomina $actualizacion
 * @property CargosEmpresa $cargo
 * @property Empleados $empleado
 * @property SystemUsuarios $userRegistra
 */
class EmpleadosComprobantesNominaDetalle extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleados_comprobantes_nomina_detalle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empleado_id, comprobante_id, actualizacion_id, fecha_inicial_periodo, fecha_final_periodo, base, neto, fecha_registro, user_registra, comprobante', 'required'),
			array('empleado_id, comprobante_id, actualizacion_id, user_registra', 'numerical', 'integerOnly'=>true),
			array('sw_estado', 'length', 'max'=>1),
			array('cargo_id', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('empleado_comprobante_id, empleado_id, comprobante_id, actualizacion_id, fecha_inicial_periodo, fecha_final_periodo, base, neto, fecha_registro, user_registra, comprobante, sw_estado, cargo_id', 'safe', 'on'=>'search'),
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
			'empleadosComprobantesNominaEnvioses' => array(self::HAS_MANY, 'EmpleadosComprobantesNominaEnvios', 'empleado_comprobante_id'),
			'comprobante0' => array(self::BELONGS_TO, 'ComprobantesNomina', 'comprobante_id'),
			'actualizacion' => array(self::BELONGS_TO, 'EmpleadosComprobantesNomina', 'actualizacion_id'),
			'cargo' => array(self::BELONGS_TO, 'CargosEmpresa', 'cargo_id'),
			'empleado' => array(self::BELONGS_TO, 'Empleados', 'empleado_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'empleado_comprobante_id' => 'Empleado Comprobante',
			'empleado_id' => 'Empleado',
			'comprobante_id' => 'Comprobante',
			'actualizacion_id' => 'Actualizacion',
			'fecha_inicial_periodo' => 'Fecha Inicial Periodo',
			'fecha_final_periodo' => 'Fecha Final Periodo',
			'base' => 'Base',
			'neto' => 'Neto',
			'fecha_registro' => 'Fecha Registro',
			'user_registra' => 'User Registra',
			'comprobante' => 'Comprobante',
			'sw_estado' => 'Sw Estado',
			'cargo_id' => 'Cargo',
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

		$criteria->compare('empleado_comprobante_id',$this->empleado_comprobante_id);
		$criteria->compare('empleado_id',$this->empleado_id);
		$criteria->compare('comprobante_id',$this->comprobante_id);
		$criteria->compare('actualizacion_id',$this->actualizacion_id);
		$criteria->compare('fecha_inicial_periodo',$this->fecha_inicial_periodo,true);
		$criteria->compare('fecha_final_periodo',$this->fecha_final_periodo,true);
		$criteria->compare('base',$this->base,true);
		$criteria->compare('neto',$this->neto,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('comprobante',$this->comprobante,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('cargo_id',$this->cargo_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmpleadosComprobantesNominaDetalle the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
