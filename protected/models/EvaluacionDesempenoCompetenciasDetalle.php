<?php

/**
 * This is the model class for table "evaluacion_desempeno_competencias_detalle".
 *
 * The followings are the available columns in table 'evaluacion_desempeno_competencias_detalle':
 * @property integer $evaluacion_detalle_id
 * @property integer $evaluacion_id
 * @property integer $competencia_id
 * @property integer $nivel_id
 * @property integer $comportamiento_id
 * @property integer $calificacion_id
 * @property string $sw_plan_mejora
 * @property string $observaciones
 * @property integer $user_registra
 * @property string $fecha_registro
 * @property integer $valor_calificacion
 * @property string $descripcion_calificacion
 * @property string $fecha_ultima_actualizacion
 *
 * The followings are the available model relations:
 * @property EvaluacionDesempenoCompetenciasDetalleAuditoria[] $evaluacionDesempenoCompetenciasDetalleAuditorias
 * @property ComportamientosCompetencias $comportamiento
 * @property CalificacionesEvaluacionDesempeno $calificacion
 * @property Competencias $competencia
 * @property EvaluacionDesempenoCompetencias $evaluacion
 * @property NivelesRequeridos $nivel
 * @property SystemUsuarios $userRegistra
 */
class EvaluacionDesempenoCompetenciasDetalle extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'evaluacion_desempeno_competencias_detalle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('evaluacion_id, competencia_id, nivel_id, comportamiento_id, calificacion_id, sw_plan_mejora, user_registra, fecha_registro, valor_calificacion, descripcion_calificacion', 'required'),
			array('evaluacion_id, competencia_id, nivel_id, comportamiento_id, calificacion_id, user_registra, valor_calificacion', 'numerical', 'integerOnly'=>true),
			array('sw_plan_mejora', 'length', 'max'=>1),
			array('observaciones, fecha_ultima_actualizacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('evaluacion_detalle_id, evaluacion_id, competencia_id, nivel_id, comportamiento_id, calificacion_id, sw_plan_mejora, observaciones, user_registra, fecha_registro, valor_calificacion, descripcion_calificacion, fecha_ultima_actualizacion', 'safe', 'on'=>'search'),
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
			'evaluacionDesempenoCompetenciasDetalleAuditorias' => array(self::HAS_MANY, 'EvaluacionDesempenoCompetenciasDetalleAuditoria', 'evaluacion_detalle_id'),
			'comportamiento' => array(self::BELONGS_TO, 'ComportamientosCompetencias', 'comportamiento_id'),
			'calificacion' => array(self::BELONGS_TO, 'CalificacionesEvaluacionDesempeno', 'calificacion_id'),
			'competencia' => array(self::BELONGS_TO, 'Competencias', 'competencia_id'),
			'evaluacion' => array(self::BELONGS_TO, 'EvaluacionDesempenoCompetencias', 'evaluacion_id'),
			'nivel' => array(self::BELONGS_TO, 'NivelesRequeridos', 'nivel_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'evaluacion_detalle_id' => 'Evaluacion Detalle',
			'evaluacion_id' => 'Evaluacion',
			'competencia_id' => 'Competencia',
			'nivel_id' => 'Nivel',
			'comportamiento_id' => 'Comportamiento',
			'calificacion_id' => 'Calificacion',
			'sw_plan_mejora' => 'Sw Plan Mejora',
			'observaciones' => 'Observaciones',
			'user_registra' => 'User Registra',
			'fecha_registro' => 'Fecha Registro',
			'valor_calificacion' => 'Valor Calificacion',
			'descripcion_calificacion' => 'Descripcion Calificacion',
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

		$criteria->compare('evaluacion_detalle_id',$this->evaluacion_detalle_id);
		$criteria->compare('evaluacion_id',$this->evaluacion_id);
		$criteria->compare('competencia_id',$this->competencia_id);
		$criteria->compare('nivel_id',$this->nivel_id);
		$criteria->compare('comportamiento_id',$this->comportamiento_id);
		$criteria->compare('calificacion_id',$this->calificacion_id);
		$criteria->compare('sw_plan_mejora',$this->sw_plan_mejora,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('valor_calificacion',$this->valor_calificacion);
		$criteria->compare('descripcion_calificacion',$this->descripcion_calificacion,true);
		$criteria->compare('fecha_ultima_actualizacion',$this->fecha_ultima_actualizacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EvaluacionDesempenoCompetenciasDetalle the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
