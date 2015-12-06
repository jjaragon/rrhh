<?php

/**
 * This is the model class for table "datos_familiares_hv".
 *
 * The followings are the available columns in table 'datos_familiares_hv':
 * @property integer $datos_familiares_id
 * @property integer $hv_id
 * @property string $tipo_documento_id
 * @property string $documento_id
 * @property string $nombres
 * @property string $apellidos
 * @property string $fecha_nacimiento
 * @property integer $tipo_parentesco_id
 * @property string $fecha_registro
 * @property string $vivo
 * @property string $sw_actual
 *
 * The followings are the available model relations:
 * @property BeneficiariosSeguridadSocial[] $beneficiariosSeguridadSocials
 * @property HojaDeVida $hv
 * @property TipoParentescos $tipoParentesco
 */
class DatosFamiliaresHv extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'datos_familiares_hv';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hv_id, nombres, apellidos, fecha_nacimiento, tipo_parentesco_id', 'required'),
			array('hv_id, tipo_parentesco_id', 'numerical', 'integerOnly'=>true),
			array('tipo_documento_id', 'length', 'max'=>3),
			array('documento_id', 'length', 'max'=>32),
			array('nombres, apellidos', 'length', 'max'=>128),
			array('vivo, sw_actual', 'length', 'max'=>1),
			array('fecha_registro', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('datos_familiares_id, hv_id, tipo_documento_id, documento_id, nombres, apellidos, fecha_nacimiento, tipo_parentesco_id, fecha_registro, vivo, sw_actual', 'safe', 'on'=>'search'),
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
			'beneficiariosSeguridadSocials' => array(self::HAS_MANY, 'BeneficiariosSeguridadSocial', 'datos_familiares_id'),
			'hv' => array(self::BELONGS_TO, 'HojaDeVida', 'hv_id'),
			'tipoParentesco' => array(self::BELONGS_TO, 'TipoParentescos', 'tipo_parentesco_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'datos_familiares_id' => 'Datos Familiares',
			'hv_id' => 'Hv',
			'tipo_documento_id' => 'Tipo Documento',
			'documento_id' => 'Documento',
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'tipo_parentesco_id' => 'Tipo Parentesco',
			'fecha_registro' => 'Fecha Registro',
			'vivo' => 'Vivo',
			'sw_actual' => 'Sw Actual',
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

		$criteria->compare('datos_familiares_id',$this->datos_familiares_id);
		$criteria->compare('hv_id',$this->hv_id);
		$criteria->compare('tipo_documento_id',$this->tipo_documento_id,true);
		$criteria->compare('documento_id',$this->documento_id,true);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('tipo_parentesco_id',$this->tipo_parentesco_id);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('vivo',$this->vivo,true);
		$criteria->compare('sw_actual',$this->sw_actual,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DatosFamiliaresHv the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
