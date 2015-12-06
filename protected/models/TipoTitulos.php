<?php

/**
 * This is the model class for table "tipo_titulos".
 *
 * The followings are the available columns in table 'tipo_titulos':
 * @property integer $titulo_id
 * @property integer $nivel_academico
 * @property integer $nivel_formacion
 * @property string $titulo_otorgado
 * @property string $sw_registro
 * @property string $sw_estado
 * @property string $fecha_registro
 * @property string $sw_tarjeta_profesional
 *
 * The followings are the available model relations:
 * @property FormacionAcademicaHv[] $formacionAcademicaHvs
 * @property NivelesAcademicos $nivelAcademico
 * @property ClasificacionAcademica $nivelFormacion
 */
class TipoTitulos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_titulos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nivel_academico, nivel_formacion, titulo_otorgado, sw_registro, fecha_registro', 'required'),
			array('nivel_academico, nivel_formacion', 'numerical', 'integerOnly'=>true),
			array('titulo_otorgado', 'length', 'max'=>512),
			array('sw_registro, sw_tarjeta_profesional', 'length', 'max'=>1),
			array('sw_estado', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('titulo_id, nivel_academico, nivel_formacion, titulo_otorgado, sw_registro, sw_estado, fecha_registro, sw_tarjeta_profesional', 'safe', 'on'=>'search'),
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
			'formacionAcademicaHvs' => array(self::HAS_MANY, 'FormacionAcademicaHv', 'titulo_id'),
			'nivelAcademico' => array(self::BELONGS_TO, 'NivelesAcademicos', 'nivel_academico'),
			'nivelFormacion' => array(self::BELONGS_TO, 'ClasificacionAcademica', 'nivel_formacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'titulo_id' => 'Titulo',
			'nivel_academico' => 'Nivel Academico',
			'nivel_formacion' => 'Nivel Formacion',
			'titulo_otorgado' => 'Titulo Otorgado',
			'sw_registro' => 'Sw Registro',
			'sw_estado' => 'Sw Estado',
			'fecha_registro' => 'Fecha Registro',
			'sw_tarjeta_profesional' => 'Sw Tarjeta Profesional',
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

		$criteria->compare('titulo_id',$this->titulo_id);
		$criteria->compare('nivel_academico',$this->nivel_academico);
		$criteria->compare('nivel_formacion',$this->nivel_formacion);
		$criteria->compare('titulo_otorgado',$this->titulo_otorgado,true);
		$criteria->compare('sw_registro',$this->sw_registro,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('sw_tarjeta_profesional',$this->sw_tarjeta_profesional,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoTitulos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
