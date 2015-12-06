<?php

/**
 * This is the model class for table "tipo_graficos_estadistica".
 *
 * The followings are the available columns in table 'tipo_graficos_estadistica':
 * @property integer $grafico_id
 * @property string $grafico
 * @property string $descripcion_completa
 * @property string $icon
 * @property string $sw_default
 * @property string $sw_estado
 * @property integer $user_id
 * @property string $fecha_registro
 *
 * The followings are the available model relations:
 * @property SystemUsuarios $user
 */
class TipoGraficosEstadistica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_graficos_estadistica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('grafico, descripcion_completa, icon, user_id, fecha_registro', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('grafico, icon', 'length', 'max'=>32),
			array('descripcion_completa', 'length', 'max'=>128),
			array('sw_default, sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('grafico_id, grafico, descripcion_completa, icon, sw_default, sw_estado, user_id, fecha_registro', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'grafico_id' => 'Grafico',
			'grafico' => 'Grafico',
			'descripcion_completa' => 'Descripcion Completa',
			'icon' => 'Icon',
			'sw_default' => 'Sw Default',
			'sw_estado' => 'Sw Estado',
			'user_id' => 'User',
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

		$criteria->compare('grafico_id',$this->grafico_id);
		$criteria->compare('grafico',$this->grafico,true);
		$criteria->compare('descripcion_completa',$this->descripcion_completa,true);
		$criteria->compare('icon',$this->icon,true);
		$criteria->compare('sw_default',$this->sw_default,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoGraficosEstadistica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
