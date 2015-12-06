<?php

/**
 * This is the model class for table "etapas_convocatorias_cargos".
 *
 * The followings are the available columns in table 'etapas_convocatorias_cargos':
 * @property integer $etapa_cargo_id
 * @property integer $etapa_id
 * @property string $cargo_id
 * @property string $sw_estado
 * @property string $fecha_registro
 * @property integer $user_registra
 *
 * The followings are the available model relations:
 * @property CargosEmpresa $cargo
 * @property EtapasConvocatoria $etapa
 * @property SystemUsuarios $userRegistra
 */
class EtapasConvocatoriasCargos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'etapas_convocatorias_cargos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('etapa_id, cargo_id, fecha_registro, user_registra', 'required'),
			array('etapa_id, user_registra', 'numerical', 'integerOnly'=>true),
			array('cargo_id', 'length', 'max'=>6),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('etapa_cargo_id, etapa_id, cargo_id, sw_estado, fecha_registro, user_registra', 'safe', 'on'=>'search'),
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
			'cargo' => array(self::BELONGS_TO, 'CargosEmpresa', 'cargo_id'),
			'etapa' => array(self::BELONGS_TO, 'EtapasConvocatoria', 'etapa_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'etapa_cargo_id' => 'Etapa Cargo',
			'etapa_id' => 'Etapa',
			'cargo_id' => 'Cargo',
			'sw_estado' => 'Sw Estado',
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

		$criteria->compare('etapa_cargo_id',$this->etapa_cargo_id);
		$criteria->compare('etapa_id',$this->etapa_id);
		$criteria->compare('cargo_id',$this->cargo_id,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
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
	 * @return EtapasConvocatoriasCargos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
