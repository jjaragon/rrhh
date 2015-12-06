<?php

/**
 * This is the model class for table "datos_personales_hv".
 *
 * The followings are the available columns in table 'datos_personales_hv':
 * @property integer $datos_personales_id
 * @property integer $hv_id
 * @property string $nombres_completos
 * @property string $apellidos_completos
 * @property string $genero
 * @property integer $estado_civil
 * @property string $lugar_nacimiento
 * @property string $fecha_nacimiento
 * @property string $direccion_residencia
 * @property string $telefono_fijo
 * @property string $telefono_movil
 * @property string $email
 * @property string $libreta_militar
 * @property string $sw_hijos
 * @property integer $cantidad_hijos
 * @property string $familiar_ubicacion
 * @property string $telefono_familiar
 * @property integer $grupo_sanguineo
 * @property string $barrio
 * @property string $lugar_residencia
 * @property integer $dependencia_economica
 * @property string $tipo_documento_id
 * @property string $documento_id
 * @property string $foto
 * @property string $lugar_nacimiento_exterior
 * @property string $sw_padres
 * @property string $sw_hijastros
 * @property string $sw_familiaridad_interna
 * @property string $acepta_terminos_condiciones
 * @property string $fecha_aceptacion_adp
 * @property string $fecha_registro
 * @property string $zona
 * @property integer $etnia
 *
 * The followings are the available model relations:
 * @property TiposEstadoCivil $estadoCivil
 * @property ListaEtnias $etnia0
 * @property GruposSanguineos $grupoSanguineo
 * @property HojaDeVida $hv
 * @property TipoPais $lugarNacimientoExterior
 * @property TipoMpios $lugarNacimiento
 * @property TipoMpios $lugarResidencia
 * @property HojaDeVida $tipoDocumento
 * @property HojaDeVida $documento
 * @property AccesoHojaDeVida $email0
 */
