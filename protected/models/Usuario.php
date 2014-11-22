<?php

/**
 * This is the model class for table "Usuario".
 *
 * The followings are the available columns in table 'Usuario':
 * @property string $codigo
 * @property string $nombres
 * @property string $apPat
 * @property string $apMat
 * @property string $sexo
 * @property string $fechaNac
 * @property string $direccion
 * @property integer $Cargo_id
 *
 * The followings are the available model relations:
 * @property ContactoUsuario[] $contactoUsuarios
 * @property NotaSalida[] $notaSalidas
 * @property NotaVenta[] $notaVentas
 * @property Cargo $cargo
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo, nombres, apPat, apMat, sexo, fechaNac, direccion, Cargo_id', 'required'),
			array('Cargo_id', 'numerical', 'integerOnly'=>true),
			array('codigo, nombres, apPat, apMat, direccion', 'length', 'max'=>45),
			array('sexo', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo, nombres, apPat, apMat, sexo, fechaNac, direccion, Cargo_id', 'safe', 'on'=>'search'),
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
			'contactoUsuarios' => array(self::HAS_MANY, 'ContactoUsuario', 'Usuario_codigo'),
			'notaSalidas' => array(self::HAS_MANY, 'NotaSalida', 'Usuario_codigo'),
			'notaVentas' => array(self::HAS_MANY, 'NotaVenta', 'Usuario_codigo'),
			'cargo' => array(self::BELONGS_TO, 'Cargo', 'Cargo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo' => 'Codigo',
			'nombres' => 'Nombres',
			'apPat' => 'Apellido Paterno',
			'apMat' => 'Apellido Materno',
			'sexo' => 'Sexo',
			'fechaNac' => 'Fecha de Nacimiento',
			'direccion' => 'Direccion',
			'Cargo_id' => 'Cargo',
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

		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apPat',$this->apPat,true);
		$criteria->compare('apMat',$this->apMat,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('fechaNac',$this->fechaNac,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('Cargo_id',$this->Cargo_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
