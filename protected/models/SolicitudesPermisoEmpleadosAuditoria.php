<?php

/**
 * This is the model class for table "solicitudes_permiso_empleados_auditoria".
 *
 * The followings are the available columns in table 'solicitudes_permiso_empleados_auditoria':
 * @property integer $auditoria_id
 * @property integer $solicitud_id
 * @property integer $estado
 * @property integer $user_registra
 * @property string $observacion
 * @property string $fecha_registro
 * @property integer $motivo_rechazo
 *
 * The followings are the available model relations:
 * @property SolicitudesPermisoEmpleadosEstados $estado0
 * @property ListaMotivosRechazoSolicitudPermiso $motivoRechazo
 * @property SolicitudesPermisoEmpleados $solicitud
 * @property SystemUsuarios $userRegistra
 */
class SolicitudesPermisoEmpleadosAuditoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitudes_permiso_empleados_auditoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('solicitud_id, estado, user_registra, fecha_registro', 'required'),
			array('solicitud_id, estado, user_registra, motivo_rechazo', 'numerical', 'integerOnly'=>true),
			array('observacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auditoria_id, solicitud_id, estado, user_registra, observacion, fecha_registro, motivo_rechazo', 'safe', 'on'=>'search'),
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
			'estado0' => array(self::BELONGS_TO, 'SolicitudesPermisoEmpleadosEstados', 'estado'),
			'motivoRechazo' => array(self::BELONGS_TO, 'ListaMotivosRechazoSolicitudPermiso', 'motivo_rechazo'),
			'solicitud' => array(self::BELONGS_TO, 'SolicitudesPermisoEmpleados', 'solicitud_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'auditoria_id' => 'Auditoria',
			'solicitud_id' => 'Solicitud',
			'estado' => 'Estado',
			'user_registra' => 'User Registra',
			'observacion' => 'Observacion',
			'fecha_registro' => 'Fecha Registro',
			'motivo_rechazo' => 'Motivo Rechazo',
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
		$criteria->compare('solicitud_id',$this->solicitud_id);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('motivo_rechazo',$this->motivo_rechazo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SolicitudesPermisoEmpleadosAuditoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