class DatosPersonalesHv extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'datos_personales_hv';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hv_id, nombres_completos, apellidos_completos, genero, fecha_nacimiento, direccion_residencia, lugar_residencia, tipo_documento_id, documento_id, zona, etnia', 'required'),
			array('hv_id, estado_civil, cantidad_hijos, grupo_sanguineo, dependencia_economica, etnia', 'numerical', 'integerOnly'=>true),
			array('nombres_completos, apellidos_completos, direccion_residencia, familiar_ubicacion, barrio', 'length', 'max'=>128),
			array('genero, libreta_militar, sw_hijos, sw_padres, sw_hijastros, acepta_terminos_condiciones, zona', 'length', 'max'=>1),
			array('lugar_nacimiento, lugar_residencia', 'length', 'max'=>16),
			array('tipo_documento_id', 'length', 'max'=>3),
			array('documento_id', 'length', 'max'=>32),
			array('lugar_nacimiento_exterior', 'length', 'max'=>4),
			array('telefono_fijo, telefono_movil, email, telefono_familiar, foto, sw_familiaridad_interna, fecha_aceptacion_adp, fecha_registro', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('datos_personales_id, hv_id, nombres_completos, apellidos_completos, genero, estado_civil, lugar_nacimiento, fecha_nacimiento, direccion_residencia, telefono_fijo, telefono_movil, email, libreta_militar, sw_hijos, cantidad_hijos, familiar_ubicacion, telefono_familiar, grupo_sanguineo, barrio, lugar_residencia, dependencia_economica, tipo_documento_id, documento_id, foto, lugar_nacimiento_exterior, sw_padres, sw_hijastros, sw_familiaridad_interna, acepta_terminos_condiciones, fecha_aceptacion_adp, fecha_registro, zona, etnia', 'safe', 'on'=>'search'),
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
			'estadoCivil' => array(self::BELONGS_TO, 'TiposEstadoCivil', 'estado_civil'),
			'etnia' => array(self::BELONGS_TO, 'ListaEtnias', 'etnia'),
			'grupoSanguineo' => array(self::BELONGS_TO, 'GruposSanguineos', 'grupo_sanguineo'),
			'hv' => array(self::BELONGS_TO, 'HojaDeVida', 'hv_id'),
			'lugarNacimientoExterior' => array(self::BELONGS_TO, 'TipoPais', 'lugar_nacimiento_exterior'),
			'lugarNacimiento' => array(self::BELONGS_TO, 'TipoMpios', 'lugar_nacimiento'),
			'lugarResidencia' => array(self::BELONGS_TO, 'TipoMpios', 'lugar_residencia'),
			'tipoDocumento' => array(self::BELONGS_TO, 'HojaDeVida', 'tipo_documento_id'),
			'documento' => array(self::BELONGS_TO, 'HojaDeVida', 'documento_id'),
			'email' => array(self::BELONGS_TO, 'AccesoHojaDeVida', 'email'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'datos_personales_id' => 'Datos Personales',
			'hv_id' => 'Hv',
			'nombres_completos' => 'Nombres Completos',
			'apellidos_completos' => 'Apellidos Completos',
			'genero' => 'Genero',
			'estado_civil' => 'Estado Civil',
			'lugar_nacimiento' => 'Lugar Nacimiento',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'direccion_residencia' => 'Direccion Residencia',
			'telefono_fijo' => 'Telefono Fijo',
			'telefono_movil' => 'Telefono Movil',
			'email' => 'Email',
			'libreta_militar' => 'Libreta Militar',
			'sw_hijos' => 'Sw Hijos',
			'cantidad_hijos' => 'Cantidad Hijos',
			'familiar_ubicacion' => 'Familiar Ubicacion',
			'telefono_familiar' => 'Telefono Familiar',
			'grupo_sanguineo' => 'Grupo Sanguineo',
			'barrio' => 'Barrio',
			'lugar_residencia' => 'Lugar Residencia',
			'dependencia_economica' => 'Dependencia Economica',
			'tipo_documento_id' => 'Tipo Documento',
			'documento_id' => 'Documento',
			'foto' => 'Foto',
			'lugar_nacimiento_exterior' => 'Lugar Nacimiento Exterior',
			'sw_padres' => 'Sw Padres',
			'sw_hijastros' => 'Sw Hijastros',
			'sw_familiaridad_interna' => 'Sw Familiaridad Interna',
			'acepta_terminos_condiciones' => 'Acepta Terminos Condiciones',
			'fecha_aceptacion_adp' => 'Fecha Aceptacion Adp',
			'fecha_registro' => 'Fecha Registro',
			'zona' => 'Zona',
			'etnia' => 'Etnia',
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

		$criteria->compare('datos_personales_id',$this->datos_personales_id);
		$criteria->compare('hv_id',$this->hv_id);
		$criteria->compare('nombres_completos',$this->nombres_completos,true);
		$criteria->compare('apellidos_completos',$this->apellidos_completos,true);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('estado_civil',$this->estado_civil);
		$criteria->compare('lugar_nacimiento',$this->lugar_nacimiento,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('direccion_residencia',$this->direccion_residencia,true);
		$criteria->compare('telefono_fijo',$this->telefono_fijo,true);
		$criteria->compare('telefono_movil',$this->telefono_movil,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('libreta_militar',$this->libreta_militar,true);
		$criteria->compare('sw_hijos',$this->sw_hijos,true);
		$criteria->compare('cantidad_hijos',$this->cantidad_hijos);
		$criteria->compare('familiar_ubicacion',$this->familiar_ubicacion,true);
		$criteria->compare('telefono_familiar',$this->telefono_familiar,true);
		$criteria->compare('grupo_sanguineo',$this->grupo_sanguineo);
		$criteria->compare('barrio',$this->barrio,true);
		$criteria->compare('lugar_residencia',$this->lugar_residencia,true);
		$criteria->compare('dependencia_economica',$this->dependencia_economica);
		$criteria->compare('tipo_documento_id',$this->tipo_documento_id,true);
		$criteria->compare('documento_id',$this->documento_id,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('lugar_nacimiento_exterior',$this->lugar_nacimiento_exterior,true);
		$criteria->compare('sw_padres',$this->sw_padres,true);
		$criteria->compare('sw_hijastros',$this->sw_hijastros,true);
		$criteria->compare('sw_familiaridad_interna',$this->sw_familiaridad_interna,true);
		$criteria->compare('acepta_terminos_condiciones',$this->acepta_terminos_condiciones,true);
		$criteria->compare('fecha_aceptacion_adp',$this->fecha_aceptacion_adp,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('zona',$this->zona,true);
		$criteria->compare('etnia',$this->etnia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DatosPersonalesHv the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
