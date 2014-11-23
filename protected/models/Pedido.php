<?php

/**
 * This is the model class for table "Pedido".
 *
 * The followings are the available columns in table 'Pedido':
 * @property string $id
 * @property string $hora
 * @property string $fecha
 * @property integer $Cliente_ci
 *
 * The followings are the available model relations:
 * @property DetallePedido[] $detallePedidos
 * @property NotaVenta[] $notaVentas
 * @property Cliente $clienteCi
 */
class Pedido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Pedido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hora, fecha, Cliente_ci', 'required'),
			array('Cliente_ci', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, hora, fecha, Cliente_ci', 'safe', 'on'=>'search'),
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
			'detallePedidos' => array(self::HAS_MANY, 'DetallePedido', 'Pedido_id'),
			'notaVentas' => array(self::HAS_MANY, 'NotaVenta', 'Pedido_id'),
			'clienteCi' => array(self::BELONGS_TO, 'Cliente', 'Cliente_ci'),
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
			'Cliente_ci' => 'Ci del Cliente',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('Cliente_ci',$this->Cliente_ci);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pedido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
