<?php

/**
 * This is the model class for table "motivos_solicitud_personal".
 *
 * The followings are the available columns in table 'motivos_solicitud_personal':
 * @property integer $motivo_id
 * @property string $descripcion_breve
 * @property string $descripcion
 * @property string $sw_estado
 * @property string $tipo_cargo
 * @property string $genero_vacante
 * @property string $fecha_registro
 *
 * The followings are the available model relations:
 * @property SolicitudPersonal[] $solicitudPersonals
 */
class MotivosSolicitudPersonal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'motivos_solicitud_personal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion_breve, tipo_cargo, fecha_registro', 'required'),
			array('sw_estado, tipo_cargo', 'length', 'max'=>1),
			array('descripcion, genero_vacante', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('motivo_id, descripcion_breve, descripcion, sw_estado, tipo_cargo, genero_vacante, fecha_registro', 'safe', 'on'=>'search'),
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
			'solicitudPersonals' => array(self::HAS_MANY, 'SolicitudPersonal', 'motivo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'motivo_id' => 'Motivo',
			'descripcion_breve' => 'Descripcion Breve',
			'descripcion' => 'Descripcion',
			'sw_estado' => 'Sw Estado',
			'tipo_cargo' => 'Tipo Cargo',
			'genero_vacante' => 'Genero Vacante',
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

		$criteria->compare('motivo_id',$this->motivo_id);
		$criteria->compare('descripcion_breve',$this->descripcion_breve,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('tipo_cargo',$this->tipo_cargo,true);
		$criteria->compare('genero_vacante',$this->genero_vacante,true);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MotivosSolicitudPersonal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
