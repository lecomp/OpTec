<?php

/**
 * This is the model class for table "ooss".
 *
 * The followings are the available columns in table 'ooss':
 * @property integer $IdOS
 * @property string $NroPedido
 * @property string $Instancia
 * @property integer $IdCliente
 * @property integer $IdInstalador
 * @property integer $IdEmpresa
 * @property string $FechaRecepcion
 * @property string $HDesde
 * @property string $HHasta
 * @property string $FechaProgramada
 * @property string $HoraProgramada
 * @property string $ContactoCliente
 * @property string $TipoTrabajo
 * @property string $Problema
 * @property string $Trabajo
 * @property string $Observaciones
 * @property string $InstalacionesDatosContrato
 * @property string $NroContrato
 * @property string $Nivel
 * @property string $FechaReprog
 * @property string $HoraReprog
 * @property string $DesdeReprog
 * @property string $HastaReprog
 * @property string $MotivoReprog
 * @property string $ContactoReprog
 * @property string $Finalizada
 * @property string $Visitada
 * @property string $CambioDealer
 * @property string $Pendiente
 * @property string $MarcaLiq
 * @property string $FechaMarca
 * @property string $Liquidada
 * @property string $FechaLiq
 * @property string $LiquidadaV
 * @property string $FechaLiqV
 * @property string $Cobrada
 * @property double $Monto
 * @property double $MontoTotal
 * @property string $Reclamada
 * @property double $MontoReclamado
 * @property string $Presentada
 * @property string $Rechazada
 * @property string $MotivoRechazo
 * @property double $PagadoXTrabajo
 * @property double $PagTADT
 * @property double $PagadoXMaterial
 * @property double $PagMADT
 * @property double $PagadoXKm
 * @property double $PagKADT
 * @property string $HoraInicio
 * @property string $HoraFin
 * @property string $DescripcionTareas
 * @property string $MaterialesIndirectos
 * @property string $KmRecorridos
 * @property string $TiempoViaje
 * @property string $Estado
 * @property integer $SCalidad
 * @property integer $Levantada
 * @property integer $SinAlta
 * @property integer $LEF
 * @property integer $LFF
 * @property string $PeriodoLiqEF
 * @property string $PeriodoLiqFF
 * @property double $CostoExtra
 * @property string $FaltaMaterial
 * @property string $DescripcionFaltante
 * @property integer $RepQuien
 * @property string $IdMarca
 * @property string $IdLiq
 * @property string $IdModif
 * @property string $IdFinal
 * @property string $IdAlta
 * @property integer $Baja
 * @property integer $Mail
 * @property string $MatInstalados
 * @property integer $MatRepuesto
 * @property string $DescLiq
 * @property string $DescLiqInt
 * @property string $DeskKM
 * @property string $ObservacionMat
 * @property integer $NumeroLiquidacion
 * @property integer $LiquidadaT
 * @property integer $EnvioMat
 * @property integer $EnvioOK
 * @property string $FechaEnvio
 * @property string $RemitoOpTec
 * @property string $RemitoManual
 * @property string $Nomenclatura
 * @property string $Adicionales
 * @property string $Cableados
 * @property string $PuntoVenta
 * @property string $NumeroChip
 * @property string $EmpresaTel
 * @property string $NroOT
 * @property string $IDadic
 */
