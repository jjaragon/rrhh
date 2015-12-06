<?php

/**
 * This is the model class for table "evaluacion_desempeno_plan_mejora".
 *
 * The followings are the available columns in table 'evaluacion_desempeno_plan_mejora':
 * @property integer $plan_id
 * @property integer $evaluacion_id
 * @property integer $estado_id
 * @property integer $user_registra
 * @property string $fecha_registro
 * @property string $fecha_ultima_actualizacion
 *
 * The followings are the available model relations:
 * @property EvaluacionDesempenoPlanMejoraAuditoria[] $evaluacionDesempenoPlanMejoraAuditorias
 * @property EvaluacionDesempenoPlanMejoraDetalle[] $evaluacionDesempenoPlanMejoraDetalles
 * @property EvaluacionDesempenoPlanMejoraEstados $estado
 * @property EvaluacionDesempenoCompetencias $evaluacion
 * @property SystemUsuarios $userRegistra
 */
class EvaluacionDesempenoPlanMejora extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'evaluacion_desempeno_plan_mejora';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('evaluacion_id, estado_id, user_registra, fecha_registro, fecha_ultima_actualizacion', 'required'),
			array('evaluacion_id, estado_id, user_registra', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('plan_id, evaluacion_id, estado_id, user_registra, fecha_registro, fecha_ultima_actualizacion', 'safe', 'on'=>'search'),
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
			'evaluacionDesempenoPlanMejoraAuditorias' => array(self::HAS_MANY, 'EvaluacionDesempenoPlanMejoraAuditoria', 'plan_id'),
			'evaluacionDesempenoPlanMejoraDetalles' => array(self::HAS_MANY, 'EvaluacionDesempenoPlanMejoraDetalle', 'plan_id'),
			'estado' => array(self::BELONGS_TO, 'EvaluacionDesempenoPlanMejoraEstados', 'estado_id'),
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
			'plan_id' => 'Plan',
			'evaluacion_id' => 'Evaluacion',
			'estado_id' => 'Estado',
			'user_registra' => 'User Registra',
			'fecha_registro' => 'Fecha Registro',
			'fecha_ultima_actualizacion' => 'Fecha Ultima Actualizacion',
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

		$criteria->compare('plan_id',$this->plan_id);
		$criteria->compare('evaluacion_id',$this->evaluacion_id);
		$criteria->compare('estado_id',$this->estado_id);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('fecha_ultima_actualizacion',$this->fecha_ultima_actualizacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EvaluacionDesempenoPlanMejora the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
