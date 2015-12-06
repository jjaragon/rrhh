<?php

/**
 * This is the model class for table "tipo_pais".
 *
 * The followings are the available columns in table 'tipo_pais':
 * @property string $tipo_pais_id
 * @property string $bloqueado_edicion
 * @property string $pais
 * @property string $fecha_registro
 * @property string $sw_estado
 * @property integer $user_registra
 *
 * The followings are the available model relations:
 * @property DatosPersonalesHv[] $datosPersonalesHvs
 * @property TipoDptos[] $tipoDptoses
 * @property SystemUsuarios $userRegistra
 */
class TipoPais extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_pais';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_pais_id, pais, fecha_registro, user_registra', 'required'),
			array('user_registra', 'numerical', 'integerOnly'=>true),
			array('tipo_pais_id', 'length', 'max'=>4),
			array('bloqueado_edicion, sw_estado', 'length', 'max'=>1),
			array('pais', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tipo_pais_id, bloqueado_edicion, pais, fecha_registro, sw_estado, user_registra', 'safe', 'on'=>'search'),
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
			'datosPersonalesHvs' => array(self::HAS_MANY, 'DatosPersonalesHv', 'lugar_nacimiento_exterior'),
			'tipoDptoses' => array(self::HAS_MANY, 'TipoDptos', 'tipo_pais_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipo_pais_id' => 'Tipo Pais',
			'bloqueado_edicion' => 'Bloqueado Edicion',
			'pais' => 'Pais',
			'fecha_registro' => 'Fecha Registro',
			'sw_estado' => 'Sw Estado',
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

		$criteria->compare('tipo_pais_id',$this->tipo_pais_id,true);
		$criteria->compare('bloqueado_edicion',$this->bloqueado_edicion,true);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('user_registra',$this->user_registra);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoPais the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
