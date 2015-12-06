<?php

/**
 * This is the model class for table "aspirantes_convocatorias".
 *
 * The followings are the available columns in table 'aspirantes_convocatorias':
 * @property integer $aspirante_convocatoria_id
 * @property integer $convocatoria_id
 * @property integer $aspirante_id
 * @property integer $etapa_id
 * @property string $fecha_registro
 * @property integer $user_id
 * @property integer $estado_aspirante_convocatoria
 * @property integer $convocatoria_id_traslado
 * @property string $sw_traslado
 *
 * The followings are the available model relations:
 * @property AspirantesConvocatoriasAuditoria[] $aspirantesConvocatoriasAuditorias
 * @property AspirantesConvocatoriasAuditoria[] $aspirantesConvocatoriasAuditorias1
 * @property ContactoAspiranteConvocatorias[] $contactoAspiranteConvocatoriases
 * @property ContactoAspiranteConvocatorias[] $contactoAspiranteConvocatoriases1
 * @property ReferenciacionLaboralAspirante[] $referenciacionLaboralAspirantes
 * @property ReferenciacionLaboralAspirante[] $referenciacionLaboralAspirantes1
 * @property RegistroCalificacionReferenciacionAspirante[] $registroCalificacionReferenciacionAspirantes
 * @property RegistroCalificacionReferenciacionAspirante[] $registroCalificacionReferenciacionAspirantes1
 * @property CruceComponentes[] $cruceComponentes
 * @property CruceComponentes[] $cruceComponentes1
 * @property ResumenInformeSeleccion[] $resumenInformeSeleccions
 * @property ResumenInformeSeleccion[] $resumenInformeSeleccions1
 * @property ProgramacionPruebasAspirantes[] $programacionPruebasAspirantes
 * @property ProgramacionPruebasAspirantes[] $programacionPruebasAspirantes1
 * @property TrasladoConvocatorias[] $trasladoConvocatoriases
 * @property TrasladoConvocatorias[] $trasladoConvocatoriases1
 * @property TrasladoConvocatorias[] $trasladoConvocatoriases2
 * @property Aspirantes $aspirante
 * @property Convocatorias $convocatoria
 * @property EtapasConvocatoria $etapa
 * @property Convocatorias $convocatoriaIdTraslado
 * @property EstadosAspirantesConvocatorias $estadoAspiranteConvocatoria
 * @property SystemUsuarios $user
 * @property Vinculacion[] $vinculacions
 * @property Vinculacion[] $vinculacions1
 */
class AspirantesConvocatorias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aspirantes_convocatorias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('convocatoria_id, aspirante_id, fecha_registro, user_id', 'required'),
			array('convocatoria_id, aspirante_id, etapa_id, user_id, estado_aspirante_convocatoria, convocatoria_id_traslado', 'numerical', 'integerOnly'=>true),
			array('sw_traslado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('aspirante_convocatoria_id, convocatoria_id, aspirante_id, etapa_id, fecha_registro, user_id, estado_aspirante_convocatoria, convocatoria_id_traslado, sw_traslado', 'safe', 'on'=>'search'),
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
			'aspirantesConvocatoriasAuditorias' => array(self::HAS_MANY, 'AspirantesConvocatoriasAuditoria', 'aspirante_id'),
			'aspirantesConvocatoriasAuditorias1' => array(self::HAS_MANY, 'AspirantesConvocatoriasAuditoria', 'convocatoria_id'),
			'contactoAspiranteConvocatoriases' => array(self::HAS_MANY, 'ContactoAspiranteConvocatorias', 'convocatoria_id'),
			'contactoAspiranteConvocatoriases1' => array(self::HAS_MANY, 'ContactoAspiranteConvocatorias', 'aspirante_id'),
			'referenciacionLaboralAspirantes' => array(self::HAS_MANY, 'ReferenciacionLaboralAspirante', 'convocatoria_id'),
			'referenciacionLaboralAspirantes1' => array(self::HAS_MANY, 'ReferenciacionLaboralAspirante', 'aspirante_id'),
			'registroCalificacionReferenciacionAspirantes' => array(self::HAS_MANY, 'RegistroCalificacionReferenciacionAspirante', 'convocatoria_id'),
			'registroCalificacionReferenciacionAspirantes1' => array(self::HAS_MANY, 'RegistroCalificacionReferenciacionAspirante', 'aspirante_id'),
			'cruceComponentes' => array(self::HAS_MANY, 'CruceComponentes', 'convocatoria_id'),
			'cruceComponentes1' => array(self::HAS_MANY, 'CruceComponentes', 'aspirante_id'),
			'resumenInformeSeleccions' => array(self::HAS_MANY, 'ResumenInformeSeleccion', 'convocatoria_id'),
			'resumenInformeSeleccions1' => array(self::HAS_MANY, 'ResumenInformeSeleccion', 'aspirante_id'),
			'programacionPruebasAspirantes' => array(self::HAS_MANY, 'ProgramacionPruebasAspirantes', 'convocatoria_id'),
			'programacionPruebasAspirantes1' => array(self::HAS_MANY, 'ProgramacionPruebasAspirantes', 'aspirante_id'),
			'trasladoConvocatoriases' => array(self::HAS_MANY, 'TrasladoConvocatorias', 'aspirante_id'),
			'trasladoConvocatoriases1' => array(self::HAS_MANY, 'TrasladoConvocatorias', 'convocatoria_id_sale'),
			'trasladoConvocatoriases2' => array(self::HAS_MANY, 'TrasladoConvocatorias', 'convocatoria_id_entra'),
			'aspirante' => array(self::BELONGS_TO, 'Aspirantes', 'aspirante_id'),
			'convocatoria' => array(self::BELONGS_TO, 'Convocatorias', 'convocatoria_id'),
			'etapa' => array(self::BELONGS_TO, 'EtapasConvocatoria', 'etapa_id'),
			'convocatoriaIdTraslado' => array(self::BELONGS_TO, 'Convocatorias', 'convocatoria_id_traslado'),
			'estadoAspiranteConvocatoria' => array(self::BELONGS_TO, 'EstadosAspirantesConvocatorias', 'estado_aspirante_convocatoria'),
			'user' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_id'),
			'vinculacions' => array(self::HAS_MANY, 'Vinculacion', 'convocatoria_id'),
			'vinculacions1' => array(self::HAS_MANY, 'Vinculacion', 'aspirante_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'aspirante_convocatoria_id' => 'Aspirante Convocatoria',
			'convocatoria_id' => 'Convocatoria',
			'aspirante_id' => 'Aspirante',
			'etapa_id' => 'Etapa',
			'fecha_registro' => 'Fecha Registro',
			'user_id' => 'User',
			'estado_aspirante_convocatoria' => 'Estado Aspirante Convocatoria',
			'convocatoria_id_traslado' => 'Convocatoria Id Traslado',
			'sw_traslado' => 'Sw Traslado',
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

		$criteria->compare('aspirante_convocatoria_id',$this->aspirante_convocatoria_id);
		$criteria->compare('convocatoria_id',$this->convocatoria_id);
		$criteria->compare('aspirante_id',$this->aspirante_id);
		$criteria->compare('etapa_id',$this->etapa_id);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('estado_aspirante_convocatoria',$this->estado_aspirante_convocatoria);
		$criteria->compare('convocatoria_id_traslado',$this->convocatoria_id_traslado);
		$criteria->compare('sw_traslado',$this->sw_traslado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AspirantesConvocatorias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
