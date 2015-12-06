<?php

/**
 * This is the model class for table "historial_datos_perfil".
 *
 * The followings are the available columns in table 'historial_datos_perfil':
 * @property integer $historial_perfil_id
 * @property integer $dato_perfil_id
 * @property integer $usuario
 * @property string $fecha
 * @property integer $componente_id
 * @property string $cargo_id
 * @property integer $registro_perfil
 *
 * The followings are the available model relations:
 * @property CargosEmpresa $cargo
 * @property TiposComponentesPerfil $componente
 * @property SystemUsuarios $usuario0
 */
class HistorialDatosPerfil extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'historial_datos_perfil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dato_perfil_id, usuario, fecha, componente_id, cargo_id', 'required'),
			array('dato_perfil_id, usuario, componente_id, registro_perfil', 'numerical', 'integerOnly'=>true),
			array('cargo_id', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('historial_perfil_id, dato_perfil_id, usuario, fecha, componente_id, cargo_id, registro_perfil', 'safe', 'on'=>'search'),
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
			'componente' => array(self::BELONGS_TO, 'TiposComponentesPerfil', 'componente_id'),
			'usuario0' => array(self::BELONGS_TO, 'SystemUsuarios', 'usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'historial_perfil_id' => 'Historial Perfil',
			'dato_perfil_id' => 'Dato Perfil',
			'usuario' => 'Usuario',
			'fecha' => 'Fecha',
			'componente_id' => 'Componente',
			'cargo_id' => 'Cargo',
			'registro_perfil' => 'Registro Perfil',
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

		$criteria->compare('historial_perfil_id',$this->historial_perfil_id);
		$criteria->compare('dato_perfil_id',$this->dato_perfil_id);
		$criteria->compare('usuario',$this->usuario);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('componente_id',$this->componente_id);
		$criteria->compare('cargo_id',$this->cargo_id,true);
		$criteria->compare('registro_perfil',$this->registro_perfil);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HistorialDatosPerfil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
