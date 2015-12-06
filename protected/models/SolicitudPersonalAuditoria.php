<?php

/**
 * This is the model class for table "solicitud_personal_auditoria".
 *
 * The followings are the available columns in table 'solicitud_personal_auditoria':
 * @property integer $auditoria_id
 * @property integer $solicitud_id
 * @property integer $estado_id
 * @property string $observacion
 * @property integer $user_id
 * @property string $fecha_auditoria
 *
 * The followings are the available model relations:
 * @property EstadosSolicitudPersonal $estado
 * @property SolicitudPersonal $solicitud
 * @property SystemUsuarios $user
 */
class SolicitudPersonalAuditoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitud_personal_auditoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('solicitud_id, estado_id, observacion, user_id, fecha_auditoria', 'required'),
			array('solicitud_id, estado_id, user_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auditoria_id, solicitud_id, estado_id, observacion, user_id, fecha_auditoria', 'safe', 'on'=>'search'),
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
			'estado' => array(self::BELONGS_TO, 'EstadosSolicitudPersonal', 'estado_id'),
			'solicitud' => array(self::BELONGS_TO, 'SolicitudPersonal', 'solicitud_id'),
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
			'solicitud_id' => 'Solicitud',
			'estado_id' => 'Estado',
			'observacion' => 'Observacion',
			'user_id' => 'User',
			'fecha_auditoria' => 'Fecha Auditoria',
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
		$criteria->compare('estado_id',$this->estado_id);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('fecha_auditoria',$this->fecha_auditoria,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SolicitudPersonalAuditoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
