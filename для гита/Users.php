<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $user_about
 * @property string $isMentor
 * @property string $name
 * @property string $surname
 * @property string $birth_date
 * @property string $sex
 * @property string $mentor_name
 * @property string $profession
 *
 */
class Users extends CActiveRecord
{

    public $password_repeat = "";
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{users}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, password_repeat, email', 'required'),
            array('username, email', 'unique', 'message' =>'Пользователь с таким логином или емайлом уже зарегистрирован.'),
            array('password_repeat', 'password_repeat_check'),
            array('email', 'email'),
			array('username, password, password_repeat, email, user_about, name, surname, birth_date, sex', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, password_repeat, email, user_about, name, surname, birth_date, sex, avatar_link', 'safe', 'on'=>'search'),
		);
	}


    public function password_repeat_check($attribute,$params)
    {
         if($this->password_repeat != $this->password) {
             $this->addError('password_repeat', "Ваши пароли не совпадают");
        }
        
    }

//	public function parseExcelFile(){
//        require_once 'Classes/PHPExcel.php';
//        $excel = PHPExcel_IOFactory::load($this->excelFile);
//
//        $excel->setActiveSheetIndex(0);
//
//        $text = $excel->getActiveSheet()->getCell('A1')->getValue();
//        $this->parsedText = $text;
//    }
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
			'id' => 'ID',
			'username' => 'Логин',
			'password' => 'Пароль',
            'password_repeat' => 'Подтверждение пароля',
            'email' => 'E-mail',
            'user_about' => 'О себе: ',
            'hours' => 'Кол-во часов работы',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'birth_date' => 'Дата рождения',
            'sex' => 'Пол',
            'mentor_name' => 'Ментор',
            'profession' => 'Специальность',
            'avatar_link' => 'URL изображения для аватара',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
        $criteria->compare('email',$this->email,true);
        $criteria->compare('user_about',$this->user_about,true);
        $criteria->compare('hours',$this->hours,true);
        $criteria->compare('name',$this->name,true);
        $criteria->compare('surname',$this->surname,true);
        $criteria->compare('birth_date',$this->birth_date,true);
        $criteria->compare('sex',$this->sex,true);
        $criteria->compare('isMentor',$this->isMentor,true);
        $criteria->compare('mentor_name',$this->mentor_name,true);
        $criteria->compare('profession',$this->mentor_name,true);
        $criteria->compare('avatar_link',$this->avatar_link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Page the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	
    
}
