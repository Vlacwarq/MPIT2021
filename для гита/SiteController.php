<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	   /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
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
                'actions'=>array('index','view', 'userregistration', 'login', 'page', 'testForms'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','update', 'lk', 'logout'),
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

    public function loadModel($username)
    {
        $model=Users::model()->findByAttributes(array('username' => $username));
        // if($model===null)
        //     throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex($username = null, $page_id = null)
	{
		$models = array();

		$model0 = new LoginForm; // для авторизации
 
		$model1 = new Users; // для регистрации

		$model2 = $this->loadModel($username); // для личного кабинета

		$model3 = new Comments; // таблица с отзывами

		$model4 = new CourseForm; // таблица заявок на курс

		$model5 = new MentorTasks; // таблица заданий ментора

		$lk_var = $page_id;
	
		array_push($models, $model0, $model1, $model2, $model3, $model4, $model5);

		// if it is ajax validation request
		// if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		// {		
		// 	echo CActiveForm::validate($model);	
		// 	Yii::app()->end();
		// }

		// collect user input data
		// if(isset($_POST['Users']))
		// {
		// 	$models[1]->attributes=$_POST['Users'];

		// 	// validate user input and redirect to the previous page if valid
		// 	if($models[1]->save() && $models[1]->validate()) {
		// 		$this->redirect(array('/site/login'));
		// 	} 
		// }


		if(isset($_POST['Users']))
		{	

					// if it is ajax validation request
		
			// условие не пашет
			if(Yii::app()->user->isGuest) {
				$models[1]->attributes=$_POST['Users'];

				// validate user input and redirect to the previous page if valid
				if($models[1]->save() && $models[1]->validate()) {
					$this->redirect(array('/site/index'));
				} else {
					$lk_var = '666';
					$this->redirect(array('/site/index?page_id=666'));
				}

			} else {

				$existed_model = $this->loadModel(Yii::app()->user->name);
				if($_POST['Users']['name'] != null)
				$existed_model->name=$_POST['Users']['name'];

				if($_POST['Users']['surname'] != null)
				$existed_model->surname=$_POST['Users']['surname'];

				if($_POST['Users']['user_about'] != null)
				$existed_model->user_about=$_POST['Users']['user_about'];

				if($_POST['Users']['birth_date'] != null)
					$existed_model->birth_date=$_POST['Users']['birth_date'];

				if($_POST['Users']['profession'] != null)
					$existed_model->profession=$_POST['Users']['profession'];

				if($existed_model->save(false)) {
					$this->redirect(array('/site/index'));
				}
			}
		}


		if(isset($_POST['Comments'])) {
			$models[3]->attributes=$_POST['Comments'];
			$models[3]->student_name = Yii::app()->user->name;
			if($models[3]->save() && $models[3]->validate()) {
				$this->redirect(array('/site/index'));
			} 
		}

		if(isset($_POST['CourseForm'])) {
			$models[4]->attributes=$_POST['CourseForm'];
			if($models[4]->save() && $models[4]->validate()) {
				$this->redirect(array('/site/index'));
			} 
		}

		if(isset($_POST['MentorTasks'])) {
			$models[5]->attributes=$_POST['MentorTasks'];
			$models[5]->task_status = "new";
			if($models[5]->save() && $models[5]->validate()) {
				$this->redirect(array('/site/index'));
			} 
		}
	

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{		
			echo CActiveForm::validate($model);	
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$models[0]->attributes=$_POST['LoginForm'];

			// Раскоментить после загрузки на сервер
			// if($model->login() && $model->validate()) {
			// 	$this->redirect('http://vlacwarq.zzz.com.ua/mpit-backend-2021/index.php/site/lk?username=' . $model->username);
			// } 
			// Закоментить после загрузки на сервер:
			if($models[0]->login() && $models[0]->validate()) {
				$this->redirect('/mpit-backend-2021-prod/index.php/site/index?username=' . $models[0]->username);
			} 
			
			
		}

        if($username != null) {
        	$models[2] = $this->loadModel($username);
            $this->renderPartial('index',array(
                'model'=>$models,
                'page_id' => $lk_var,
            ));
        } else {

            $this->renderPartial('index',array(
            'model'=>$models,
            'page_id' => $lk_var,
        ));
        }

	}





	// ЭКШН ДЛЯ ТЕСТА ФОРМ САЙТА
	public function actionTestForms($username = null, $page_id = null)
	{
		$models = array();

		$model0 = new LoginForm; // для авторизации
 
		$model1 = new Users; // для регистрации

		$model2 = $this->loadModel($username); // для личного кабинета

		$model3 = new Comments; // таблица с отзывами

		$model4 = new CourseForm; // таблица заявок на курс

		$model5 = new MentorTasks; // таблица заданий ментора

		$lk_var = $page_id;
	
		array_push($models, $model0, $model1, $model2, $model3, $model4, $model5);

		// if it is ajax validation request
		// if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		// {		
		// 	echo CActiveForm::validate($model);	
		// 	Yii::app()->end();
		// }

		// collect user input data



		if(isset($_POST['Comments'])) {
			$models[3]->attributes=$_POST['Comments'];
			if($models[3]->save() && $models[3]->validate()) {
				$this->redirect(array('/site/login'));
			} 
		}

		if(isset($_POST['CourseForm'])) {
			$models[4]->attributes=$_POST['CourseForm'];
			if($models[4]->save() && $models[4]->validate()) {
				$this->redirect(array('/site/login'));
			} 
		}

		if(isset($_POST['MentorTasks'])) {
			$models[5]->attributes=$_POST['MentorTasks'];
			if($models[5]->save() && $models[5]->validate()) {
				$this->redirect(array('/site/login'));
			} 
		}
	

        if($username != null) {
        	$models[2] = $this->loadModel($username);
            $this->renderPartial('test_forms',array(
                'model'=>$models,
                'page_id' => $lk_var,
            ));
        } else {

            $this->renderPartial('test_forms',array(
            'model'=>$models,
            'page_id' => $lk_var,
        ));
        }

	}

/**
	 * Displays the login page
	 */
	public function actionUserRegistration()
	{
		$model = new Users;
	

		// if it is ajax validation request
		// if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		// {		
		// 	echo CActiveForm::validate($model);	
		// 	Yii::app()->end();
		// }

		// collect user input data
		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];

			// validate user input and redirect to the previous page if valid
			if($model->save() && $model->validate()) {
				$this->redirect(array('/site/login'));
			} 
			
			
		}

		// display the login form
		$this->renderPartial('registration',array('model'=>$model));
	}

