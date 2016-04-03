<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $IdUsuario
 * @property string $usuario
 * @property string $clave
 * @property string $baja
 * @property string $permisoweb
 * @property string $usrNombre
 * @property integer $NivelAcceso
 * @property string $email
 * @property integer $port_winsock
 * @property string $sql_name
 * @property string $sql_pass
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario, clave, usrNombre, email, sql_name', 'required'),
			array('IdUsuario, NivelAcceso, port_winsock', 'numerical', 'integerOnly'=>true),
			array('usuario, clave', 'length', 'max'=>15),
			array('baja, permisoweb', 'length', 'max'=>10),
			array('usrNombre, sql_name, sql_pass', 'length', 'max'=>100),
			array('email', 'length', 'max'=>160),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('usuario, usrNombre, NivelAcceso, email, sql_name, sql_pass', 'safe', 'on'=>'search'),
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
			'IdUsuario' => 'Id Usuario',
			'usuario' => 'Usuario',
			'clave' => 'Clave',
			'baja' => 'Baja',
			'permisoweb' => 'Permisoweb',
			'usrNombre' => 'Usr Nombre',
			'NivelAcceso' => 'Nivel Acceso',
			'email' => 'Email',
			'port_winsock' => 'Port Winsock',
			'sql_name' => 'Sql Name',
			'sql_pass' => 'Sql Pass',
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

		$criteria->compare('IdUsuario',$this->IdUsuario);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('baja',$this->baja,true);
		$criteria->compare('permisoweb',$this->permisoweb,true);
		$criteria->compare('usrNombre',$this->usrNombre,true);
		$criteria->compare('NivelAcceso',$this->NivelAcceso);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('port_winsock',$this->port_winsock);
		$criteria->compare('sql_name',$this->sql_name,true);
		$criteria->compare('sql_pass',$this->sql_pass,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