class Ooss extends CActiveRecord
{
    public $nombre_instalador;
    public $nombre_cliente;
    public $provincia_cliente;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ooss';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NroPedido, Instancia, IdCliente, IdInstalador', 'required'),
			array('IdCliente, IdInstalador, IdEmpresa, Baja', 'numerical', 'integerOnly'=>true),
			array('NroPedido', 'length', 'max'=>13),
			array('ContactoCliente', 'length', 'max'=>50),
			array('TipoTrabajo', 'length', 'max'=>10),
			array('NroContrato, Visitada, KmRecorridos, Instancia, NroOT', 'length', 'max'=>20),
			array('Estado', 'length', 'max'=>12),
			array('FechaRecepcion, HDesde, HHasta, FechaProgramada, HoraProgramada, Problema, Trabajo, Observaciones, InstalacionesDatosContrato, FechaReprog, HoraReprog, DesdeReprog, HastaReprog, MotivoReprog, ContactoReprog, FechaMarca, FechaLiq, FechaLiqV, HoraInicio, HoraFin, DescripcionTareas, MaterialesIndirectos, TiempoViaje, DescripcionFaltante, MatInstalados, DescLiq, DescLiqInt, DeskKM, ObservacionMat, FechaEnvio', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NroPedido, Instancia, TipoTrabajo, NroContrato, Estado, NroOT, nombre_instalador, nombre_cliente, provincia_cliente', 'safe', 'on'=>'search'),
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
			'instalador' => array(self::BELONGS_TO, 'Instalador', 'IdInstalador'),
            'cliente' => array(self::BELONGS_TO, 'Clientes', 'IdCliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 *
	 */
	public function attributeLabels()
	{
		return array(
			'IdOS' => 'Id Os',
			'NroPedido' => 'Nro Pedido',
			'Instancia' => 'Instancia',
			'IdCliente' => 'Id Cliente',
			'IdInstalador' => 'Id Instalador',
			'IdEmpresa' => 'Id Empresa',
			'FechaRecepcion' => 'Fecha Recepcion',
			'HDesde' => 'Hdesde',
			'HHasta' => 'Hhasta',
			'FechaProgramada' => 'Fecha Prog',
			'HoraProgramada' => 'Hora Prog',
			'ContactoCliente' => 'Contacto Cliente',
			'TipoTrabajo' => 'Tipo Trabajo',
			'Problema' => 'Problema',
			'Trabajo' => 'Trabajo',
			'Observaciones' => 'Observaciones',
			'InstalacionesDatosContrato' => 'Instalaciones Datos Contrato',
			'NroContrato' => 'Nro Contrato',
			'FechaReprog' => 'Fecha Reprog',
			'HoraReprog' => 'Hora Reprog',
			'DesdeReprog' => 'Desde Reprog',
			'HastaReprog' => 'Hasta Reprog',
			'MotivoReprog' => 'Motivo Reprog',
			'ContactoReprog' => 'Contacto Reprog',
			'Visitada' => 'Visitada',
			'DescripcionTareas' => 'Descripcion Tareas',
			'KmRecorridos' => 'Km Recorridos',
			'Estado' => 'Estado',
			'Baja' => 'Baja',
			'MatInstalados' => 'Mat Instalados',
			'ObservacionMat' => 'Observacion Mat',
			'NroOT' => 'Nro Ot',
            'nombre_instalador' => 'Instalador',
            'nombre_cliente' => 'Cliente',
            'provincia_cliente' => 'Provincia',
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

		$criteria->compare('IdOS',$this->IdOS);
		$criteria->compare('NroPedido',$this->NroPedido,true);
		$criteria->compare('Instancia',$this->Instancia,true);
		$criteria->compare('IdCliente',$this->IdCliente);
		$criteria->compare('IdInstalador',$this->IdInstalador);
		$criteria->compare('IdEmpresa',$this->IdEmpresa);
		$criteria->compare('FechaRecepcion',$this->FechaRecepcion,true);
		$criteria->compare('HDesde',$this->HDesde,true);
		$criteria->compare('HHasta',$this->HHasta,true);
		$criteria->compare('FechaProgramada',$this->FechaProgramada,true);
		$criteria->compare('HoraProgramada',$this->HoraProgramada,true);
		$criteria->compare('ContactoCliente',$this->ContactoCliente,true);
		$criteria->compare('TipoTrabajo',$this->TipoTrabajo,true);
		$criteria->compare('Problema',$this->Problema,true);
		$criteria->compare('Trabajo',$this->Trabajo,true);
		$criteria->compare('Observaciones',$this->Observaciones,true);
		$criteria->compare('InstalacionesDatosContrato',$this->InstalacionesDatosContrato,true);
		$criteria->compare('NroContrato',$this->NroContrato,true);
		$criteria->compare('FechaReprog',$this->FechaReprog,true);
		$criteria->compare('HoraReprog',$this->HoraReprog,true);
		$criteria->compare('DesdeReprog',$this->DesdeReprog,true);
		$criteria->compare('HastaReprog',$this->HastaReprog,true);
		$criteria->compare('MotivoReprog',$this->MotivoReprog,true);
		$criteria->compare('ContactoReprog',$this->ContactoReprog,true);
		$criteria->compare('Visitada',$this->Visitada,true);
		$criteria->compare('DescripcionTareas',$this->DescripcionTareas,true);
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('Baja',$this->Baja);
		$criteria->compare('MatInstalados',$this->MatInstalados,true);
		$criteria->compare('ObservacionMat',$this->ObservacionMat,true);
		$criteria->compare('NroOT',$this->NroOT,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase width 3 models:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function searchSoporte()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

        $criteria->with = array("instalador","cliente");
        $criteria->together = true;
        $criteria->compare("0",$this->Baja);
        //$criteria->compare("NOW()",$this->FechaProgramada);
        $criteria->compare("Instalador.IdInstalador",$this->IdInstalador,true);
        $criteria->compare("Clientes.IdCliente",$this->IdCliente,true);

        // Ooss
		$criteria->compare('IdOS',$this->IdOS);
		$criteria->compare('NroPedido',$this->NroPedido,true);
		$criteria->compare('Instancia',$this->Instancia,true);
		$criteria->compare('IdCliente',$this->IdCliente);
		$criteria->compare('IdInstalador',$this->IdInstalador);
//		$criteria->compare('IdEmpresa',$this->IdEmpresa);
		$criteria->compare('FechaRecepcion',$this->FechaRecepcion,true);
//		$criteria->compare('HDesde',$this->HDesde,true);
//		$criteria->compare('HHasta',$this->HHasta,true);
		$criteria->compare('FechaProgramada',$this->FechaProgramada,true);
//		$criteria->compare('HoraProgramada',$this->HoraProgramada,true);
//		$criteria->compare('ContactoCliente',$this->ContactoCliente,true);
		$criteria->compare('TipoTrabajo',$this->TipoTrabajo,true);
//		$criteria->compare('Problema',$this->Problema,true);
		$criteria->compare('Trabajo',$this->Trabajo,true);
//		$criteria->compare('Observaciones',$this->Observaciones,true);
//		$criteria->compare('InstalacionesDatosContrato',$this->InstalacionesDatosContrato,true);
//		$criteria->compare('NroContrato',$this->NroContrato,true);
		$criteria->compare('FechaReprog',$this->FechaReprog,true);
		$criteria->compare('HoraReprog',$this->HoraReprog,true);
		$criteria->compare('DesdeReprog',$this->DesdeReprog,true);
		$criteria->compare('HastaReprog',$this->HastaReprog,true);
//		$criteria->compare('MotivoReprog',$this->MotivoReprog,true);
//		$criteria->compare('ContactoReprog',$this->ContactoReprog,true);
//		$criteria->compare('Visitada',$this->Visitada,true);
//		$criteria->compare('DescripcionTareas',$this->DescripcionTareas,true);
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('Baja',$this->Baja);
//		$criteria->compare('MatInstalados',$this->MatInstalados,true);
//		$criteria->compare('ObservacionMat',$this->ObservacionMat,true);
		$criteria->compare('NroOT',$this->NroOT,true);

        // Instalador
        $criteria->compare('instalador.InstNombre', $this->nombre_instalador, true );                                                                     

        // Cliente
        $criteria->compare('cliente.CliNombre', $this->nombre_cliente, true );
        $criteria->compare('cliente.CliProvincia', $this->provincia_cliente, true );

        return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
//            'sort'=>array(
//                'attributes'=>array(
//                    'instalador'=>array(
//                        'asc'=>'instalador.InstNombre ASC',
//                        'desc'=>'instalador.InstNombre DESC',),
//                    'cliente'=>array(
//                        'asc'=>'cliente.CliNombre ASC',
//                        'desc'=>'cliente.CliNombre DESC',),
//                  ),
//                                                                                                                                       ),
//            'defaultOrder'=>'FechaProgramada,HoraProgramada ASC',
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ooss the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
