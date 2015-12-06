<?php

/**
 * This is the model class for table "elementos_visualizacion_estadistica".
 *
 * The followings are the available columns in table 'elementos_visualizacion_estadistica':
 * @property integer $elemento_id
 * @property string $elemento
 * @property string $tabla_raiz
 * @property string $campo_tabla_raiz
 * @property string $tabla_parametros_visualizacion
 * @property string $parametro_consulta
 * @property string $parametro_visualizacion
 * @property string $rango_valores
 * @property string $sw_estado
 * @property integer $user_id
 * @property string $fecha_registro
 *
 * The followings are the available model relations:
 * @property SystemUsuarios $user
 */
class ElementosVisualizacionEstadistica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'elementos_visualizacion_estadistica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('elemento, tabla_raiz, campo_tabla_raiz, sw_estado, user_id, fecha_registro', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('elemento', 'length', 'max'=>64),
			array('tabla_raiz, tabla_parametros_visualizacion, rango_valores', 'length', 'max'=>128),
			array('campo_tabla_raiz, parametro_consulta, parametro_visualizacion', 'length', 'max'=>32),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('elemento_id, elemento, tabla_raiz, campo_tabla_raiz, tabla_parametros_visualizacion, parametro_consulta, parametro_visualizacion, rango_valores, sw_estado, user_id, fecha_registro', 'safe', 'on'=>'search'),
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
			'elemento_id' => 'Elemento',
			'elemento' => 'Elemento',
			'tabla_raiz' => 'Tabla Raiz',
			'campo_tabla_raiz' => 'Campo Tabla Raiz',
			'tabla_parametros_visualizacion' => 'Tabla Parametros Visualizacion',
			'parametro_consulta' => 'Parametro Consulta',
			'parametro_visualizacion' => 'Parametro Visualizacion',
			'rango_valores' => 'Rango Valores',
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

		$criteria->compare('elemento_id',$this->elemento_id);
		$criteria->compare('elemento',$this->elemento,true);
		$criteria->compare('tabla_raiz',$this->tabla_raiz,true);
		$criteria->compare('campo_tabla_raiz',$this->campo_tabla_raiz,true);
		$criteria->compare('tabla_parametros_visualizacion',$this->tabla_parametros_visualizacion,true);
		$criteria->compare('parametro_consulta',$this->parametro_consulta,true);
		$criteria->compare('parametro_visualizacion',$this->parametro_visualizacion,true);
		$criteria->compare('rango_valores',$this->rango_valores,true);
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
	 * @return ElementosVisualizacionEstadistica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
