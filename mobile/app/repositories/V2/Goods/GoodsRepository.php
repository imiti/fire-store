<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace app\repositories\v2\goods;

class GoodsRepository implements \app\classes\interfaces\RepositoryInterface
{
	protected $goods;

	public function __construct(\app\models\Goods $goods)
	{
		$this->goods = $goods;
	}

	public function all($columns = array('*'))
	{
		return $this->goods->all()->toArray();
	}

	public function paginate($perPage = 15, $columns = array('*'))
	{
	}

	public function create(array $data)
	{
	}

	public function update(array $data, $id)
	{
	}

	public function delete($id)
	{
	}

	public function find($id, $columns = array('*'))
	{
	}

	public function findBy($field, $value, $columns = array('*'))
	{
	}
}

?>