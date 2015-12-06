<?php

/**
 * This is the model class for table "solicitud_documentos_vinculacion".
 *
 * The followings are the available columns in table 'solicitud_documentos_vinculacion':
 * @property integer $solicitud_id
 * @property integer $vinculacion_id
 * @property string $fecha_registro
 * @property integer $user_registra
 *
 * The followings are the available model relations:
 * @property ListaDocumentosVinculacion[] $listaDocumentosVinculacions
 * @property SolicitudDocumentosVinculacionAuditoria[] $solicitudDocumentosVinculacionAuditorias
 * @property SystemUsuarios $userRegistra
 * @property Vinculacion $vinculacion
 */
class SolicitudDocumentosVinculacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitud_documentos_vinculacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vinculacion_id, fecha_registro, user_registra', 'required'),
			array('vinculacion_id, user_registra', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('solicitud_id, vinculacion_id, fecha_registro, user_registra', 'safe', 'on'=>'search'),
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
			'listaDocumentosVinculacions' => array(self::HAS_MANY, 'ListaDocumentosVinculacion', 'solicitud_id'),
			'solicitudDocumentosVinculacionAuditorias' => array(self::HAS_MANY, 'SolicitudDocumentosVinculacionAuditoria', 'solicitud_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
			'vinculacion' => array(self::BELONGS_TO, 'Vinculacion', 'vinculacion_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'solicitud_id' => 'Solicitud',
			'vinculacion_id' => 'Vinculacion',
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

		$criteria->compare('solicitud_id',$this->solicitud_id);
		$criteria->compare('vinculacion_id',$this->vinculacion_id);
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
	 * @return SolicitudDocumentosVinculacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
