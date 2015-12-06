<?php

/**
 * This is the model class for table "solicitud_documentos_vinculacion_auditoria".
 *
 * The followings are the available columns in table 'solicitud_documentos_vinculacion_auditoria':
 * @property integer $auditoria_id
 * @property integer $solicitud_id
 * @property string $fecha_registro
 * @property integer $user_registra
 * @property string $sw_accion
 *
 * The followings are the available model relations:
 * @property SolicitudDocumentosVinculacion $solicitud
 * @property SystemUsuarios $userRegistra
 */
class SolicitudDocumentosVinculacionAuditoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitud_documentos_vinculacion_auditoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('solicitud_id, fecha_registro, user_registra', 'required'),
			array('solicitud_id, user_registra', 'numerical', 'integerOnly'=>true),
			array('sw_accion', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auditoria_id, solicitud_id, fecha_registro, user_registra, sw_accion', 'safe', 'on'=>'search'),
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
			'solicitud' => array(self::BELONGS_TO, 'SolicitudDocumentosVinculacion', 'solicitud_id'),
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
			'fecha_registro' => 'Fecha Registro',
			'user_registra' => 'User Registra',
			'sw_accion' => 'Sw Accion',
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
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('sw_accion',$this->sw_accion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SolicitudDocumentosVinculacionAuditoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
