<?php

/**
 * This is the model class for table "contrato_proximo_a_vencer".
 *
 * The followings are the available columns in table 'contrato_proximo_a_vencer':
 * @property integer $contrato_finalizar_id
 * @property integer $contrato_id
 * @property string $fecha_registro
 * @property string $sw_estado
 *
 * The followings are the available model relations:
 * @property ContratosProximosAVencerAuditoria[] $contratosProximosAVencerAuditorias
 * @property ContratoEmpleados $contrato
 */
class ContratoProximoAVencer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contrato_proximo_a_vencer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contrato_id, fecha_registro', 'required'),
			array('contrato_id', 'numerical', 'integerOnly'=>true),
			array('sw_estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('contrato_finalizar_id, contrato_id, fecha_registro, sw_estado', 'safe', 'on'=>'search'),
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
			'contratosProximosAVencerAuditorias' => array(self::HAS_MANY, 'ContratosProximosAVencerAuditoria', 'contrato_finalizar_id'),
			'contrato' => array(self::BELONGS_TO, 'ContratoEmpleados', 'contrato_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'contrato_finalizar_id' => 'Contrato Finalizar',
			'contrato_id' => 'Contrato',
			'fecha_registro' => 'Fecha Registro',
			'sw_estado' => 'Sw Estado',
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

		$criteria->compare('contrato_finalizar_id',$this->contrato_finalizar_id);
		$criteria->compare('contrato_id',$this->contrato_id);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ContratoProximoAVencer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
