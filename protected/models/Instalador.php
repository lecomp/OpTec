<?php

/**
 * This is the model class for table "instalador".
 *
 * The followings are the available columns in table 'instalador':
 * @property integer $IDInstalador
 * @property string $InstNombre
 * @property integer $InstEmpresa
 * @property string $InstDomicilio
 * @property string $InstTelefono
 * @property string $Usuario
 * @property string $Clave
 * @property string $NivelAcceso
 * @property string $Foto
 * @property string $Legajo
 * @property string $FechaIngreso
 * @property string $CuentaSueldo
 * @property string $CuentaBanco
 * @property string $FormaPago
 * @property string $TipoInstalador
 * @property string $FTrabajo
 * @property string $FMaterial
 * @property string $FKm
 * @property string $NivelCobranza
 * @property integer $IDSupervisor
 * @property integer $Baja
 * @property integer $PermisoWeb
 */
class Instalador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'instalador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('InstNombre', 'required'),
			array('IDSupervisor, Baja, PermisoWeb', 'numerical', 'integerOnly'=>true),
			array('InstNombre', 'length', 'max'=>50),
			array('InstDomicilio', 'length', 'max'=>120),
			array('InstTelefono, Usuario, Clave, CuentaSueldo, CuentaBanco', 'length', 'max'=>20),
			array('NivelAcceso, TipoInstalador, NivelCobranza', 'length', 'max'=>18),
			array('Legajo, FormaPago', 'length', 'max'=>15),
			array('FTrabajo, FMaterial, FKm', 'length', 'max'=>10),
			array('Foto, FechaIngreso', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('InstNombre, InstTelefono, Usuario, NivelAcceso, Legajo', 'safe', 'on'=>'search'),
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
            'ooss' => array(self::HAS_ONE, 'Ooss', 'IdInstalador'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDInstalador' => 'Idinstalador',
			'InstNombre' => 'Nombre',
			'InstEmpresa' => 'Sucursal',
			'InstDomicilio' => 'Domicilio',
			'InstTelefono' => 'Telefono',
			'Usuario' => 'Usuario',
			'Clave' => 'Clave',
			'NivelAcceso' => 'Nivel Acceso',
			'Foto' => 'Foto',
			'Legajo' => 'Legajo',
			'FechaIngreso' => 'Fecha Ingreso',
			'CuentaSueldo' => 'Cuenta Sueldo',
			'CuentaBanco' => 'Cuenta Banco',
			'FormaPago' => 'Forma Pago',
			'TipoInstalador' => 'Tipo Instalador',
			'FTrabajo' => 'Ftrabajo',
			'FMaterial' => 'Fmaterial',
			'FKm' => 'Fkm',
			'NivelCobranza' => 'Nivel Cobranza',
			'IDSupervisor' => 'ID Supervisor',
			'Baja' => 'Baja',
			'PermisoWeb' => 'Permiso Web',
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

		$criteria->compare('IDInstalador',$this->IDInstalador);
		$criteria->compare('InstNombre',$this->InstNombre,true);
		$criteria->compare('InstEmpresa',$this->InstEmpresa);
		$criteria->compare('InstDomicilio',$this->InstDomicilio,true);
		$criteria->compare('InstTelefono',$this->InstTelefono,true);
		$criteria->compare('Usuario',$this->Usuario,true);
		$criteria->compare('Clave',$this->Clave,true);
		$criteria->compare('NivelAcceso',$this->NivelAcceso,true);
		$criteria->compare('Foto',$this->Foto,true);
		$criteria->compare('Legajo',$this->Legajo,true);
		$criteria->compare('FechaIngreso',$this->FechaIngreso,true);
		$criteria->compare('CuentaSueldo',$this->CuentaSueldo,true);
		$criteria->compare('CuentaBanco',$this->CuentaBanco,true);
		$criteria->compare('FormaPago',$this->FormaPago,true);
		$criteria->compare('TipoInstalador',$this->TipoInstalador,true);
		$criteria->compare('FTrabajo',$this->FTrabajo,true);
		$criteria->compare('FMaterial',$this->FMaterial,true);
		$criteria->compare('FKm',$this->FKm,true);
		$criteria->compare('NivelCobranza',$this->NivelCobranza,true);
		$criteria->compare('IDSupervisor',$this->IDSupervisor);
		$criteria->compare('Baja',$this->Baja);
		$criteria->compare('PermisoWeb',$this->PermisoWeb);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Instalador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /**
     * Funcion para rellenar un combo con un instalador seleccionado, 0 es opcion elegir un inst
     */
    public function getListaInstaladores ($idSel)
	{
		array(Instalador::model()->findByAttributes(array('InstNombre' => $this->IDInstalador)));
		return array();
	}
                                                                                                                                                            
}
