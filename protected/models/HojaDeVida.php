<?php

/**
 * This is the model class for table "hoja_de_vida".
 *
 * The followings are the available columns in table 'hoja_de_vida':
 * @property integer $hv_id
 * @property integer $empresa_id
 * @property string $lugar_expedicion
 * @property string $fecha_inscripcion
 * @property integer $acceso_id
 * @property integer $estado_id
 * @property string $tipo_documento_id
 * @property string $documento_id
 * @property string $fecha_actualizacion
 * @property integer $user_id_valido
 * @property string $fecha_validacion
 * @property integer $user_id_clasifico
 * @property string $fecha_clasificacion
 * @property string $fecha_expedicion_documento
 * @property integer $user_id_inactivo
 * @property string $fecha_inactivacion
 *
 * The followings are the available model relations:
 * @property Bachillerato[] $bachilleratos
 * @property ClasificacionHv[] $clasificacionHvs
 * @property ClasificacionHvTemp[] $clasificacionHvTemps
 * @property DatosFamiliaresHv[] $datosFamiliaresHvs
 * @property DocumentosHv[] $documentosHvs
 * @property DatosPersonalesHv[] $datosPersonalesHvs
 * @property DatosPersonalesHv[] $datosPersonalesHvs1
 * @property DatosPersonalesHv[] $datosPersonalesHvs2
 * @property ExpectativaLaboralHv[] $expectativaLaboralHvs
 * @property FamiliaridadInterna[] $familiaridadInternas
 * @property FormacionAcademicaHv[] $formacionAcademicaHvs
 * @property FormacionComplementariaHv[] $formacionComplementariaHvs
 * @property IdiomaAspirante[] $idiomaAspirantes
 * @property ExperienciaLaboralHv[] $experienciaLaboralHvs
 * @property Aspirantes[] $aspirantes
 * @property AccesoHojaDeVida $acceso
 * @property Empresas $empresa
 * @property EstadosHojaDeVida $estado
 * @property TipoMpios $lugarExpedicion
 * @property SystemUsuarios $userIdClasifico
 * @property SystemUsuarios $userIdInactivo
 * @property SystemUsuarios $userIdValido
 * @property Empleados[] $empleadoses
 * @property Empleados[] $empleadoses1
 * @property Empleados[] $empleadoses2
 */
