<?php

/**
 * This is the model class for table "evaluacion_desempeno_competencias_auditoria".
 *
 * The followings are the available columns in table 'evaluacion_desempeno_competencias_auditoria':
 * @property integer $auditoria_id
 * @property integer $evaluacion_id
 * @property integer $estado_id
 * @property string $fecha_registro
 * @property integer $user_registra
 * @property string $observacion
 *
 * The followings are the available model relations:
 * @property EvaluacionDesempenoCompetenciasEstados $estado
 * @property EvaluacionDesempenoCompetencias $evaluacion
 * @property SystemUsuarios $userRegistra
 */
class EvaluacionDesempenoCompetenciasAuditoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'evaluacion_desempeno_competencias_auditoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('evaluacion_id, estado_id, fecha_registro, user_registra', 'required'),
			array('evaluacion_id, estado_id, user_registra', 'numerical', 'integerOnly'=>true),
			array('observacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auditoria_id, evaluacion_id, estado_id, fecha_registro, user_registra, observacion', 'safe', 'on'=>'search'),
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
			'estado' => array(self::BELONGS_TO, 'EvaluacionDesempenoCompetenciasEstados', 'estado_id'),
			'evaluacion' => array(self::BELONGS_TO, 'EvaluacionDesempenoCompetencias', 'evaluacion_id'),
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
			'evaluacion_id' => 'Evaluacion',
			'estado_id' => 'Estado',
			'fecha_registro' => 'Fecha Registro',
			'user_registra' => 'User Registra',
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
		$criteria->compare('evaluacion_id',$this->evaluacion_id);
		$criteria->compare('estado_id',$this->estado_id);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('observacion',$this->observacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EvaluacionDesempenoCompetenciasAuditoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
