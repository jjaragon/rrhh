<?php

/**
 * This is the model class for table "aspirantes_convocatorias_auditoria".
 *
 * The followings are the available columns in table 'aspirantes_convocatorias_auditoria':
 * @property integer $auditoria_id
 * @property integer $aspirante_id
 * @property integer $convocatoria_id
 * @property integer $etapa_id
 * @property integer $estado_aspirante_convocatoria
 * @property string $fecha_registro
 * @property integer $user_registra
 * @property string $observacion
 * @property string $cargo_usuario_descarta
 * @property string $sw_traslado
 *
 * The followings are the available model relations:
 * @property EstadosAspirantesConvocatorias $estadoAspiranteConvocatoria
 * @property AspirantesConvocatorias $aspirante
 * @property AspirantesConvocatorias $convocatoria
 * @property CargosEmpresa $cargoUsuarioDescarta
 * @property EtapasConvocatoria $etapa
 * @property SystemUsuarios $userRegistra
 */
class AspirantesConvocatoriasAuditoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aspirantes_convocatorias_auditoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('aspirante_id, convocatoria_id, fecha_registro, user_registra', 'required'),
			array('aspirante_id, convocatoria_id, etapa_id, estado_aspirante_convocatoria, user_registra', 'numerical', 'integerOnly'=>true),
			array('sw_traslado', 'length', 'max'=>1),
			array('observacion, cargo_usuario_descarta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('auditoria_id, aspirante_id, convocatoria_id, etapa_id, estado_aspirante_convocatoria, fecha_registro, user_registra, observacion, cargo_usuario_descarta, sw_traslado', 'safe', 'on'=>'search'),
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
			'estadoAspiranteConvocatoria' => array(self::BELONGS_TO, 'EstadosAspirantesConvocatorias', 'estado_aspirante_convocatoria'),
			'aspirante' => array(self::BELONGS_TO, 'AspirantesConvocatorias', 'aspirante_id'),
			'convocatoria' => array(self::BELONGS_TO, 'AspirantesConvocatorias', 'convocatoria_id'),
			'cargoUsuarioDescarta' => array(self::BELONGS_TO, 'CargosEmpresa', 'cargo_usuario_descarta'),
			'etapa' => array(self::BELONGS_TO, 'EtapasConvocatoria', 'etapa_id'),
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'auditoria_id' => 'Auditoria',
			'aspirante_id' => 'Aspirante',
			'convocatoria_id' => 'Convocatoria',
			'etapa_id' => 'Etapa',
			'estado_aspirante_convocatoria' => 'Estado Aspirante Convocatoria',
			'fecha_registro' => 'Fecha Registro',
			'user_registra' => 'User Registra',
			'observacion' => 'Observacion',
			'cargo_usuario_descarta' => 'Cargo Usuario Descarta',
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

		$criteria->compare('auditoria_id',$this->auditoria_id);
		$criteria->compare('aspirante_id',$this->aspirante_id);
		$criteria->compare('convocatoria_id',$this->convocatoria_id);
		$criteria->compare('etapa_id',$this->etapa_id);
		$criteria->compare('estado_aspirante_convocatoria',$this->estado_aspirante_convocatoria);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('cargo_usuario_descarta',$this->cargo_usuario_descarta,true);
		$criteria->compare('sw_traslado',$this->sw_traslado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AspirantesConvocatoriasAuditoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
