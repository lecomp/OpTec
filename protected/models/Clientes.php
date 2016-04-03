<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property integer $IdCliente
 * @property string $CliNombre
 * @property string $NroCliente
 * @property string $CliDomicilio
 * @property string $CliEntre
 * @property string $CliLocalidad
 * @property string $CliBarrio
 * @property string $CliProvincia
 * @property string $CliTelFijo
 * @property string $CliTelMovil
 * @property string $CliContacto
 * @property string $CliTelContacto
 * @property integer $Baja
 */
class Clientes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CliNombre', 'required'),
			array('Baja', 'numerical', 'integerOnly'=>true),
			array('CliNombre', 'length', 'max'=>50),
			array('NroCliente', 'length', 'max'=>10),
			array('CliDomicilio, CliEntre, CliLocalidad, CliBarrio, CliProvincia, CliTelFijo, CliTelMovil, CliContacto, CliTelContacto', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CliNombre, NroCliente, CliDomicilio, CliLocalidad, CliBarrio, CliProvincia, CliContacto, CliTelContacto', 'safe', 'on'=>'search'),
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
			'ooss' => array(self::HAS_ONE, 'Ooss', 'IdCliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdCliente' => 'Id Cliente',
			'CliNombre' => 'Nombre',
			'NroCliente' => 'Nro Cliente',
			'CliDomicilio' => 'Domicilio',
			'CliEntre' => 'Entre calles',
			'CliLocalidad' => 'Localidad',
			'CliBarrio' => 'Barrio',
			'CliProvincia' => 'Provincia',
			'CliTelFijo' => 'Tel Fijo',
			'CliTelMovil' => 'Tel Movil',
			'CliContacto' => 'Contacto',
			'CliTelContacto' => 'Tel Contacto',
			'Baja' => 'Baja',
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

		$criteria->compare('IdCliente',$this->IdCliente);
		$criteria->compare('CliNombre',$this->CliNombre,true);
		$criteria->compare('NroCliente',$this->NroCliente,true);
		$criteria->compare('CliDomicilio',$this->CliDomicilio,true);
		$criteria->compare('CliEntre',$this->CliEntre,true);
		$criteria->compare('CliLocalidad',$this->CliLocalidad,true);
		$criteria->compare('CliBarrio',$this->CliBarrio,true);
		$criteria->compare('CliProvincia',$this->CliProvincia,true);
		$criteria->compare('CliTelFijo',$this->CliTelFijo,true);
		$criteria->compare('CliTelMovil',$this->CliTelMovil,true);
		$criteria->compare('CliContacto',$this->CliContacto,true);
		$criteria->compare('CliTelContacto',$this->CliTelContacto,true);
		$criteria->compare('Baja',$this->Baja);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
