<?php

/**
 * This is the model class for table "tipos_componentes_perfil".
 *
 * The followings are the available columns in table 'tipos_componentes_perfil':
 * @property integer $componente_id
 * @property string $tipo_dato
 * @property string $descripcion
 * @property string $cruce_automatico
 * @property string $sw_obligatorio
 * @property integer $orden
 * @property string $sw_puntaje
 * @property string $sw_estado
 * @property string $todos_obligatorios
 *
 * The followings are the available model relations:
 * @property CalificacionComponenteRegistro[] $calificacionComponenteRegistros
 * @property CalificacionComponenteRegistroTemp[] $calificacionComponenteRegistroTemps
 * @property DatoPerfilCargo[] $datoPerfilCargos
 * @property DatoPerfilCargoTemp[] $datoPerfilCargoTemps
 * @property HistorialDatosPerfil[] $historialDatosPerfils
 * @property PonderacionComponentePerfilCargo[] $ponderacionComponentePerfilCargos
 * @property EspecificacionesNivelesRequeridosCompetencias[] $especificacionesNivelesRequeridosCompetenciases
 * @property CruceComponentes[] $cruceComponentes
 * @property ResumenInformeSeleccionDetalleComponentes[] $resumenInformeSeleccionDetalleComponentes
 * @property RelacionComponenteCampo[] $relacionComponenteCampos
 */
class TiposComponentesPerfil extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipos_componentes_perfil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_dato, descripcion, cruce_automatico, orden', 'required'),
			array('orden', 'numerical', 'integerOnly'=>true),
			array('tipo_dato, cruce_automatico, sw_obligatorio, sw_puntaje, sw_estado, todos_obligatorios', 'length', 'max'=>1),
			array('descripcion', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('componente_id, tipo_dato, descripcion, cruce_automatico, sw_obligatorio, orden, sw_puntaje, sw_estado, todos_obligatorios', 'safe', 'on'=>'search'),
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
			'calificacionComponenteRegistros' => array(self::HAS_MANY, 'CalificacionComponenteRegistro', 'componente_id'),
			'calificacionComponenteRegistroTemps' => array(self::HAS_MANY, 'CalificacionComponenteRegistroTemp', 'componente_id'),
			'datoPerfilCargos' => array(self::HAS_MANY, 'DatoPerfilCargo', 'componente_id'),
			'datoPerfilCargoTemps' => array(self::HAS_MANY, 'DatoPerfilCargoTemp', 'componente_id'),
			'historialDatosPerfils' => array(self::HAS_MANY, 'HistorialDatosPerfil', 'componente_id'),
			'ponderacionComponentePerfilCargos' => array(self::HAS_MANY, 'PonderacionComponentePerfilCargo', 'componente_id'),
			'especificacionesNivelesRequeridosCompetenciases' => array(self::HAS_MANY, 'EspecificacionesNivelesRequeridosCompetencias', 'referencia_dato'),
			'cruceComponentes' => array(self::HAS_MANY, 'CruceComponentes', 'componente_id'),
			'resumenInformeSeleccionDetalleComponentes' => array(self::HAS_MANY, 'ResumenInformeSeleccionDetalleComponentes', 'componente_id'),
			'relacionComponenteCampos' => array(self::HAS_MANY, 'RelacionComponenteCampo', 'componente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'componente_id' => 'Componente',
			'tipo_dato' => 'Tipo Dato',
			'descripcion' => 'Descripcion',
			'cruce_automatico' => 'Cruce Automatico',
			'sw_obligatorio' => 'Sw Obligatorio',
			'orden' => 'Orden',
			'sw_puntaje' => 'Sw Puntaje',
			'sw_estado' => 'Sw Estado',
			'todos_obligatorios' => 'Todos Obligatorios',
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

		$criteria->compare('componente_id',$this->componente_id);
		$criteria->compare('tipo_dato',$this->tipo_dato,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('cruce_automatico',$this->cruce_automatico,true);
		$criteria->compare('sw_obligatorio',$this->sw_obligatorio,true);
		$criteria->compare('orden',$this->orden);
		$criteria->compare('sw_puntaje',$this->sw_puntaje,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('todos_obligatorios',$this->todos_obligatorios,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TiposComponentesPerfil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
