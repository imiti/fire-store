<?php
//zend by 旺旺ecshop2012所有 禁止倒卖 一经发现停止任何服务
function classLoader($class)
{
	$path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
	$file = __DIR__ . DIRECTORY_SEPARATOR . $path . '.php';

	if (file_exists($file)) {
		require_once $file;
	}
}

spl_autoload_register('classLoader');

?>
