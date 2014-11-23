<?php

/**
 * This is the model class for table "DetalleNotaSalida".
 *
 * The followings are the available columns in table 'DetalleNotaSalida':
 * @property integer $NotaSalida_id
 * @property integer $id
 * @property integer $Producto_codigo
 * @property string $cantidad
 * @property string $justificacion
 *
 * The followings are the available model relations:
 * @property NotaSalida $notaSalida
 * @property Producto $productoCodigo
 */
class DetalleNotaSalida extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'DetalleNotaSalida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NotaSalida_id, Producto_codigo, cantidad, justificacion', 'required'),
			array('NotaSalida_id, Producto_codigo', 'numerical', 'integerOnly'=>true),
			array('cantidad', 'length', 'max'=>10),
			array('justificacion', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NotaSalida_id, id, Producto_codigo, cantidad, justificacion', 'safe', 'on'=>'search'),
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
			'notaSalida' => array(self::BELONGS_TO, 'NotaSalida', 'NotaSalida_id'),
			'productoCodigo' => array(self::BELONGS_TO, 'Producto', 'Producto_codigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NotaSalida_id' => 'Nota Salida',
			'id' => 'ID',
			'Producto_codigo' => 'Producto Codigo',
			'cantidad' => 'Cantidad',
			'justificacion' => 'Justificacion',
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

		$criteria->compare('NotaSalida_id',$this->NotaSalida_id);
		$criteria->compare('id',$this->id);
		$criteria->compare('Producto_codigo',$this->Producto_codigo);
		$criteria->compare('cantidad',$this->cantidad,true);
		$criteria->compare('justificacion',$this->justificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetalleNotaSalida the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
