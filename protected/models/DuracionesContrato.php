<?php

/**
 * This is the model class for table "duraciones_contrato".
 *
 * The followings are the available columns in table 'duraciones_contrato':
 * @property integer $duracion_id
 * @property string $duracion
 * @property string $sw_estado
 * @property integer $user_registra
 * @property string $fecha_registro
 * @property integer $orden
 * @property string $periodo_prueba
 * @property string $sw_termino_indefinido
 *
 * The followings are the available model relations:
 * @property SystemUsuarios $userRegistra
 */
class DuracionesContrato extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'duraciones_contrato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('duracion, sw_estado, user_registra, fecha_registro, orden, periodo_prueba', 'required'),
			array('user_registra, orden', 'numerical', 'integerOnly'=>true),
			array('sw_estado, sw_termino_indefinido', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('duracion_id, duracion, sw_estado, user_registra, fecha_registro, orden, periodo_prueba, sw_termino_indefinido', 'safe', 'on'=>'search'),
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
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'duracion_id' => 'Duracion',
			'duracion' => 'Duracion',
			'sw_estado' => 'Sw Estado',
			'user_registra' => 'User Registra',
			'fecha_registro' => 'Fecha Registro',
			'orden' => 'Orden',
			'periodo_prueba' => 'Periodo Prueba',
			'sw_termino_indefinido' => 'Sw Termino Indefinido',
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

		$criteria->compare('duracion_id',$this->duracion_id);
		$criteria->compare('duracion',$this->duracion,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('orden',$this->orden);
		$criteria->compare('periodo_prueba',$this->periodo_prueba,true);
		$criteria->compare('sw_termino_indefinido',$this->sw_termino_indefinido,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DuracionesContrato the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
