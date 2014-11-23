<?php

/**
 * This is the model class for table "NotaSalida".
 *
 * The followings are the available columns in table 'NotaSalida':
 * @property integer $id
 * @property string $hora
 * @property string $fecha
 * @property string $Usuario_codigo
 *
 * The followings are the available model relations:
 * @property DetalleNotaSalida[] $detalleNotaSalidas
 * @property Usuario $usuarioCodigo
 */
class NotaSalida extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'NotaSalida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hora, fecha, Usuario_codigo', 'required'),
			array('Usuario_codigo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, hora, fecha, Usuario_codigo', 'safe', 'on'=>'search'),
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
			'detalleNotaSalidas' => array(self::HAS_MANY, 'DetalleNotaSalida', 'NotaSalida_id'),
			'usuarioCodigo' => array(self::BELONGS_TO, 'Usuario', 'Usuario_codigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'hora' => 'Hora',
			'fecha' => 'Fecha',
			'Usuario_codigo' => 'Codigo de Usuario',
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
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('Usuario_codigo',$this->Usuario_codigo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NotaSalida the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
