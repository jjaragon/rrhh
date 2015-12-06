<?php

/**
 * This is the model class for table "tipo_universidades_ubicaciones".
 *
 * The followings are the available columns in table 'tipo_universidades_ubicaciones':
 * @property integer $ubicacion_id
 * @property integer $id_universidad
 * @property string $direccion
 * @property string $receptor_comunicaciones
 * @property string $cargo_receptor_comunicaciones
 * @property string $telefonos
 * @property string $ubicacion
 * @property string $sw_estado
 * @property string $fecha_registro
 * @property integer $user_registra
 *
 * The followings are the available model relations:
 * @property TipoUniversidades $idUniversidad
 * @property TipoMpios $ubicacion0
 * @property SystemUsuarios $userRegistra
 */
class TipoUniversidadesUbicaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_universidades_ubicaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_universidad, direccion, receptor_comunicaciones, cargo_receptor_comunicaciones, telefonos, ubicacion, fecha_registro, user_registra', 'required'),
			array('id_universidad, user_registra', 'numerical', 'integerOnly'=>true),
			array('ubicacion', 'length', 'max'=>16),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ubicacion_id, id_universidad, direccion, receptor_comunicaciones, cargo_receptor_comunicaciones, telefonos, ubicacion, sw_estado, fecha_registro, user_registra', 'safe', 'on'=>'search'),
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
			'idUniversidad' => array(self::BELONGS_TO, 'TipoUniversidades', 'id_universidad'),
			'ubicacion0' => array(self::BELONGS_TO, 'TipoMpios', 'ubicacion'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ubicacion_id' => 'Ubicacion',
			'id_universidad' => 'Id Universidad',
			'direccion' => 'Direccion',
			'receptor_comunicaciones' => 'Receptor Comunicaciones',
			'cargo_receptor_comunicaciones' => 'Cargo Receptor Comunicaciones',
			'telefonos' => 'Telefonos',
			'ubicacion' => 'Ubicacion',
			'sw_estado' => 'Sw Estado',
			'fecha_registro' => 'Fecha Registro',
			'user_registra' => 'User Registra',
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

		$criteria->compare('ubicacion_id',$this->ubicacion_id);
		$criteria->compare('id_universidad',$this->id_universidad);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('receptor_comunicaciones',$this->receptor_comunicaciones,true);
		$criteria->compare('cargo_receptor_comunicaciones',$this->cargo_receptor_comunicaciones,true);
		$criteria->compare('telefonos',$this->telefonos,true);
		$criteria->compare('ubicacion',$this->ubicacion,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('user_registra',$this->user_registra);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoUniversidadesUbicaciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
