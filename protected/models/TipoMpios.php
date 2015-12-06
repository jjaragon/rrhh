<?php

/**
 * This is the model class for table "tipo_mpios".
 *
 * The followings are the available columns in table 'tipo_mpios':
 * @property string $tipo_pais_id
 * @property string $tipo_dpto_id
 * @property string $tipo_mpio_id
 * @property string $municipio
 * @property string $ubicacion
 * @property string $mpio_consulado
 * @property string $sw_estado
 * @property string $fecha_registro
 *
 * The followings are the available model relations:
 * @property DatosPersonalesHv[] $datosPersonalesHvs
 * @property DatosPersonalesHv[] $datosPersonalesHvs1
 * @property Empresas[] $empresases
 * @property EntidadesSeguridadSocial[] $entidadesSeguridadSocials
 * @property HojaDeVida[] $hojaDeVidas
 * @property TipoUniversidadesUbicaciones[] $tipoUniversidadesUbicaciones
 * @property ContratoEmpleados[] $contratoEmpleadoses
 * @property ContratoEmpleados[] $contratoEmpleadoses1
 * @property ContratoEmpleados[] $contratoEmpleadoses2
 * @property TipoDptos $tipoPais
 * @property TipoDptos $tipoDpto
 */
class TipoMpios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_mpios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_pais_id, tipo_dpto_id, tipo_mpio_id, fecha_registro', 'required'),
			array('tipo_pais_id, tipo_dpto_id, tipo_mpio_id', 'length', 'max'=>4),
			array('municipio', 'length', 'max'=>30),
			array('ubicacion', 'length', 'max'=>16),
			array('mpio_consulado, sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tipo_pais_id, tipo_dpto_id, tipo_mpio_id, municipio, ubicacion, mpio_consulado, sw_estado, fecha_registro', 'safe', 'on'=>'search'),
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
			'datosPersonalesHvs' => array(self::HAS_MANY, 'DatosPersonalesHv', 'lugar_nacimiento'),
			'datosPersonalesHvs1' => array(self::HAS_MANY, 'DatosPersonalesHv', 'lugar_residencia'),
			'empresases' => array(self::HAS_MANY, 'Empresas', 'ciudad'),
			'entidadesSeguridadSocials' => array(self::HAS_MANY, 'EntidadesSeguridadSocial', 'sede'),
			'hojaDeVidas' => array(self::HAS_MANY, 'HojaDeVida', 'lugar_expedicion'),
			'tipoUniversidadesUbicaciones' => array(self::HAS_MANY, 'TipoUniversidadesUbicaciones', 'ubicacion'),
			'contratoEmpleadoses' => array(self::HAS_MANY, 'ContratoEmpleados', 'ciudad_celebracion'),
			'contratoEmpleadoses1' => array(self::HAS_MANY, 'ContratoEmpleados', 'ciudad_contratado'),
			'contratoEmpleadoses2' => array(self::HAS_MANY, 'ContratoEmpleados', 'ciudad_desempenho'),
			'tipoPais' => array(self::BELONGS_TO, 'TipoDptos', 'tipo_pais_id'),
			'tipoDpto' => array(self::BELONGS_TO, 'TipoDptos', 'tipo_dpto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipo_pais_id' => 'Tipo Pais',
			'tipo_dpto_id' => 'Tipo Dpto',
			'tipo_mpio_id' => 'Tipo Mpio',
			'municipio' => 'Municipio',
			'ubicacion' => 'Ubicacion',
			'mpio_consulado' => 'Mpio Consulado',
			'sw_estado' => 'Sw Estado',
			'fecha_registro' => 'Fecha Registro',
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
		$criteria->compare('tipo_dpto_id',$this->tipo_dpto_id,true);
		$criteria->compare('tipo_mpio_id',$this->tipo_mpio_id,true);
		$criteria->compare('municipio',$this->municipio,true);
		$criteria->compare('ubicacion',$this->ubicacion,true);
		$criteria->compare('mpio_consulado',$this->mpio_consulado,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoMpios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
