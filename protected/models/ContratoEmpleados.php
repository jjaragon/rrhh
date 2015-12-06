<?php

/**
 * This is the model class for table "contrato_empleados".
 *
 * The followings are the available columns in table 'contrato_empleados':
 * @property integer $contrato_id
 * @property integer $empleado_id
 * @property integer $empresa_id
 * @property string $cargo_id
 * @property integer $salario
 * @property string $periodo_pago
 * @property string $ciudad_contratado
 * @property string $ciudad_desempenho
 * @property string $ciudad_celebracion
 * @property string $fecha_celebracion
 * @property string $fecha_inicio_labores
 * @property string $fecha_vencimiento
 * @property string $periodo_prueba
 * @property string $duracion_contrato
 * @property string $estado_contrato
 * @property integer $sw_primer_contrato
 * @property string $fecha_registro
 * @property integer $plantilla
 * @property string $contenido_contrato
 * @property integer $user_id
 * @property integer $salario_predeterminado
 * @property string $ruta_contrato_anexo
 * @property string $sw_contrato_anterior
 * @property string $sw_tipo_contrato
 * @property string $sw_liquidacion
 * @property string $fecha_finalizacion_labores
 * @property string $sw_estado
 * @property integer $intensidad_horaria
 *
 * The followings are the available model relations:
 * @property DesvinculacionEmpleados[] $desvinculacionEmpleadoses
 * @property ContratoEmpleadosAuditoria[] $contratoEmpleadosAuditorias
 * @property ContratoProximoAVencer[] $contratoProximoAVencers
 * @property BeneficiariosSeguridadSocial[] $beneficiariosSeguridadSocials
 * @property CambiosSeguridadSocial[] $cambiosSeguridadSocials
 * @property ProgramacionEvaluacionDesempeno[] $programacionEvaluacionDesempenos
 * @property SeguridadSocialContratoEmpleado[] $seguridadSocialContratoEmpleados
 * @property CargosEmpresa $cargo
 * @property TipoMpios $ciudadCelebracion
 * @property TipoMpios $ciudadContratado
 * @property TipoMpios $ciudadDesempenho
 * @property Empleados $empleado
 * @property Empresas $empresa
 * @property IntensidadHoraria $intensidadHoraria
 * @property PlantillasDocumentos $plantilla0
 * @property SystemUsuarios $user
 * @property Vinculacion[] $vinculacions
 */
