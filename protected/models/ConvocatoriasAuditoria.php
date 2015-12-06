<?php

/**
 * This is the model class for table "convocatorias_auditoria".
 *
 * The followings are the available columns in table 'convocatorias_auditoria':
 * @property integer $auditoria_id
 * @property integer $convocatoria_id
 * @property string $estado_convocatoria
 * @property string $fecha_auditoria
 * @property integer $user_registra
 * @property string $fecha_cierre
 * @property string $observacion
 *
 * The followings are the available model relations:
 * @property Convocatorias $convocatoria
 * @property SystemUsuarios $userRegistra
 */
class ConvocatoriasAuditoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'convocatorias_auditoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('convocatoria_id, estado_convocatoria, fecha_auditoria, user_registra', 'required'),
			array('convocatoria_id, user_registra', 'numerical', 'integerOnly'=>true),
			array('estado_convocatoria', 'length', 'max'=>1),
			array('fecha_cierre, observacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auditoria_id, convocatoria_id, estado_convocatoria, fecha_auditoria, user_registra, fecha_cierre, observacion', 'safe', 'on'=>'search'),
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
			'convocatoria' => array(self::BELONGS_TO, 'Convocatorias', 'convocatoria_id'),
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
			'convocatoria_id' => 'Convocatoria',
			'estado_convocatoria' => 'Estado Convocatoria',
			'fecha_auditoria' => 'Fecha Auditoria',
			'user_registra' => 'User Registra',
			'fecha_cierre' => 'Fecha Cierre',
			'observacion' => 'Observacion',
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
		$criteria->compare('convocatoria_id',$this->convocatoria_id);
		$criteria->compare('estado_convocatoria',$this->estado_convocatoria,true);
		$criteria->compare('fecha_auditoria',$this->fecha_auditoria,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('fecha_cierre',$this->fecha_cierre,true);
		$criteria->compare('observacion',$this->observacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ConvocatoriasAuditoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
