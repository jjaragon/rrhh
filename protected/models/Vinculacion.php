<?php

/**
 * This is the model class for table "vinculacion".
 *
 * The followings are the available columns in table 'vinculacion':
 * @property integer $vinculacion_id
 * @property integer $convocatoria_id
 * @property integer $aspirante_id
 * @property integer $estado_id
 * @property string $fecha_registro
 * @property integer $user_registra
 * @property integer $contrato_id
 *
 * The followings are the available model relations:
 * @property SolicitudDocumentosVinculacion[] $solicitudDocumentosVinculacions
 * @property VinculacionAuditoria[] $vinculacionAuditorias
 * @property ContratoEmpleados $contrato
 * @property AspirantesConvocatorias $convocatoria
 * @property AspirantesConvocatorias $aspirante
 * @property EstadosVinculacion $estado
 * @property SystemUsuarios $userRegistra
 */
class Vinculacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vinculacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('convocatoria_id, aspirante_id, estado_id, fecha_registro, user_registra', 'required'),
			array('convocatoria_id, aspirante_id, estado_id, user_registra, contrato_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('vinculacion_id, convocatoria_id, aspirante_id, estado_id, fecha_registro, user_registra, contrato_id', 'safe', 'on'=>'search'),
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
			'solicitudDocumentosVinculacions' => array(self::HAS_MANY, 'SolicitudDocumentosVinculacion', 'vinculacion_id'),
			'vinculacionAuditorias' => array(self::HAS_MANY, 'VinculacionAuditoria', 'vinculacion_id'),
			'contrato' => array(self::BELONGS_TO, 'ContratoEmpleados', 'contrato_id'),
			'convocatoria' => array(self::BELONGS_TO, 'AspirantesConvocatorias', 'convocatoria_id'),
			'aspirante' => array(self::BELONGS_TO, 'AspirantesConvocatorias', 'aspirante_id'),
			'estado' => array(self::BELONGS_TO, 'EstadosVinculacion', 'estado_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'vinculacion_id' => 'Vinculacion',
			'convocatoria_id' => 'Convocatoria',
			'aspirante_id' => 'Aspirante',
			'estado_id' => 'Estado',
			'fecha_registro' => 'Fecha Registro',
			'user_registra' => 'User Registra',
			'contrato_id' => 'Contrato',
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

		$criteria->compare('vinculacion_id',$this->vinculacion_id);
		$criteria->compare('convocatoria_id',$this->convocatoria_id);
		$criteria->compare('aspirante_id',$this->aspirante_id);
		$criteria->compare('estado_id',$this->estado_id);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('contrato_id',$this->contrato_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vinculacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
