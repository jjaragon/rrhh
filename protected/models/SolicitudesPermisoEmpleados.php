<?php

/**
 * This is the model class for table "solicitudes_permiso_empleados".
 *
 * The followings are the available columns in table 'solicitudes_permiso_empleados':
 * @property integer $solicitud_id
 * @property integer $empleado_id
 * @property integer $empleado_reemplaza
 * @property string $fecha_inicial_permiso
 * @property string $fecha_final_permiso
 * @property integer $numero_horas_permiso
 * @property string $observacion
 * @property string $fecha_registro
 * @property integer $user_registra
 * @property integer $motivo_solicitud_id
 * @property string $descripcion_motivo_permiso
 * @property string $cargo_id
 * @property string $area_id
 * @property integer $estado_solicitud
 * @property string $sw_remunera
 * @property string $sw_compensa
 * @property string $sw_tercero
 *
 * The followings are the available model relations:
 * @property PermisosEmpleadosAnexos[] $permisosEmpleadosAnexoses
 * @property ReposicionTiempoPermisos[] $reposicionTiempoPermisoses
 * @property SolicitudesPermisoEmpleadosAuditoria[] $solicitudesPermisoEmpleadosAuditorias
 * @property Areas $area
 * @property CargosEmpresa $cargo
 * @property Empleados $empleado
 * @property Empleados $empleadoReemplaza
 * @property ListaMotivosSolicitudPermiso $motivoSolicitud
 * @property SystemUsuarios $userRegistra
 * @property SolicitudesPermisoEmpleadosEstados $estadoSolicitud
 */
class SolicitudesPermisoEmpleados extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitudes_permiso_empleados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empleado_id, empleado_reemplaza, fecha_inicial_permiso, fecha_final_permiso, fecha_registro, user_registra, motivo_solicitud_id, descripcion_motivo_permiso, cargo_id, area_id', 'required'),
			array('empleado_id, empleado_reemplaza, numero_horas_permiso, user_registra, motivo_solicitud_id, estado_solicitud', 'numerical', 'integerOnly'=>true),
			array('descripcion_motivo_permiso', 'length', 'max'=>512),
			array('cargo_id, area_id', 'length', 'max'=>6),
			array('sw_remunera, sw_compensa, sw_tercero', 'length', 'max'=>1),
			array('observacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('solicitud_id, empleado_id, empleado_reemplaza, fecha_inicial_permiso, fecha_final_permiso, numero_horas_permiso, observacion, fecha_registro, user_registra, motivo_solicitud_id, descripcion_motivo_permiso, cargo_id, area_id, estado_solicitud, sw_remunera, sw_compensa, sw_tercero', 'safe', 'on'=>'search'),
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
			'permisosEmpleadosAnexoses' => array(self::HAS_MANY, 'PermisosEmpleadosAnexos', 'solicitud_id'),
			'reposicionTiempoPermisoses' => array(self::HAS_MANY, 'ReposicionTiempoPermisos', 'permiso_id'),
			'solicitudesPermisoEmpleadosAuditorias' => array(self::HAS_MANY, 'SolicitudesPermisoEmpleadosAuditoria', 'solicitud_id'),
			'area' => array(self::BELONGS_TO, 'Areas', 'area_id'),
			'cargo' => array(self::BELONGS_TO, 'CargosEmpresa', 'cargo_id'),
			'empleado' => array(self::BELONGS_TO, 'Empleados', 'empleado_id'),
			'empleadoReemplaza' => array(self::BELONGS_TO, 'Empleados', 'empleado_reemplaza'),
			'motivoSolicitud' => array(self::BELONGS_TO, 'ListaMotivosSolicitudPermiso', 'motivo_solicitud_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
			'estadoSolicitud' => array(self::BELONGS_TO, 'SolicitudesPermisoEmpleadosEstados', 'estado_solicitud'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'solicitud_id' => 'Solicitud',
			'empleado_id' => 'Empleado',
			'empleado_reemplaza' => 'Empleado Reemplaza',
			'fecha_inicial_permiso' => 'Fecha Inicial Permiso',
			'fecha_final_permiso' => 'Fecha Final Permiso',
			'numero_horas_permiso' => 'Numero Horas Permiso',
			'observacion' => 'Observacion',
			'fecha_registro' => 'Fecha Registro',
			'user_registra' => 'User Registra',
			'motivo_solicitud_id' => 'Motivo Solicitud',
			'descripcion_motivo_permiso' => 'Descripcion Motivo Permiso',
			'cargo_id' => 'Cargo',
			'area_id' => 'Area',
			'estado_solicitud' => 'Estado Solicitud',
			'sw_remunera' => 'Sw Remunera',
			'sw_compensa' => 'Sw Compensa',
			'sw_tercero' => 'Sw Tercero',
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

		$criteria->compare('solicitud_id',$this->solicitud_id);
		$criteria->compare('empleado_id',$this->empleado_id);
		$criteria->compare('empleado_reemplaza',$this->empleado_reemplaza);
		$criteria->compare('fecha_inicial_permiso',$this->fecha_inicial_permiso,true);
		$criteria->compare('fecha_final_permiso',$this->fecha_final_permiso,true);
		$criteria->compare('numero_horas_permiso',$this->numero_horas_permiso);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('motivo_solicitud_id',$this->motivo_solicitud_id);
		$criteria->compare('descripcion_motivo_permiso',$this->descripcion_motivo_permiso,true);
		$criteria->compare('cargo_id',$this->cargo_id,true);
		$criteria->compare('area_id',$this->area_id,true);
		$criteria->compare('estado_solicitud',$this->estado_solicitud);
		$criteria->compare('sw_remunera',$this->sw_remunera,true);
		$criteria->compare('sw_compensa',$this->sw_compensa,true);
		$criteria->compare('sw_tercero',$this->sw_tercero,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SolicitudesPermisoEmpleados the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
