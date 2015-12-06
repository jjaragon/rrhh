<?php

/**
 * This is the model class for table "dato_perfil_cargo_temp".
 *
 * The followings are the available columns in table 'dato_perfil_cargo_temp':
 * @property integer $item_id
 * @property integer $registro
 * @property integer $componente_id
 * @property integer $campo_id
 * @property string $cargo_id
 * @property string $contenido
 * @property integer $registro_perfil
 * @property integer $especificacion_id
 * @property string $sw_aplica
 *
 * The followings are the available model relations:
 * @property CampoComponente $campo
 * @property CargosEmpresa $cargo
 * @property TiposComponentesPerfil $componente
 * @property EspecificacionesNivelesRequeridosCompetencias $especificacion
 */
class DatoPerfilCargoTemp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dato_perfil_cargo_temp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('registro, componente_id, campo_id, cargo_id, contenido, registro_perfil', 'required'),
			array('registro, componente_id, campo_id, registro_perfil, especificacion_id', 'numerical', 'integerOnly'=>true),
			array('cargo_id', 'length', 'max'=>16),
			array('sw_aplica', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('item_id, registro, componente_id, campo_id, cargo_id, contenido, registro_perfil, especificacion_id, sw_aplica', 'safe', 'on'=>'search'),
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
			'campo' => array(self::BELONGS_TO, 'CampoComponente', 'campo_id'),
			'cargo' => array(self::BELONGS_TO, 'CargosEmpresa', 'cargo_id'),
			'componente' => array(self::BELONGS_TO, 'TiposComponentesPerfil', 'componente_id'),
			'especificacion' => array(self::BELONGS_TO, 'EspecificacionesNivelesRequeridosCompetencias', 'especificacion_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'item_id' => 'Item',
			'registro' => 'Registro',
			'componente_id' => 'Componente',
			'campo_id' => 'Campo',
			'cargo_id' => 'Cargo',
			'contenido' => 'Contenido',
			'registro_perfil' => 'Registro Perfil',
			'especificacion_id' => 'Especificacion',
			'sw_aplica' => 'Sw Aplica',
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

		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('registro',$this->registro);
		$criteria->compare('componente_id',$this->componente_id);
		$criteria->compare('campo_id',$this->campo_id);
		$criteria->compare('cargo_id',$this->cargo_id,true);
		$criteria->compare('contenido',$this->contenido,true);
		$criteria->compare('registro_perfil',$this->registro_perfil);
		$criteria->compare('especificacion_id',$this->especificacion_id);
		$criteria->compare('sw_aplica',$this->sw_aplica,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DatoPerfilCargoTemp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
