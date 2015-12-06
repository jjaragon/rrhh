<?php

/**
 * This is the model class for table "tipo_cargos".
 *
 * The followings are the available columns in table 'tipo_cargos':
 * @property integer $tipo_cargo_id
 * @property string $cargo
 * @property string $sw_estado
 * @property string $fecha_registro
 *
 * The followings are the available model relations:
 * @property ExperienciaLaboralHv[] $experienciaLaboralHvs
 * @property ReferenciacionLaboralAspirante[] $referenciacionLaboralAspirantes
 * @property HomologacionCargosEmpresa[] $homologacionCargosEmpresas
 */
class TipoCargos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_cargos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cargo, fecha_registro', 'required'),
			array('cargo', 'length', 'max'=>512),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tipo_cargo_id, cargo, sw_estado, fecha_registro', 'safe', 'on'=>'search'),
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
			'experienciaLaboralHvs' => array(self::HAS_MANY, 'ExperienciaLaboralHv', 'cargo_id'),
			'referenciacionLaboralAspirantes' => array(self::HAS_MANY, 'ReferenciacionLaboralAspirante', 'tipo_cargo_id'),
			'homologacionCargosEmpresas' => array(self::HAS_MANY, 'HomologacionCargosEmpresa', 'tipo_cargo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipo_cargo_id' => 'Tipo Cargo',
			'cargo' => 'Cargo',
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

		$criteria->compare('tipo_cargo_id',$this->tipo_cargo_id);
		$criteria->compare('cargo',$this->cargo,true);
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
	 * @return TipoCargos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
