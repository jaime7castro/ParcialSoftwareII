<?php

/**
 * This is the model class for table "ContactoUsuario".
 *
 * The followings are the available columns in table 'ContactoUsuario':
 * @property integer $id
 * @property string $Usuario_codigo
 * @property integer $TipoContacto_id
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property TipoContacto $tipoContacto
 * @property Usuario $usuarioCodigo
 */
class ContactoUsuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ContactoUsuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Usuario_codigo, TipoContacto_id, descripcion', 'required'),
			array('TipoContacto_id', 'numerical', 'integerOnly'=>true),
			array('Usuario_codigo, descripcion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Usuario_codigo, TipoContacto_id, descripcion', 'safe', 'on'=>'search'),
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
			'tipoContacto' => array(self::BELONGS_TO, 'TipoContacto', 'TipoContacto_id'),
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
			'Usuario_codigo' => 'Usuario Codigo',
			'TipoContacto_id' => 'Tipo Contacto',
			'descripcion' => 'Descripcion',
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
		$criteria->compare('Usuario_codigo',$this->Usuario_codigo,true);
		$criteria->compare('TipoContacto_id',$this->TipoContacto_id);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ContactoUsuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
