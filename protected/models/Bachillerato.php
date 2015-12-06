<?php

/**
 * This is the model class for table "bachillerato".
 *
 * The followings are the available columns in table 'bachillerato':
 * @property integer $bachillerato_id
 * @property integer $hv_id
 * @property string $titulo
 * @property string $ciudad
 * @property string $institucion
 * @property string $fecha_finalizacion
 *
 * The followings are the available model relations:
 * @property HojaDeVida $hv
 */
class Bachillerato extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bachillerato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hv_id, titulo, ciudad, institucion', 'required'),
			array('hv_id', 'numerical', 'integerOnly'=>true),
			array('titulo, institucion', 'length', 'max'=>512),
			array('ciudad', 'length', 'max'=>16),
			array('fecha_finalizacion', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('bachillerato_id, hv_id, titulo, ciudad, institucion, fecha_finalizacion', 'safe', 'on'=>'search'),
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
			'hv' => array(self::BELONGS_TO, 'HojaDeVida', 'hv_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bachillerato_id' => 'Bachillerato',
			'hv_id' => 'Hv',
			'titulo' => 'Titulo',
			'ciudad' => 'Ciudad',
			'institucion' => 'Institucion',
			'fecha_finalizacion' => 'Fecha Finalizacion',
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

		$criteria->compare('bachillerato_id',$this->bachillerato_id);
		$criteria->compare('hv_id',$this->hv_id);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('institucion',$this->institucion,true);
		$criteria->compare('fecha_finalizacion',$this->fecha_finalizacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bachillerato the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
