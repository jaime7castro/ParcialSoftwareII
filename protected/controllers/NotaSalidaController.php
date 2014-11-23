<?php

class NotaSalidaController extends Controller
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
            return array(array('CrugeAccessControlFilter'));
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
				'actions'=>array('create','update'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new NotaSalida;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['NotaSalida']))
		{
			$model->attributes=$_POST['NotaSalida'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['NotaSalida']))
		{
			$model->attributes=$_POST['NotaSalida'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('NotaSalida');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new NotaSalida('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['NotaSalida']))
			$model->attributes=$_GET['NotaSalida'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return NotaSalida the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=NotaSalida::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param NotaSalida $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='nota-salida-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        /////////////////Controlador para el ROL DE GUARDI//////////////////
        public function actionViewDNS($id){
            $modelNS= DetalleNotaSalida::model();         
            $model=$modelNS->findAllByAttributes(array('NotaSalida_id'=>$id));
            $this->render('viewDNS',array('model'=>$model,'id'=>$id));
        }
        
        public function actionUpdateDNS($id){
            $model= DetalleNotaSalida::model()->findByPk($id);
            if(isset($_POST['DetalleNotaSalida']))
            {
                $model->attributes=$_POST['DetalleNotaSalida'];
                if($model->save()){
                    //mostrando mensaje FLASH
                    Yii::app()->user->setFlash('success','Detalle Nota de Salida editado con exito');
                    $this->redirect(array('viewDNS','id'=>$model->NotaSalida_id));
                }
            }       
            $this->render('updateDNS',array('model'=>$model));
        }
        
        public function actionCreateDNS($id){
            $model=  new DetalleNotaSalida();
            if(isset($_POST['DetalleNotaSalida'])){
                $model->attributes=$_POST['DetalleNotaSalida'];
                if($model->save()){
                    //mostrando mensaje FLASH
                    Yii::app()->user->setFlash('success','Detalle Nota de Salida guardado con exito');
                    $this->redirect(array('viewDNS','id'=>$model->NotaSalida_id));
                }
            }       
            $this->render('createDNS',array('model'=>$model,'id'=>$id));
        }
        
        public function actionDeleteDNS($id){
            $model= DetalleNotaSalida::model()->findByPk($id);
            $model->delete();
            $this->redirect(array('viewDNS','id'=>$model->NotaSalida_id));
        }
}
