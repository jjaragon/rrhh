<?php

/**
 * This is the model class for table "tipo_documentos_sistema".
 *
 * The followings are the available columns in table 'tipo_documentos_sistema':
 * @property integer $tipo_documento_id
 * @property string $nombre
 * @property string $descripcion_completa
 * @property string $sw_estado
 * @property string $fecha_registro
 * @property integer $user_registra
 * @property string $sw_plantilla
 * @property string $sw_cargos
 * @property string $fecha_actualizacion
 * @property integer $grupo_id
 * @property integer $sw_tipo_documento
 * @property string $sw_anexo
 *
 * The followings are the available model relations:
 * @property ListaDocumentosVinculacion[] $listaDocumentosVinculacions
 * @property PlantillasDocumentos[] $plantillasDocumentoses
 * @property TiposDocumentosSistemaCargos[] $tiposDocumentosSistemaCargoses
 * @property GruposDocumentosSistema $grupo
 * @property ClasificacionDocumentos $swTipoDocumento
 * @property SystemUsuarios $userRegistra
 * @property TiposDocumentosSistemaUsuarios[] $tiposDocumentosSistemaUsuarioses
 */
class TipoDocumentosSistema extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_documentos_sistema';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, descripcion_completa, fecha_registro, user_registra, fecha_actualizacion, grupo_id, sw_tipo_documento', 'required'),
			array('user_registra, grupo_id, sw_tipo_documento', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>128),
			array('descripcion_completa', 'length', 'max'=>256),
			array('sw_estado, sw_plantilla, sw_cargos, sw_anexo', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tipo_documento_id, nombre, descripcion_completa, sw_estado, fecha_registro, user_registra, sw_plantilla, sw_cargos, fecha_actualizacion, grupo_id, sw_tipo_documento, sw_anexo', 'safe', 'on'=>'search'),
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
			'listaDocumentosVinculacions' => array(self::HAS_MANY, 'ListaDocumentosVinculacion', 'tipo_documento_id'),
			'plantillasDocumentoses' => array(self::HAS_MANY, 'PlantillasDocumentos', 'tipo_documento_id'),
			'tiposDocumentosSistemaCargoses' => array(self::HAS_MANY, 'TiposDocumentosSistemaCargos', 'tipo_documento_id'),
			'grupo' => array(self::BELONGS_TO, 'GruposDocumentosSistema', 'grupo_id'),
			'swTipoDocumento' => array(self::BELONGS_TO, 'ClasificacionDocumentos', 'sw_tipo_documento'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
			'tiposDocumentosSistemaUsuarioses' => array(self::HAS_MANY, 'TiposDocumentosSistemaUsuarios', 'documento_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipo_documento_id' => 'Tipo Documento',
			'nombre' => 'Nombre',
			'descripcion_completa' => 'Descripcion Completa',
			'sw_estado' => 'Sw Estado',
			'fecha_registro' => 'Fecha Registro',
			'user_registra' => 'User Registra',
			'sw_plantilla' => 'Sw Plantilla',
			'sw_cargos' => 'Sw Cargos',
			'fecha_actualizacion' => 'Fecha Actualizacion',
			'grupo_id' => 'Grupo',
			'sw_tipo_documento' => 'Sw Tipo Documento',
			'sw_anexo' => 'Sw Anexo',
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

		$criteria->compare('tipo_documento_id',$this->tipo_documento_id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion_completa',$this->descripcion_completa,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('sw_plantilla',$this->sw_plantilla,true);
		$criteria->compare('sw_cargos',$this->sw_cargos,true);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('grupo_id',$this->grupo_id);
		$criteria->compare('sw_tipo_documento',$this->sw_tipo_documento);
		$criteria->compare('sw_anexo',$this->sw_anexo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoDocumentosSistema the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
