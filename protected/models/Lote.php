<?php

/**
 * This is the model class for table "Lote".
 *
 * The followings are the available columns in table 'Lote':
 * @property integer $id
 * @property string $identidicador
 * @property string $precio
 * @property integer $cantidadInicial
 * @property string $fechaVencimiento
 * @property integer $Producto_codigo
 *
 * The followings are the available model relations:
 * @property DetalleNotaIngreso[] $detalleNotaIngresos
 * @property Producto $productoCodigo
 * @property LoteProducto[] $loteProductos
 */
class Lote extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Lote';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('identidicador, precio, cantidadInicial, fechaVencimiento, Producto_codigo', 'required'),
			array('cantidadInicial, Producto_codigo', 'numerical', 'integerOnly'=>true),
			array('identidicador', 'length', 'max'=>45),
			array('precio', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, identidicador, precio, cantidadInicial, fechaVencimiento, Producto_codigo', 'safe', 'on'=>'search'),
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
			'detalleNotaIngresos' => array(self::HAS_MANY, 'DetalleNotaIngreso', 'Lote_id'),
			'productoCodigo' => array(self::BELONGS_TO, 'Producto', 'Producto_codigo'),
			'loteProductos' => array(self::HAS_MANY, 'LoteProducto', 'Lote_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'identidicador' => 'Identidicador',
			'precio' => 'Precio',
			'cantidadInicial' => 'Cantidad',
			'fechaVencimiento' => 'Fecha de Vencimiento',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('identidicador',$this->identidicador,true);
		$criteria->compare('precio',$this->precio,true);
		$criteria->compare('cantidadInicial',$this->cantidadInicial);
		$criteria->compare('fechaVencimiento',$this->fechaVencimiento,true);
		$criteria->compare('Producto_codigo',$this->Producto_codigo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lote the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
