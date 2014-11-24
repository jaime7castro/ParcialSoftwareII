<?php

/**
 * This is the model class for table "DetallePedido".
 *
 * The followings are the available columns in table 'DetallePedido':
 * @property string $Pedido_id
 * @property string $id
 * @property integer $Producto_codigo
 * @property integer $cantidad
 *
 * The followings are the available model relations:
 * @property Pedido $pedido
 * @property Producto $productoCodigo
 */
class DetallePedido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'DetallePedido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Pedido_id, Producto_codigo, cantidad', 'required'),
			array('Producto_codigo, cantidad', 'numerical', 'integerOnly'=>true),
			array('Pedido_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Pedido_id, id, Producto_codigo, cantidad', 'safe', 'on'=>'search'),
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
			'pedido' => array(self::BELONGS_TO, 'Pedido', 'Pedido_id'),
			'productoCodigo' => array(self::BELONGS_TO, 'Producto', 'Producto_codigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Pedido_id' => 'Pedido',
			'id' => 'ID',
			'Producto_codigo' => 'Codigo del Producto',
			'cantidad' => 'Cantidad',
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

		$criteria->compare('Pedido_id',$this->Pedido_id,true);
		$criteria->compare('id',$this->id,true);
		$criteria->compare('Producto_codigo',$this->Producto_codigo);
		$criteria->compare('cantidad',$this->cantidad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetallePedido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
