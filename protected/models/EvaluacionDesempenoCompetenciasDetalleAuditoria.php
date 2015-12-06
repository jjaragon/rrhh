<?php

/**
 * This is the model class for table "evaluacion_desempeno_competencias_detalle_auditoria".
 *
 * The followings are the available columns in table 'evaluacion_desempeno_competencias_detalle_auditoria':
 * @property integer $auditoria_id
 * @property integer $evaluacion_detalle_id
 * @property integer $calificacion_id
 * @property integer $valor_calificacion
 * @property string $descripcion_calificacion
 * @property string $sw_plan_mejora
 * @property string $observaciones
 * @property string $fecha_registro
 * @property integer $user_registra
 *
 * The followings are the available model relations:
 * @property CalificacionesEvaluacionDesempeno $calificacion
 * @property SystemUsuarios $userRegistra
 * @property EvaluacionDesempenoCompetenciasDetalle $evaluacionDetalle
 */
class EvaluacionDesempenoCompetenciasDetalleAuditoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'evaluacion_desempeno_competencias_detalle_auditoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('evaluacion_detalle_id, calificacion_id, valor_calificacion, descripcion_calificacion, sw_plan_mejora, fecha_registro, user_registra', 'required'),
			array('evaluacion_detalle_id, calificacion_id, valor_calificacion, user_registra', 'numerical', 'integerOnly'=>true),
			array('sw_plan_mejora', 'length', 'max'=>1),
			array('observaciones', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auditoria_id, evaluacion_detalle_id, calificacion_id, valor_calificacion, descripcion_calificacion, sw_plan_mejora, observaciones, fecha_registro, user_registra', 'safe', 'on'=>'search'),
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
			'calificacion' => array(self::BELONGS_TO, 'CalificacionesEvaluacionDesempeno', 'calificacion_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
			'evaluacionDetalle' => array(self::BELONGS_TO, 'EvaluacionDesempenoCompetenciasDetalle', 'evaluacion_detalle_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'auditoria_id' => 'Auditoria',
			'evaluacion_detalle_id' => 'Evaluacion Detalle',
			'calificacion_id' => 'Calificacion',
			'valor_calificacion' => 'Valor Calificacion',
			'descripcion_calificacion' => 'Descripcion Calificacion',
			'sw_plan_mejora' => 'Sw Plan Mejora',
			'observaciones' => 'Observaciones',
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

		$criteria->compare('auditoria_id',$this->auditoria_id);
		$criteria->compare('evaluacion_detalle_id',$this->evaluacion_detalle_id);
		$criteria->compare('calificacion_id',$this->calificacion_id);
		$criteria->compare('valor_calificacion',$this->valor_calificacion);
		$criteria->compare('descripcion_calificacion',$this->descripcion_calificacion,true);
		$criteria->compare('sw_plan_mejora',$this->sw_plan_mejora,true);
		$criteria->compare('observaciones',$this->observaciones,true);
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
	 * @return EvaluacionDesempenoCompetenciasDetalleAuditoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
