<?php

class OossController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
//			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','editar','borrar','soporte','verot','buscarot','asignar','finalizar','rechazar'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array('model'=>$this->loadModel($id),));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Ooss;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Ooss']))
		{
			$model->attributes=$_POST['Ooss'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdOS));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Ooss']))
		{
			$model->attributes=$_POST['Ooss'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IdOS));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionEditar($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        //  Selecciono renderizar en column1
        $this->layout='column1';

        if(isset($_POST['Ooss']))
        {
            $model->attributes=$_POST['Ooss'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->IdOS));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		//$this->loadModel($id)->delete();
        //	Ooss::model()->updateByPk($id,array('IdInstalador'=>$idInst));
        $model_ooss = Ooss::model()->findByPk($id);
        $model_ooss->Baja = "1";
        $model_ooss->update(array('Baja'));
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
//        if(!isset($_GET['ajax']))
//            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
//        else
        $this->actionSoporte();
	}

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionBorrar($id)
    {
        //$this->loadModel($id)->delete();
        //	Ooss::model()->updateByPk($id,array('IdInstalador'=>$idInst));
        $model_ooss = Ooss::model()->findByPk($id);
        $model_ooss->Baja = "1";
        $model_ooss->update(array('Baja'));
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
//        if(!isset($_GET['ajax']))
//            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
//        else
        $this->actionSoporte();
    }

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Ooss');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Ooss('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Ooss']))
			$model->attributes=$_GET['Ooss'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionSoporte()
	{
        //  Selecciono renderizar en column1
        $this->layout='column1';

        $model=new Ooss('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Ooss']))
			$model->attributes=$_GET['Ooss'];

		$this->render('soporte',array('model'=>$model,));
	}

	/**
	 * Manages 3 models.
	 * OOSS - Instalador - Clientes
	 */
	public function actionVerot($id)
	{
        //  Selecciono renderizar en column1
        $this->layout='column1';                          
        //  Inicializo los modelos y los vacio para trabajarlos
        $model_ooss=new Ooss();
        $model_ooss->unsetAttributes();
        $model_inst=new Instalador();
        $model_inst->unsetAttributes();
        $model_cli=new Clientes();
        $model_cli->unsetAttributes();
        //  Cargo la validacion de ajax para el modelo principal de ooss
        //$this->performAjaxValidation(array($model_ooss));
        //  Cargo los filtros sobre los modelos para enviar a la pagina
        //$model_ooss=Ooss::model()->findByPk($id);

        $criteria=new CDbCriteria();
        $criteria->compare("IdOS",$id,true);
        $model_ooss = Ooss::model()->findAll($criteria);

        //var_dump($model_ooss);

        $model_inst=Instalador::model()->findByPk($model_ooss[0]->IdInstalador);
        $model_cli=Clientes::model()->findByPk($model_ooss[0]->IdCliente);
        //  Renderizo en la pagina _form_omplete para soporte
        $this->render('_form_complete',array('o'=>$model_ooss[0], 'i'=>$model_inst, 'c'=>$model_cli));
    }

    /**
     * Asignar Instalador a OT.
     */
    public function actionAsignar($id,$idInst){
		//	Ooss::model()->updateByPk($id,array('IdInstalador'=>$idInst));                                                                       
		$model_ooss = Ooss::model()->findByPk($id);
		$model_ooss->IdInstalador = $idInst;
		$model_ooss->update(array('IdInstalador'));                                                                                                                  
		//	Actualizo la ot recien modificada
        $this->actionVerot($id);
	}

    /**
     * Finalizar OT.
     */
    public function actionFinalizar($id){
        //	Ooss::model()->updateByPk($id,array('Estado'=>'FINALIZADA'));
        $model_ooss = Ooss::model()->findByPk($id);
        $model_ooss->Estado = 'FINALIZADA';
        $model_ooss->update(array('Estado'));
        //	Actualizo la ot recien modificada
        $this->actionVerot($id);
    }

    /**
     * Rechazar OT - Falta motivo.
     */
    public function actionRechazar($id){
        //	Ooss::model()->updateByPk($id,array('Estado'=>'RECHAZADA'));
        $model_ooss = Ooss::model()->findByPk($id);
        $model_ooss->Estado = 'RECHAZADA';
        $model_ooss->update(array('Estado'));
        //	Actualizo la ot recien modificada
        $this->actionVerot($id);
    }

	/**
	 * Buscar OT por instancia - 3 models.
	 * OOSS - Instalador - Clientes
	 */
	public function actionBuscarot($insta)
	{
		//  Selecciono renderizar en column1
		$this->layout='column1';
		//  Inicializo los modelos y los vacio para trabajarlos
        $model_ooss=new Ooss();
		$model_ooss->unsetAttributes();
		$model_inst=new Instalador();
		$model_inst->unsetAttributes();
		$model_cli=new Clientes();
		$model_cli->unsetAttributes();
		//  Cargo la validacion de ajax para el modelo principal de ooss
		//$this->performAjaxValidation(array($model_ooss));
		//  Cargo los filtros sobre los modelos para enviar a la pagina
        $criteria=new CDbCriteria();
        $criteria->compare("Instancia",$insta);
        $model_ooss = Ooss::model()->findAll($criteria);
        if(sizeof($model_ooss)>0){
            $model_inst=Instalador::model()->findByPk($model_ooss[0]->IdInstalador);
            $model_cli=Clientes::model()->findByPk($model_ooss[0]->IdCliente);
            //  Renderizo en la pagina _form_omplete para soporte
            $this->render('_form_complete',array('o'=>$model_ooss[0], 'i'=>$model_inst, 'c'=>$model_cli));
        }else{
            $this->actionSoporte();
        }
	}

    /**
     * Manages 3 models.
     * OOSS - Instalador - Clientes
     */
    public function actionBuscarotXI($instancia)
    {
        //  Selecciono renderizar en column1
        $this->layout='column1';
        //  Inicializo los modelos y los vacio para trabajarlos
        $model_ooss=new Ooss();
        $model_ooss->unsetAttributes();
        $model_inst=new Instalador();
        $model_inst->unsetAttributes();
        $model_cli=new Clientes();
        $model_cli->unsetAttributes();
        //  Cargo la validacion de ajax para el modelo principal de ooss
        //$this->performAjaxValidation(array($model_ooss));
        //  Cargo los filtros sobre los modelos para enviar a la pagina
        $model_ooss=Ooss::model()->findByPk($id);
        $model_inst=Instalador::model()->findByPk($model_ooss->IdInstalador);
        $model_cli=Clientes::model()->findByPk($model_ooss->IdCliente);
        //  Renderizo en la pagina _form_omplete para soporte
        $this->render('_form_complete',array('o'=>$model_ooss, 'i'=>$model_inst, 'c'=>$model_cli));
    }
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Ooss the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Ooss::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Ooss $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ooss-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    /**
     * Performs the AJAX validation.
     * @param Ooss $model the model to be validated
     */
    protected function performAjaxValidation3($model_ooss, $model_inst, $model_cli)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='ooss-form')
        {
            echo CActiveForm::validate($model_ooss);
            Yii::app()->end();
        }
    }

}
