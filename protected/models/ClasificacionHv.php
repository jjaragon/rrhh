<?php

/**
 * This is the model class for table "clasificacion_hv".
 *
 * The followings are the available columns in table 'clasificacion_hv':
 * @property integer $clasificacion_id
 * @property integer $hv_id
 * @property string $cargo_id
 * @property string $fecha_clasificacion
 * @property string $sw_estado
 * @property string $tipo_clasificacion
 *
 * The followings are the available model relations:
 * @property CargosEmpresa $cargo
 * @property HojaDeVida $hv
 */
class ClasificacionHv extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clasificacion_hv';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hv_id, cargo_id, fecha_clasificacion', 'required'),
			array('hv_id', 'numerical', 'integerOnly'=>true),
			array('cargo_id', 'length', 'max'=>6),
			array('sw_estado, tipo_clasificacion', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('clasificacion_id, hv_id, cargo_id, fecha_clasificacion, sw_estado, tipo_clasificacion', 'safe', 'on'=>'search'),
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
			'hv' => array(self::BELONGS_TO, 'HojaDeVida', 'hv_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'clasificacion_id' => 'Clasificacion',
			'hv_id' => 'Hv',
			'cargo_id' => 'Cargo',
			'fecha_clasificacion' => 'Fecha Clasificacion',
			'sw_estado' => 'Sw Estado',
			'tipo_clasificacion' => 'Tipo Clasificacion',
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

		$criteria->compare('clasificacion_id',$this->clasificacion_id);
		$criteria->compare('hv_id',$this->hv_id);
		$criteria->compare('cargo_id',$this->cargo_id,true);
		$criteria->compare('fecha_clasificacion',$this->fecha_clasificacion,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('tipo_clasificacion',$this->tipo_clasificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ClasificacionHv the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
