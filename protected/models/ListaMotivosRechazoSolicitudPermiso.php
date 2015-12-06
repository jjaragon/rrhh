<?php

/**
 * This is the model class for table "lista_motivos_rechazo_solicitud_permiso".
 *
 * The followings are the available columns in table 'lista_motivos_rechazo_solicitud_permiso':
 * @property integer $motivo_rechazo_id
 * @property string $descripcion
 * @property string $sw_estado
 * @property string $fecha_registro
 * @property integer $user_registra
 *
 * The followings are the available model relations:
 * @property SystemUsuarios $userRegistra
 * @property SolicitudesPermisoEmpleadosAuditoria[] $solicitudesPermisoEmpleadosAuditorias
 */
class ListaMotivosRechazoSolicitudPermiso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lista_motivos_rechazo_solicitud_permiso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, fecha_registro, user_registra', 'required'),
			array('user_registra', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>128),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('motivo_rechazo_id, descripcion, sw_estado, fecha_registro, user_registra', 'safe', 'on'=>'search'),
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
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
			'solicitudesPermisoEmpleadosAuditorias' => array(self::HAS_MANY, 'SolicitudesPermisoEmpleadosAuditoria', 'motivo_rechazo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'motivo_rechazo_id' => 'Motivo Rechazo',
			'descripcion' => 'Descripcion',
			'sw_estado' => 'Sw Estado',
			'fecha_registro' => 'Fecha Registro',
			'user_registra' => 'User Registra',
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

		$criteria->compare('motivo_rechazo_id',$this->motivo_rechazo_id);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('user_registra',$this->user_registra);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ListaMotivosRechazoSolicitudPermiso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
