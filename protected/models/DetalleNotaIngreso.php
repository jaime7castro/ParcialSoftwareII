<?php

/**
 * This is the model class for table "DetalleNotaIngreso".
 *
 * The followings are the available columns in table 'DetalleNotaIngreso':
 * @property integer $NotaIngreso_id
 * @property integer $id
 * @property integer $Lote_id
 * @property integer $cantidad
 *
 * The followings are the available model relations:
 * @property Lote $lote
 * @property NotaIngreso $notaIngreso
 */
class DetalleNotaIngreso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'DetalleNotaIngreso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NotaIngreso_id, Lote_id, cantidad', 'required'),
			array('NotaIngreso_id, Lote_id, cantidad', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NotaIngreso_id, id, Lote_id, cantidad', 'safe', 'on'=>'search'),
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
			'notaIngreso' => array(self::BELONGS_TO, 'NotaIngreso', 'NotaIngreso_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NotaIngreso_id' => 'Nota de Ingreso',
			'id' => 'ID',
			'Lote_id' => 'Lote',
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

		$criteria->compare('NotaIngreso_id',$this->NotaIngreso_id);
		$criteria->compare('id',$this->id);
		$criteria->compare('Lote_id',$this->Lote_id);
		$criteria->compare('cantidad',$this->cantidad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetalleNotaIngreso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
