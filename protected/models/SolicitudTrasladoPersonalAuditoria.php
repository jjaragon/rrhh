<?php

/**
 * This is the model class for table "solicitud_traslado_personal_auditoria".
 *
 * The followings are the available columns in table 'solicitud_traslado_personal_auditoria':
 * @property integer $auditoria_id
 * @property integer $traslado_id
 * @property integer $estado_id
 * @property integer $rechazo_id
 * @property string $observacion
 * @property integer $user_registra
 * @property string $fecha_registro
 * @property integer $motivo_aprobacion_id
 *
 * The followings are the available model relations:
 * @property EstadosSolicitudTraslado $estado
 * @property MotivosAprobacionTrasladoPersonal $motivoAprobacion
 * @property MotivosRechazoTrasladoPersonal $rechazo
 * @property SolicitudTrasladoPersonal $traslado
 * @property SystemUsuarios $userRegistra
 */
class SolicitudTrasladoPersonalAuditoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitud_traslado_personal_auditoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('traslado_id, estado_id, user_registra, fecha_registro', 'required'),
			array('traslado_id, estado_id, rechazo_id, user_registra, motivo_aprobacion_id', 'numerical', 'integerOnly'=>true),
			array('observacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auditoria_id, traslado_id, estado_id, rechazo_id, observacion, user_registra, fecha_registro, motivo_aprobacion_id', 'safe', 'on'=>'search'),
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
			'estado' => array(self::BELONGS_TO, 'EstadosSolicitudTraslado', 'estado_id'),
			'motivoAprobacion' => array(self::BELONGS_TO, 'MotivosAprobacionTrasladoPersonal', 'motivo_aprobacion_id'),
			'rechazo' => array(self::BELONGS_TO, 'MotivosRechazoTrasladoPersonal', 'rechazo_id'),
			'traslado' => array(self::BELONGS_TO, 'SolicitudTrasladoPersonal', 'traslado_id'),
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
			'traslado_id' => 'Traslado',
			'estado_id' => 'Estado',
			'rechazo_id' => 'Rechazo',
			'observacion' => 'Observacion',
			'user_registra' => 'User Registra',
			'fecha_registro' => 'Fecha Registro',
			'motivo_aprobacion_id' => 'Motivo Aprobacion',
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
		$criteria->compare('traslado_id',$this->traslado_id);
		$criteria->compare('estado_id',$this->estado_id);
		$criteria->compare('rechazo_id',$this->rechazo_id);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('motivo_aprobacion_id',$this->motivo_aprobacion_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SolicitudTrasladoPersonalAuditoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
