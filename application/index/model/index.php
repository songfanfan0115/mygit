<?php
namespace app\index\model;
use think\Model;
class Index extends Model
{
	 // 设置当前模型对应的完整数据表名称
    // protected $table = 'user';
	
	public function index($id){

		// $user = Index::get($id);
		// return $user;
		return array(1=>'sdsd')
	}
}
?>