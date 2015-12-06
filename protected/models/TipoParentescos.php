<?php

/**
 * This is the model class for table "tipo_parentescos".
 *
 * The followings are the available columns in table 'tipo_parentescos':
 * @property integer $tipo_parentesco_id
 * @property string $descripcion
 * @property string $sw_estado
 * @property string $fecha_registro
 *
 * The followings are the available model relations:
 * @property DatosFamiliaresHv[] $datosFamiliaresHvs
 * @property FamiliaridadInterna[] $familiaridadInternas
 */
class TipoParentescos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_parentescos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, sw_estado, fecha_registro', 'required'),
			array('descripcion', 'length', 'max'=>32),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tipo_parentesco_id, descripcion, sw_estado, fecha_registro', 'safe', 'on'=>'search'),
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
			'datosFamiliaresHvs' => array(self::HAS_MANY, 'DatosFamiliaresHv', 'tipo_parentesco_id'),
			'familiaridadInternas' => array(self::HAS_MANY, 'FamiliaridadInterna', 'parentesco'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipo_parentesco_id' => 'Tipo Parentesco',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('tipo_parentesco_id',$this->tipo_parentesco_id);
		$criteria->compare('descripcion',$this->descripcion,true);
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
	 * @return TipoParentescos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
