<?php

/**
 * This is the model class for table "tipo_universidades".
 *
 * The followings are the available columns in table 'tipo_universidades':
 * @property integer $id_universidad
 * @property string $codigo_universidad
 * @property string $universidad
 * @property string $sw_estado
 * @property string $fecha_registro
 *
 * The followings are the available model relations:
 * @property FormacionAcademicaHv[] $formacionAcademicaHvs
 * @property TipoUniversidadesUbicaciones[] $tipoUniversidadesUbicaciones
 */
class TipoUniversidades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_universidades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_universidad, universidad, fecha_registro', 'required'),
			array('codigo_universidad', 'length', 'max'=>8),
			array('universidad', 'length', 'max'=>512),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_universidad, codigo_universidad, universidad, sw_estado, fecha_registro', 'safe', 'on'=>'search'),
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
			'formacionAcademicaHvs' => array(self::HAS_MANY, 'FormacionAcademicaHv', 'tipo_institucion_id'),
			'tipoUniversidadesUbicaciones' => array(self::HAS_MANY, 'TipoUniversidadesUbicaciones', 'id_universidad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_universidad' => 'Id Universidad',
			'codigo_universidad' => 'Codigo Universidad',
			'universidad' => 'Universidad',
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

		$criteria->compare('id_universidad',$this->id_universidad);
		$criteria->compare('codigo_universidad',$this->codigo_universidad,true);
		$criteria->compare('universidad',$this->universidad,true);
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
	 * @return TipoUniversidades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
