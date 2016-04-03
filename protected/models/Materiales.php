<?php

/**
 * This is the model class for table "materiales".
 *
 * The followings are the available columns in table 'materiales':
 * @property integer $IDMateriales
 * @property string $Descripcion
 * @property integer $IdEmpresa
 * @property string $CodigoInt
 * @property string $CodigoExt
 * @property string $Marca
 * @property string $Modelo
 * @property double $StockGeneral
 * @property double $StockReal
 * @property double $StockMinimo
 * @property double $UsoMax
 * @property double $Costo
 */
class Materiales extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'materiales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Descripcion, IdEmpresa', 'required'),
			array('IdEmpresa', 'numerical', 'integerOnly'=>true),
			array('StockGeneral, StockReal, StockMinimo, UsoMax, Costo', 'numerical'),
			array('Descripcion', 'length', 'max'=>60),
			array('CodigoInt, CodigoExt', 'length', 'max'=>15),
			array('Marca, Modelo', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Descripcion, CodigoInt, CodigoExt, Marca, Modelo', 'safe', 'on'=>'search'),
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
			'IDMateriales' => 'Idmateriales',
			'Descripcion' => 'Descripcion',
			'IdEmpresa' => 'Id Empresa',
			'CodigoInt' => 'Codigo Int',
			'CodigoExt' => 'Codigo Ext',
			'Marca' => 'Marca',
			'Modelo' => 'Modelo',
			'StockGeneral' => 'Stock General',
			'StockReal' => 'Stock Real',
			'StockMinimo' => 'Stock Minimo',
			'UsoMax' => 'Uso Max',
			'Costo' => 'Costo',
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

		$criteria->compare('IDMateriales',$this->IDMateriales);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('IdEmpresa',$this->IdEmpresa);
		$criteria->compare('CodigoInt',$this->CodigoInt,true);
		$criteria->compare('CodigoExt',$this->CodigoExt,true);
		$criteria->compare('Marca',$this->Marca,true);
		$criteria->compare('Modelo',$this->Modelo,true);
		$criteria->compare('StockGeneral',$this->StockGeneral);
		$criteria->compare('StockReal',$this->StockReal);
		$criteria->compare('StockMinimo',$this->StockMinimo);
		$criteria->compare('UsoMax',$this->UsoMax);
		$criteria->compare('Costo',$this->Costo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Materiales the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
