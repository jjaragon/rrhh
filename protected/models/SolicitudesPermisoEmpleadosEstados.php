<?php

/**
 * This is the model class for table "solicitudes_permiso_empleados_estados".
 *
 * The followings are the available columns in table 'solicitudes_permiso_empleados_estados':
 * @property integer $estado_id
 * @property string $descripcion
 * @property string $sw_estado
 * @property integer $user_registra
 * @property string $fecha_registro
 *
 * The followings are the available model relations:
 * @property PermisosEmpleadosAnexos[] $permisosEmpleadosAnexoses
 * @property SolicitudesPermisoEmpleadosAuditoria[] $solicitudesPermisoEmpleadosAuditorias
 * @property SolicitudesPermisoEmpleados[] $solicitudesPermisoEmpleadoses
 * @property SystemUsuarios $userRegistra
 */
class SolicitudesPermisoEmpleadosEstados extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitudes_permiso_empleados_estados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, user_registra, fecha_registro', 'required'),
			array('user_registra', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>128),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('estado_id, descripcion, sw_estado, user_registra, fecha_registro', 'safe', 'on'=>'search'),
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
			'permisosEmpleadosAnexoses' => array(self::HAS_MANY, 'PermisosEmpleadosAnexos', 'estado'),
			'solicitudesPermisoEmpleadosAuditorias' => array(self::HAS_MANY, 'SolicitudesPermisoEmpleadosAuditoria', 'estado'),
			'solicitudesPermisoEmpleadoses' => array(self::HAS_MANY, 'SolicitudesPermisoEmpleados', 'estado_solicitud'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'estado_id' => 'Estado',
			'descripcion' => 'Descripcion',
			'sw_estado' => 'Sw Estado',
			'user_registra' => 'User Registra',
			'fecha_registro' => 'Fecha Registro',
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

		$criteria->compare('estado_id',$this->estado_id);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SolicitudesPermisoEmpleadosEstados the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
