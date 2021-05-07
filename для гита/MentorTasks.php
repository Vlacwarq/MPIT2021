<?php

/**
 * This is the model class for table "{{mentor_tasks}}".
 *
 * The followings are the available columns in table '{{mentor_tasks}}':
 * @property integer $id
 * @property string $task_header
 * @property string $subtasks
 * @property string $student_name
 *
 */
class MentorTasks extends CActiveRecord
{

    public $password_repeat = "";
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{mentor_tasks}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('task_header, subtasks, student_name', 'required'),
			array('task_header', 'length', 'max'=>255),
			array('subtasks', 'length', 'max'=>800),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, task_header, subtasks, student_name', 'safe', 'on'=>'search'),
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
			'task_header' => 'Заголовок задачи',
			'subtasks' => 'Подзадачи',
            'student_name' => 'Имя ученика',
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
		$criteria->compare('task_header',$this->task_header,true);
		$criteria->compare('subtasks',$this->subtasks,true);
        $criteria->compare('student_name',$this->student_name,true);

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
