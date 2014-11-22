<?php

/**
 * This is the model class for table "Cliente".
 *
 * The followings are the available columns in table 'Cliente':
 * @property integer $ci
 * @property string $nombres
 * @property string $apPat
 * @property string $apMat
 * @property string $sexo
 * @property string $fechaNac
 * @property string $direccion
 *
 * The followings are the available model relations:
 * @property ContactoPersona[] $contactoPersonas
 * @property Pedido[] $pedidos
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ci, nombres, apPat, sexo', 'required'),
			array('ci', 'numerical', 'integerOnly'=>true),
			array('nombres, apPat, apMat', 'length', 'max'=>45),
			array('sexo', 'length', 'max'=>1),
			array('direccion', 'length', 'max'=>300),
			array('fechaNac', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ci, nombres, apPat, apMat, sexo, fechaNac, direccion', 'safe', 'on'=>'search'),
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
			'contactoPersonas' => array(self::HAS_MANY, 'ContactoPersona', 'Cliente_ci'),
			'pedidos' => array(self::HAS_MANY, 'Pedido', 'Cliente_ci'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ci' => 'Ci',
			'nombres' => 'Nombres',
			'apPat' => 'Apellido Paterno',
			'apMat' => 'Apellido Materno',
			'sexo' => 'Sexo',
			'fechaNac' => 'Fecha de Nacimiento',
			'direccion' => 'Direccion',
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

		$criteria->compare('ci',$this->ci);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apPat',$this->apPat,true);
		$criteria->compare('apMat',$this->apMat,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('fechaNac',$this->fechaNac,true);
		$criteria->compare('direccion',$this->direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
