<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class GoodsCat extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'goods_cat';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'cat_id');
	protected $guarded = array();
}

?>
