<?php

/**
 * This is the model class for table "anexo_contrato_temp".
 *
 * The followings are the available columns in table 'anexo_contrato_temp':
 * @property integer $anexo_id
 * @property integer $empleado_id
 * @property string $ruta
 * @property string $fecha_registro
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property Empleados $empleado
 * @property SystemUsuarios $user
 */
class AnexoContratoTemp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'anexo_contrato_temp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empleado_id, ruta, fecha_registro, user_id', 'required'),
			array('empleado_id, user_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('anexo_id, empleado_id, ruta, fecha_registro, user_id', 'safe', 'on'=>'search'),
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
			'empleado' => array(self::BELONGS_TO, 'Empleados', 'empleado_id'),
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
			'empleado_id' => 'Empleado',
			'ruta' => 'Ruta',
			'fecha_registro' => 'Fecha Registro',
			'user_id' => 'User',
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
		$criteria->compare('empleado_id',$this->empleado_id);
		$criteria->compare('ruta',$this->ruta,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AnexoContratoTemp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
