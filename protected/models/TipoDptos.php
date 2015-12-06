<?php

/**
 * This is the model class for table "tipo_dptos".
 *
 * The followings are the available columns in table 'tipo_dptos':
 * @property string $tipo_dpto_id
 * @property string $tipo_pais_id
 * @property string $departamento
 * @property string $fecha_registro
 * @property string $sw_estado
 *
 * The followings are the available model relations:
 * @property TipoPais $tipoPais
 * @property TipoMpios[] $tipoMpioses
 * @property TipoMpios[] $tipoMpioses1
 */
class TipoDptos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_dptos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_dpto_id, tipo_pais_id, fecha_registro', 'required'),
			array('tipo_dpto_id, tipo_pais_id', 'length', 'max'=>4),
			array('departamento', 'length', 'max'=>30),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tipo_dpto_id, tipo_pais_id, departamento, fecha_registro, sw_estado', 'safe', 'on'=>'search'),
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
			'tipoPais' => array(self::BELONGS_TO, 'TipoPais', 'tipo_pais_id'),
			'tipoMpioses' => array(self::HAS_MANY, 'TipoMpios', 'tipo_pais_id'),
			'tipoMpioses1' => array(self::HAS_MANY, 'TipoMpios', 'tipo_dpto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipo_dpto_id' => 'Tipo Dpto',
			'tipo_pais_id' => 'Tipo Pais',
			'departamento' => 'Departamento',
			'fecha_registro' => 'Fecha Registro',
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

		$criteria->compare('tipo_dpto_id',$this->tipo_dpto_id,true);
		$criteria->compare('tipo_pais_id',$this->tipo_pais_id,true);
		$criteria->compare('departamento',$this->departamento,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoDptos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
