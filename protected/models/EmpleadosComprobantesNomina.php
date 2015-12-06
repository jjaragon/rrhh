<?php

/**
 * This is the model class for table "empleados_comprobantes_nomina".
 *
 * The followings are the available columns in table 'empleados_comprobantes_nomina':
 * @property integer $actualizacion_id
 * @property string $fecha_inicial_periodo
 * @property string $fecha_final_periodo
 * @property string $fecha_registro
 * @property integer $user_registra
 * @property string $sw_estado
 *
 * The followings are the available model relations:
 * @property EmpleadosComprobantesNominaDetalle[] $empleadosComprobantesNominaDetalles
 * @property SystemUsuarios $userRegistra
 */
class EmpleadosComprobantesNomina extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleados_comprobantes_nomina';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_inicial_periodo, fecha_final_periodo, fecha_registro, user_registra', 'required'),
			array('user_registra', 'numerical', 'integerOnly'=>true),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('actualizacion_id, fecha_inicial_periodo, fecha_final_periodo, fecha_registro, user_registra, sw_estado', 'safe', 'on'=>'search'),
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
			'empleadosComprobantesNominaDetalles' => array(self::HAS_MANY, 'EmpleadosComprobantesNominaDetalle', 'actualizacion_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'actualizacion_id' => 'Actualizacion',
			'fecha_inicial_periodo' => 'Fecha Inicial Periodo',
			'fecha_final_periodo' => 'Fecha Final Periodo',
			'fecha_registro' => 'Fecha Registro',
			'user_registra' => 'User Registra',
			'sw_estado' => 'Sw Estado',
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

		$criteria->compare('actualizacion_id',$this->actualizacion_id);
		$criteria->compare('fecha_inicial_periodo',$this->fecha_inicial_periodo,true);
		$criteria->compare('fecha_final_periodo',$this->fecha_final_periodo,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('sw_estado',$this->sw_estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmpleadosComprobantesNomina the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