class HojaDeVida extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hoja_de_vida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_id, lugar_expedicion, fecha_inscripcion, acceso_id, estado_id, tipo_documento_id, documento_id', 'required'),
			array('empresa_id, acceso_id, estado_id, user_id_valido, user_id_clasifico, user_id_inactivo', 'numerical', 'integerOnly'=>true),
			array('lugar_expedicion', 'length', 'max'=>16),
			array('tipo_documento_id', 'length', 'max'=>3),
			array('documento_id', 'length', 'max'=>32),
			array('fecha_actualizacion, fecha_validacion, fecha_clasificacion, fecha_expedicion_documento, fecha_inactivacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('hv_id, empresa_id, lugar_expedicion, fecha_inscripcion, acceso_id, estado_id, tipo_documento_id, documento_id, fecha_actualizacion, user_id_valido, fecha_validacion, user_id_clasifico, fecha_clasificacion, fecha_expedicion_documento, user_id_inactivo, fecha_inactivacion', 'safe', 'on'=>'search'),
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
			'bachilleratos' => array(self::HAS_MANY, 'Bachillerato', 'hv_id'),
			'clasificacionHvs' => array(self::HAS_MANY, 'ClasificacionHv', 'hv_id'),
			'clasificacionHvTemps' => array(self::HAS_MANY, 'ClasificacionHvTemp', 'hv_id'),
			'datosFamiliaresHvs' => array(self::HAS_MANY, 'DatosFamiliaresHv', 'hv_id'),
			'documentosHvs' => array(self::HAS_MANY, 'DocumentosHv', 'hv_id'),
			'datosPersonalesHvs' => array(self::HAS_MANY, 'DatosPersonalesHv', 'hv_id'),
			'datosPersonalesHvs1' => array(self::HAS_MANY, 'DatosPersonalesHv', 'tipo_documento_id'),
			'datosPersonalesHvs2' => array(self::HAS_MANY, 'DatosPersonalesHv', 'documento_id'),
			'expectativaLaboralHvs' => array(self::HAS_MANY, 'ExpectativaLaboralHv', 'hv_id'),
			'familiaridadInternas' => array(self::HAS_MANY, 'FamiliaridadInterna', 'hv_id'),
			'formacionAcademicaHvs' => array(self::HAS_MANY, 'FormacionAcademicaHv', 'hv_id'),
			'formacionComplementariaHvs' => array(self::HAS_MANY, 'FormacionComplementariaHv', 'hv_id'),
			'idiomaAspirantes' => array(self::HAS_MANY, 'IdiomaAspirante', 'hv_id'),
			'experienciaLaboralHvs' => array(self::HAS_MANY, 'ExperienciaLaboralHv', 'hv_id'),
			'aspirantes' => array(self::HAS_MANY, 'Aspirantes', 'hv_id'),
			'acceso' => array(self::BELONGS_TO, 'AccesoHojaDeVida', 'acceso_id'),
			'empresa' => array(self::BELONGS_TO, 'Empresas', 'empresa_id'),
			'estado' => array(self::BELONGS_TO, 'EstadosHojaDeVida', 'estado_id'),
			'lugarExpedicion' => array(self::BELONGS_TO, 'TipoMpios', 'lugar_expedicion'),
			'userIdClasifico' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_id_clasifico'),
			'userIdInactivo' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_id_inactivo'),
			'userIdValido' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_id_valido'),
			'empleadoses' => array(self::HAS_MANY, 'Empleados', 'hv_id'),
			'empleadoses1' => array(self::HAS_MANY, 'Empleados', 'tipo_documento_id'),
			'empleadoses2' => array(self::HAS_MANY, 'Empleados', 'documento_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'hv_id' => 'Hv',
			'empresa_id' => 'Empresa',
			'lugar_expedicion' => 'Lugar Expedicion',
			'fecha_inscripcion' => 'Fecha Inscripcion',
			'acceso_id' => 'Acceso',
			'estado_id' => 'Estado',
			'tipo_documento_id' => 'Tipo Documento',
			'documento_id' => 'Documento',
			'fecha_actualizacion' => 'Fecha Actualizacion',
			'user_id_valido' => 'User Id Valido',
			'fecha_validacion' => 'Fecha Validacion',
			'user_id_clasifico' => 'User Id Clasifico',
			'fecha_clasificacion' => 'Fecha Clasificacion',
			'fecha_expedicion_documento' => 'Fecha Expedicion Documento',
			'user_id_inactivo' => 'User Id Inactivo',
			'fecha_inactivacion' => 'Fecha Inactivacion',
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

		$criteria->compare('hv_id',$this->hv_id);
		$criteria->compare('empresa_id',$this->empresa_id);
		$criteria->compare('lugar_expedicion',$this->lugar_expedicion,true);
		$criteria->compare('fecha_inscripcion',$this->fecha_inscripcion,true);
		$criteria->compare('acceso_id',$this->acceso_id);
		$criteria->compare('estado_id',$this->estado_id);
		$criteria->compare('tipo_documento_id',$this->tipo_documento_id,true);
		$criteria->compare('documento_id',$this->documento_id,true);
		$criteria->compare('fecha_actualizacion',$this->fecha_actualizacion,true);
		$criteria->compare('user_id_valido',$this->user_id_valido);
		$criteria->compare('fecha_validacion',$this->fecha_validacion,true);
		$criteria->compare('user_id_clasifico',$this->user_id_clasifico);
		$criteria->compare('fecha_clasificacion',$this->fecha_clasificacion,true);
		$criteria->compare('fecha_expedicion_documento',$this->fecha_expedicion_documento,true);
		$criteria->compare('user_id_inactivo',$this->user_id_inactivo);
		$criteria->compare('fecha_inactivacion',$this->fecha_inactivacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HojaDeVida the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
