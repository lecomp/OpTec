<?php

/**
 * This is the model class for table "empresa".
 *
 * The followings are the available columns in table 'empresa':
 * @property integer $IdEmpresa
 * @property string $EmpNombre
 * @property string $EmpDomicilio
 * @property string $EmpBarrio
 * @property string $EmpProvincia
 * @property string $EmpPais
 * @property string $EmpCP
 * @property string $EmpMail
 * @property string $EmpTelefono
 * @property string $EmpContacto
 * @property string $EmpCargoContacto
 * @property string $EmpCUIT
 */
class Empresa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EmpNombre', 'required'),
			array('IdEmpresa', 'numerical', 'integerOnly'=>true),
			array('EmpNombre, EmpMail, EmpContacto, EmpCargoContacto', 'length', 'max'=>50),
			array('EmpDomicilio', 'length', 'max'=>120),
			array('EmpBarrio, EmpProvincia, EmpPais, EmpTelefono', 'length', 'max'=>20),
			array('EmpCP', 'length', 'max'=>10),
			array('EmpCUIT', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EmpNombre, EmpContacto, EmpCargoContacto, EmpCUIT', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IdEmpresa' => 'Id Empresa',
			'EmpNombre' => 'Nombre',
			'EmpDomicilio' => 'Domicilio',
			'EmpBarrio' => 'Barrio',
			'EmpProvincia' => 'Provincia',
			'EmpPais' => 'Pais',
			'EmpCP' => 'CP',
			'EmpMail' => 'EMail',
			'EmpTelefono' => 'Telefono',
			'EmpContacto' => 'Contacto',
			'EmpCargoContacto' => 'Cargo Contacto',
			'EmpCUIT' => 'CUIT',
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

		$criteria->compare('IdEmpresa',$this->IdEmpresa);
		$criteria->compare('EmpNombre',$this->EmpNombre,true);
		$criteria->compare('EmpDomicilio',$this->EmpDomicilio,true);
		$criteria->compare('EmpBarrio',$this->EmpBarrio,true);
		$criteria->compare('EmpProvincia',$this->EmpProvincia,true);
		$criteria->compare('EmpPais',$this->EmpPais,true);
		$criteria->compare('EmpCP',$this->EmpCP,true);
		$criteria->compare('EmpMail',$this->EmpMail,true);
		$criteria->compare('EmpTelefono',$this->EmpTelefono,true);
		$criteria->compare('EmpContacto',$this->EmpContacto,true);
		$criteria->compare('EmpCargoContacto',$this->EmpCargoContacto,true);
		$criteria->compare('EmpCUIT',$this->EmpCUIT,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empresa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
