<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class OssConfigure extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'oss_configure';
	public $timestamps = false;
	protected $fillable = array('bucket', 'keyid', 'keysecret', 'is_cname', 'endpoint', 'regional', 'is_use');
	protected $guarded = array();
}

?>
