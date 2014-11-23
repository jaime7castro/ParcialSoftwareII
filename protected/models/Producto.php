<?php

/**
 * This is the model class for table "Producto".
 *
 * The followings are the available columns in table 'Producto':
 * @property integer $codigo
 * @property string $descripcion
 * @property string $stock
 * @property string $precioVenta
 * @property string $imagen
 * @property integer $Laboratorio_id
 * @property string $Estanteria_codigo
 * @property integer $Presentacion_id
 *
 * The followings are the available model relations:
 * @property DetalleNotaSalida[] $detalleNotaSalidas
 * @property DetallePedido[] $detallePedidos
 * @property FuncionProducto[] $funcionProductos
 * @property Lote[] $lotes
 * @property LoteProducto[] $loteProductos
 * @property Estanteria $estanteriaCodigo
 * @property Laboratorio $laboratorio
 * @property Presentacion $presentacion
 * @property ProductoSimilar[] $productoSimilars
 * @property ProductoSimilar[] $productoSimilars1
 */
class Producto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo, descripcion', 'required'),
			array('codigo, Laboratorio_id, Presentacion_id', 'numerical', 'integerOnly'=>true),
			array('descripcion, imagen', 'length', 'max'=>45),
			array('stock, precioVenta, Estanteria_codigo', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo, descripcion, stock, precioVenta, imagen, Laboratorio_id, Estanteria_codigo, Presentacion_id', 'safe', 'on'=>'search'),
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
			'detalleNotaSalidas' => array(self::HAS_MANY, 'DetalleNotaSalida', 'Producto_codigo'),
			'detallePedidos' => array(self::HAS_MANY, 'DetallePedido', 'Producto_codigo'),
			'funcionProductos' => array(self::HAS_MANY, 'FuncionProducto', 'Producto_codigo'),
			'lotes' => array(self::HAS_MANY, 'Lote', 'Producto_codigo'),
			'loteProductos' => array(self::HAS_MANY, 'LoteProducto', 'Producto_codigo'),
			'estanteriaCodigo' => array(self::BELONGS_TO, 'Estanteria', 'Estanteria_codigo'),
			'laboratorio' => array(self::BELONGS_TO, 'Laboratorio', 'Laboratorio_id'),
			'presentacion' => array(self::BELONGS_TO, 'Presentacion', 'Presentacion_id'),
			'productoSimilars' => array(self::HAS_MANY, 'ProductoSimilar', 'Producto_codigo'),
			'productoSimilars1' => array(self::HAS_MANY, 'ProductoSimilar', 'Producto_codigoSimilar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo' => 'Codigo',
			'descripcion' => 'Descripcion',
			'stock' => 'Stock',
			'precioVenta' => 'Precio de Venta',
			'imagen' => 'Imagen',
			'Laboratorio_id' => 'Laboratorio',
			'Estanteria_codigo' => 'Estanteria',
			'Presentacion_id' => 'Presentacion',
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

		$criteria->compare('codigo',$this->codigo);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('stock',$this->stock,true);
		$criteria->compare('precioVenta',$this->precioVenta,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('Laboratorio_id',$this->Laboratorio_id);
		$criteria->compare('Estanteria_codigo',$this->Estanteria_codigo,true);
		$criteria->compare('Presentacion_id',$this->Presentacion_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
