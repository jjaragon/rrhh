<?php

/**
 * This is the model class for table "tipos_documentos_sistema_usuarios".
 *
 * The followings are the available columns in table 'tipos_documentos_sistema_usuarios':
 * @property integer $relacion_id
 * @property integer $documento_id
 * @property integer $user_id
 * @property integer $user_registra
 * @property string $sw_estado
 * @property string $fecha_registro
 *
 * The followings are the available model relations:
 * @property TipoDocumentosSistema $documento
 * @property SystemUsuarios $user
 * @property SystemUsuarios $userRegistra
 */
class TiposDocumentosSistemaUsuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipos_documentos_sistema_usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('documento_id, user_id, user_registra, fecha_registro', 'required'),
			array('documento_id, user_id, user_registra', 'numerical', 'integerOnly'=>true),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('relacion_id, documento_id, user_id, user_registra, sw_estado, fecha_registro', 'safe', 'on'=>'search'),
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
			'documento' => array(self::BELONGS_TO, 'TipoDocumentosSistema', 'documento_id'),
			'user' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'relacion_id' => 'Relacion',
			'documento_id' => 'Documento',
			'user_id' => 'User',
			'user_registra' => 'User Registra',
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

		$criteria->compare('relacion_id',$this->relacion_id);
		$criteria->compare('documento_id',$this->documento_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_registra',$this->user_registra);
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
	 * @return TiposDocumentosSistemaUsuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