class ContratoEmpleados extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contrato_empleados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empleado_id, empresa_id, cargo_id, estado_contrato, fecha_registro, contenido_contrato, user_id', 'required'),
			array('empleado_id, empresa_id, salario, sw_primer_contrato, plantilla, user_id, salario_predeterminado, intensidad_horaria', 'numerical', 'integerOnly'=>true),
			array('sw_tipo_contrato, sw_liquidacion, sw_estado', 'length', 'max'=>1),
			array('periodo_pago, ciudad_contratado, ciudad_desempenho, ciudad_celebracion, fecha_celebracion, fecha_inicio_labores, fecha_vencimiento, periodo_prueba, duracion_contrato, ruta_contrato_anexo, sw_contrato_anterior, fecha_finalizacion_labores', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('contrato_id, empleado_id, empresa_id, cargo_id, salario, periodo_pago, ciudad_contratado, ciudad_desempenho, ciudad_celebracion, fecha_celebracion, fecha_inicio_labores, fecha_vencimiento, periodo_prueba, duracion_contrato, estado_contrato, sw_primer_contrato, fecha_registro, plantilla, contenido_contrato, user_id, salario_predeterminado, ruta_contrato_anexo, sw_contrato_anterior, sw_tipo_contrato, sw_liquidacion, fecha_finalizacion_labores, sw_estado, intensidad_horaria', 'safe', 'on'=>'search'),
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
			'desvinculacionEmpleadoses' => array(self::HAS_MANY, 'DesvinculacionEmpleados', 'contrato_id'),
			'contratoEmpleadosAuditorias' => array(self::HAS_MANY, 'ContratoEmpleadosAuditoria', 'contrato_id'),
			'contratoProximoAVencers' => array(self::HAS_MANY, 'ContratoProximoAVencer', 'contrato_id'),
			'beneficiariosSeguridadSocials' => array(self::HAS_MANY, 'BeneficiariosSeguridadSocial', 'contrato_id'),
			'cambiosSeguridadSocials' => array(self::HAS_MANY, 'CambiosSeguridadSocial', 'contrato_id'),
			'programacionEvaluacionDesempenos' => array(self::HAS_MANY, 'ProgramacionEvaluacionDesempeno', 'contrato_id'),
			'seguridadSocialContratoEmpleados' => array(self::HAS_MANY, 'SeguridadSocialContratoEmpleado', 'contrato_id'),
			'cargo' => array(self::BELONGS_TO, 'CargosEmpresa', 'cargo_id'),
			'ciudadCelebracion' => array(self::BELONGS_TO, 'TipoMpios', 'ciudad_celebracion'),
			'ciudadContratado' => array(self::BELONGS_TO, 'TipoMpios', 'ciudad_contratado'),
			'ciudadDesempenho' => array(self::BELONGS_TO, 'TipoMpios', 'ciudad_desempenho'),
			'empleado' => array(self::BELONGS_TO, 'Empleados', 'empleado_id'),
			'empresa' => array(self::BELONGS_TO, 'Empresas', 'empresa_id'),
			'intensidadHoraria' => array(self::BELONGS_TO, 'IntensidadHoraria', 'intensidad_horaria'),
			'plantilla0' => array(self::BELONGS_TO, 'PlantillasDocumentos', 'plantilla'),
			'user' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_id'),
			'vinculacions' => array(self::HAS_MANY, 'Vinculacion', 'contrato_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'contrato_id' => 'Contrato',
			'empleado_id' => 'Empleado',
			'empresa_id' => 'Empresa',
			'cargo_id' => 'Cargo',
			'salario' => 'Salario',
			'periodo_pago' => 'Periodo Pago',
			'ciudad_contratado' => 'Ciudad Contratado',
			'ciudad_desempenho' => 'Ciudad Desempenho',
			'ciudad_celebracion' => 'Ciudad Celebracion',
			'fecha_celebracion' => 'Fecha Celebracion',
			'fecha_inicio_labores' => 'Fecha Inicio Labores',
			'fecha_vencimiento' => 'Fecha Vencimiento',
			'periodo_prueba' => 'Periodo Prueba',
			'duracion_contrato' => 'Duracion Contrato',
			'estado_contrato' => 'Estado Contrato',
			'sw_primer_contrato' => 'Sw Primer Contrato',
			'fecha_registro' => 'Fecha Registro',
			'plantilla' => 'Plantilla',
			'contenido_contrato' => 'Contenido Contrato',
			'user_id' => 'User',
			'salario_predeterminado' => 'Salario Predeterminado',
			'ruta_contrato_anexo' => 'Ruta Contrato Anexo',
			'sw_contrato_anterior' => 'Sw Contrato Anterior',
			'sw_tipo_contrato' => 'Sw Tipo Contrato',
			'sw_liquidacion' => 'Sw Liquidacion',
			'fecha_finalizacion_labores' => 'Fecha Finalizacion Labores',
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

		$criteria->compare('contrato_id',$this->contrato_id);
		$criteria->compare('empleado_id',$this->empleado_id);
		$criteria->compare('empresa_id',$this->empresa_id);
		$criteria->compare('cargo_id',$this->cargo_id,true);
		$criteria->compare('salario',$this->salario);
		$criteria->compare('periodo_pago',$this->periodo_pago,true);
		$criteria->compare('ciudad_contratado',$this->ciudad_contratado,true);
		$criteria->compare('ciudad_desempenho',$this->ciudad_desempenho,true);
		$criteria->compare('ciudad_celebracion',$this->ciudad_celebracion,true);
		$criteria->compare('fecha_celebracion',$this->fecha_celebracion,true);
		$criteria->compare('fecha_inicio_labores',$this->fecha_inicio_labores,true);
		$criteria->compare('fecha_vencimiento',$this->fecha_vencimiento,true);
		$criteria->compare('periodo_prueba',$this->periodo_prueba,true);
		$criteria->compare('duracion_contrato',$this->duracion_contrato,true);
		$criteria->compare('estado_contrato',$this->estado_contrato,true);
		$criteria->compare('sw_primer_contrato',$this->sw_primer_contrato);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('plantilla',$this->plantilla);
		$criteria->compare('contenido_contrato',$this->contenido_contrato,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('salario_predeterminado',$this->salario_predeterminado);
		$criteria->compare('ruta_contrato_anexo',$this->ruta_contrato_anexo,true);
		$criteria->compare('sw_contrato_anterior',$this->sw_contrato_anterior,true);
		$criteria->compare('sw_tipo_contrato',$this->sw_tipo_contrato,true);
		$criteria->compare('sw_liquidacion',$this->sw_liquidacion,true);
		$criteria->compare('fecha_finalizacion_labores',$this->fecha_finalizacion_labores,true);
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
	 * @return ContratoEmpleados the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
