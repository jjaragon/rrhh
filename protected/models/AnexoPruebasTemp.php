<?php

/**
 * This is the model class for table "anexo_pruebas_temp".
 *
 * The followings are the available columns in table 'anexo_pruebas_temp':
 * @property integer $anexo_id
 * @property integer $aspirante_id
 * @property integer $convocatoria_id
 * @property string $etapa
 * @property string $ruta
 * @property integer $user_id
 * @property string $fecha_registro
 * @property integer $aplicacion_id
 *
 * The followings are the available model relations:
 * @property Aspirantes $aspirante
 * @property Convocatorias $convocatoria
 * @property ProgramacionPruebasAspirantes $aplicacion
 * @property SystemUsuarios $user
 */
class AnexoPruebasTemp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'anexo_pruebas_temp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('aspirante_id, convocatoria_id, etapa, ruta, user_id, fecha_registro, aplicacion_id', 'required'),
			array('aspirante_id, convocatoria_id, user_id, aplicacion_id', 'numerical', 'integerOnly'=>true),
			array('etapa', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('anexo_id, aspirante_id, convocatoria_id, etapa, ruta, user_id, fecha_registro, aplicacion_id', 'safe', 'on'=>'search'),
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
			'aspirante' => array(self::BELONGS_TO, 'Aspirantes', 'aspirante_id'),
			'convocatoria' => array(self::BELONGS_TO, 'Convocatorias', 'convocatoria_id'),
			'aplicacion' => array(self::BELONGS_TO, 'ProgramacionPruebasAspirantes', 'aplicacion_id'),
			'user' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'anexo_id' => 'Anexo',
			'aspirante_id' => 'Aspirante',
			'convocatoria_id' => 'Convocatoria',
			'etapa' => 'Etapa',
			'ruta' => 'Ruta',
			'user_id' => 'User',
			'fecha_registro' => 'Fecha Registro',
			'aplicacion_id' => 'Aplicacion',
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

		$criteria->compare('anexo_id',$this->anexo_id);
		$criteria->compare('aspirante_id',$this->aspirante_id);
		$criteria->compare('convocatoria_id',$this->convocatoria_id);
		$criteria->compare('etapa',$this->etapa,true);
		$criteria->compare('ruta',$this->ruta,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('aplicacion_id',$this->aplicacion_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AnexoPruebasTemp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