/**
	 * Displays the login page
	 */
	public function actionLk($username)
	{
		$this->renderPartial('lk',array(
            'model'=>$this->loadModel($username),
        ));

	}

    public function actionFunction()
    {
        $model=new ContactForm;
        $input = Yii::app()->request->getPost('input');
        // для примера будем приводить строку к верхнему регистру
        $output = mb_strtoupper($input, 'utf-8');

        // если запрос асинхронный, то нам нужно отдать только данные
        if(Yii::app()->request->isAjaxRequest){
            echo CHtml::encode($output);
            // Завершаем приложение
            Yii::app()->end();
        }
        else {
            // если запрос не асинхронный, отдаём форму полностью
            $this->render('ajax_form', array(
                'input'=>$input,
                'output'=>$output,
                'model' => $model,
            ));
        }
    }

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model = new LoginForm;
	

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{		
			echo CActiveForm::validate($model);	
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];

			// Раскоментить после загрузки на сервер
			// if($model->login() && $model->validate()) {
			// 	$this->redirect('http://vlacwarq.zzz.com.ua/mpit-backend-2021/index.php/site/lk?username=' . $model->username);
			// } 
			// Закоментить после загрузки на сервер:
			if($model->login() && $model->validate()) {
				$this->redirect('/mpit-backend-2021-prod/index.php/site/lk?username=' . $model->username);
			} 
			
			
		}

		// display the login form
		$this->renderPartial('login',array('model'=>$model));
	}

	// ПРИМЕР АJAX ВАЛИДАЦИИ
	// $model=new User;             
 //    $this->performAjaxValidation($model);  
	// 	if(isset($_POST['User'])) {
 //                        $model->attributes=$_POST['User'];
 //                        $valid=$model->validate();            

	// 		if($valid){
 //                           //do anything here
 //                        echo CJSON::encode(array('status'=>'success'));
	// 					Yii::app()->end();
	// 				} else {
 //                        $error = CActiveForm::validate($model);

 //                       if($error!='[]')
 //                       		echo $error;

 //                       Yii::app()->end();
 //                     }

 //               }

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}