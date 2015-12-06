<?php

/**
 * This is the model class for table "tipos_documentos_sistema_cargos".
 *
 * The followings are the available columns in table 'tipos_documentos_sistema_cargos':
 * @property integer $documento_cargo_id
 * @property integer $tipo_documento_id
 * @property string $cargo_id
 * @property integer $user_registra
 * @property string $fecha_registro
 * @property string $sw_estado
 * @property string $sw_vinculacion
 * @property string $sw_requisito_contratacion
 *
 * The followings are the available model relations:
 * @property CargosEmpresa $cargo
 * @property TipoDocumentosSistema $tipoDocumento
 * @property SystemUsuarios $userRegistra
 */
class TiposDocumentosSistemaCargos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipos_documentos_sistema_cargos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_documento_id, cargo_id, user_registra, fecha_registro, sw_estado', 'required'),
			array('tipo_documento_id, user_registra', 'numerical', 'integerOnly'=>true),
			array('cargo_id', 'length', 'max'=>6),
			array('sw_estado, sw_vinculacion, sw_requisito_contratacion', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('documento_cargo_id, tipo_documento_id, cargo_id, user_registra, fecha_registro, sw_estado, sw_vinculacion, sw_requisito_contratacion', 'safe', 'on'=>'search'),
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
			'tipoDocumento' => array(self::BELONGS_TO, 'TipoDocumentosSistema', 'tipo_documento_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'documento_cargo_id' => 'Documento Cargo',
			'tipo_documento_id' => 'Tipo Documento',
			'cargo_id' => 'Cargo',
			'user_registra' => 'User Registra',
			'fecha_registro' => 'Fecha Registro',
			'sw_estado' => 'Sw Estado',
			'sw_vinculacion' => 'Sw Vinculacion',
			'sw_requisito_contratacion' => 'Sw Requisito Contratacion',
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

		$criteria->compare('documento_cargo_id',$this->documento_cargo_id);
		$criteria->compare('tipo_documento_id',$this->tipo_documento_id);
		$criteria->compare('cargo_id',$this->cargo_id,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('sw_vinculacion',$this->sw_vinculacion,true);
		$criteria->compare('sw_requisito_contratacion',$this->sw_requisito_contratacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TiposDocumentosSistemaCargos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
