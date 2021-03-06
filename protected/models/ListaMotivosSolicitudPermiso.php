<?php

/**
 * This is the model class for table "lista_motivos_solicitud_permiso".
 *
 * The followings are the available columns in table 'lista_motivos_solicitud_permiso':
 * @property integer $motivo_id
 * @property string $descripcion
 * @property string $sw_estado
 * @property string $sw_texto
 * @property integer $user_registra
 * @property string $fecha_registro
 * @property string $sw_remunerado
 * @property string $sw_compensa
 * @property integer $maximo_tiempo_permiso
 * @property string $sw_editable
 *
 * The followings are the available model relations:
 * @property SystemUsuarios $userRegistra
 * @property SolicitudesPermisoEmpleados[] $solicitudesPermisoEmpleadoses
 */
class ListaMotivosSolicitudPermiso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lista_motivos_solicitud_permiso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, user_registra, fecha_registro', 'required'),
			array('user_registra, maximo_tiempo_permiso', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>128),
			array('sw_estado, sw_texto, sw_remunerado, sw_compensa, sw_editable', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('motivo_id, descripcion, sw_estado, sw_texto, user_registra, fecha_registro, sw_remunerado, sw_compensa, maximo_tiempo_permiso, sw_editable', 'safe', 'on'=>'search'),
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
			'userRegistra' => array(self::BELONGS_TO, 'SystemUsuarios', 'user_registra'),
			'solicitudesPermisoEmpleadoses' => array(self::HAS_MANY, 'SolicitudesPermisoEmpleados', 'motivo_solicitud_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'motivo_id' => 'Motivo',
			'descripcion' => 'Descripcion',
			'sw_estado' => 'Sw Estado',
			'sw_texto' => 'Sw Texto',
			'user_registra' => 'User Registra',
			'fecha_registro' => 'Fecha Registro',
			'sw_remunerado' => 'Sw Remunerado',
			'sw_compensa' => 'Sw Compensa',
			'maximo_tiempo_permiso' => 'Maximo Tiempo Permiso',
			'sw_editable' => 'Sw Editable',
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
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('sw_texto',$this->sw_texto,true);
		$criteria->compare('user_registra',$this->user_registra);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('sw_remunerado',$this->sw_remunerado,true);
		$criteria->compare('sw_compensa',$this->sw_compensa,true);
		$criteria->compare('maximo_tiempo_permiso',$this->maximo_tiempo_permiso);
		$criteria->compare('sw_editable',$this->sw_editable,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ListaMotivosSolicitudPermiso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
