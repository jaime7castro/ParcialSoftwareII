<?php

/**
 * This is the model class for table "LoteProducto".
 *
 * The followings are the available columns in table 'LoteProducto':
 * @property integer $Lote_id
 * @property integer $id
 * @property integer $cantidadActual
 * @property string $precioCompra
 * @property integer $Producto_codigo
 *
 * The followings are the available model relations:
 * @property Lote $lote
 * @property Producto $productoCodigo
 */
class LoteProducto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'LoteProducto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Lote_id, cantidadActual, precioCompra, Producto_codigo', 'required'),
			array('Lote_id, cantidadActual, Producto_codigo', 'numerical', 'integerOnly'=>true),
			array('precioCompra', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Lote_id, id, cantidadActual, precioCompra, Producto_codigo', 'safe', 'on'=>'search'),
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
			'lote' => array(self::BELONGS_TO, 'Lote', 'Lote_id'),
			'productoCodigo' => array(self::BELONGS_TO, 'Producto', 'Producto_codigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Lote_id' => 'Lote',
			'id' => 'ID',
			'cantidadActual' => 'Cantidad Actual',
			'precioCompra' => 'Precio de Compra',
			'Producto_codigo' => 'Producto',
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

		$criteria->compare('Lote_id',$this->Lote_id);
		$criteria->compare('id',$this->id);
		$criteria->compare('cantidadActual',$this->cantidadActual);
		$criteria->compare('precioCompra',$this->precioCompra,true);
		$criteria->compare('Producto_codigo',$this->Producto_codigo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LoteProducto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
