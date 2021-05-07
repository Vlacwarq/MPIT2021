<?php

/**
 * This is the model class for table "{{comments}}".
 *
 * The followings are the available columns in table '{{comments}}':
 * @property integer $id
 * @property string $course_name
 * @property string $mentor_name
 * @property string $comment_text
 *
 */
class Comments extends CActiveRecord
{

    public $password_repeat = "";
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{comments}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('course_name, mentor_name, comment_text', 'required'),
			array('comment_text', 'length', 'max'=>800),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, course_name, mentor_name, comment_text', 'safe', 'on'=>'search'),
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
			'course_name' => 'Заголовок отзыва',
			'mentor_name' => 'Ментор',
            'comment_text' => 'Текст отзыва',
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
		$criteria->compare('course_name',$this->course_name,true);
		$criteria->compare('mentor_name',$this->mentor_name,true);
        $criteria->compare('comment_text',$this->comment_text,true);

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
