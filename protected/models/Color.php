<?php
class Color extends CActiveRecord
{
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function tableName()
	{
		return "{{color}}";
	}
	
	public static  function getallcolor(){
		$array=array();
		$criteria=new CDbCriteria();
		$criteria->condition='pbh=0';
		$criteria->order='id desc';
		$row = self::model()->findAll($criteria);
		foreach ($row as $v){
			$array[]=$v->attributes;
		}
		return $array;
	}
	
	public function getcolor($bh,$param=false){
		$attributes=array('bh'=>$bh);
		$row=self::model()->findByAttributes($attributes);
		if ($param){
			$row=$row->attributes;
		}
		return $row;
	}
	
	public function  getmaxid(){
		$criteria=new CDbCriteria();
		$criteria->order='id desc';
		$criteria->limit='1';
		$result =self::model()->find($criteria);
		if ($result)
			return $result->bh;
		return false;
	}
	
	
	

}