<?php

/**
 * This is the model class for table "empleados_auditoria".
 *
 * The followings are the available columns in table 'empleados_auditoria':
 * @property integer $auditoria_id
 * @property integer $empleado_id
 * @property string $estado
 * @property integer $user_registra
 * @property string $fecha_registro
 * @property string $fecha_inicial_estado
 * @property string $fecha_final_estado
 * @property string $sw_estado
 *
 * The followings are the available model relations:
 * @property Empleados $empleado
 * @property SystemUsuarios $userRegistra
 */
class EmpleadosAuditoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleados_auditoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empleado_id, estado, user_registra, fecha_registro, fecha_inicial_estado', 'required'),
			array('empleado_id, user_registra', 'numerical', 'integerOnly'=>true),
			array('estado', 'length', 'max'=>1),
			array('fecha_final_estado, sw_estado', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auditoria_id, empleado_id, estado, user_registra, fecha_registro, fecha_inicial_estado, fecha_final_estado, sw_estado', 'safe', 'on'=>'search'),
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
			'empleado' => array(self::BELONGS_TO, 'Empleados', 'empleado_id'),
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
			'empleado_id' => 'Empleado',
			'estado' => 'Estado',
			'user_registra' => 'User Registra',
			'fecha_registro' => 'Fecha Registro',
			'fecha_inicial_estado' => 'Fecha Inicial Estado',
			'fecha_final_estado' => 'Fecha Final Estado',
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

		$criteria->compare('auditoria_id',$this->auditoria_id);
		$criteria->compare('empleado_id',$this->empleado_id);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('fecha_inicial_estado',$this->fecha_inicial_estado,true);
		$criteria->compare('fecha_final_estado',$this->fecha_final_estado,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmpleadosAuditoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
