<?php

/** 这就是刚刚生成的商品数据模型
 * This is the model class for table "mengfei_goods".
 *
 * The followings are the available columns in table 'mengfei_goods':
 * @property integer $id
 * @property integer $cate_id
 * @property string $name
 * @property string $thumb
 * @property string $pics
 * @property integer $price
 * @property integer $discount_price
 * @property integer $stock
 * @property string $start_tm
 * @property string $end_tm
 * @property integer $promote
 * @property integer $hot
 * @property integer $seq
 * @property string $intro
 * @property string $ctm
 * @property string $utm
 * @property integer $uid
 */
class MengfeiGoods extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mengfei_goods';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cate_id, name, thumb, price, stock, start_tm', 'required'),
			array('cate_id, price, discount_price, stock, promote, hot, seq, uid', 'numerical', 'integerOnly'=>true),
			array('name, thumb', 'length', 'max'=>200),
			array('pics, end_tm, intro, ctm, utm', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cate_id, name, thumb, pics, price, discount_price, stock, start_tm, end_tm, promote, hot, seq, intro, ctm, utm, uid', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cate_id' => 'Cate',
			'name' => 'Name',
			'thumb' => 'Thumb',
			'pics' => 'Pics',
			'price' => 'Price',
			'discount_price' => 'Discount Price',
			'stock' => 'Stock',
			'start_tm' => 'Start Tm',
			'end_tm' => 'End Tm',
			'promote' => 'Promote',
			'hot' => 'Hot',
			'seq' => 'Seq',
			'intro' => 'Intro',
			'ctm' => 'Ctm',
			'utm' => 'Utm',
			'uid' => 'Uid',
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
		$criteria->compare('cate_id',$this->cate_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('thumb',$this->thumb,true);
		$criteria->compare('pics',$this->pics,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('discount_price',$this->discount_price);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('start_tm',$this->start_tm,true);
		$criteria->compare('end_tm',$this->end_tm,true);
		$criteria->compare('promote',$this->promote);
		$criteria->compare('hot',$this->hot);
		$criteria->compare('seq',$this->seq);
		$criteria->compare('intro',$this->intro,true);
		$criteria->compare('ctm',$this->ctm,true);
		$criteria->compare('utm',$this->utm,true);
		$criteria->compare('uid',$this->uid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MengfeiGoods the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
