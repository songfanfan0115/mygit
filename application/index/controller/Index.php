<?php
namespace app\index\controller;
use app\common\GetParams;
use think\Controller;

// use app\index\validate\
class Index extends Controller {
	public function index() {

		$param = new GetParams;
		$params = $param->index(["id"]);
		print_r($params);
		// \app\common\GetParams::get();
		// $result = new User;
		// $a = $result->index(1);
		// $a = $result->index(1);

		// \app\common\ApiResponce::success($a);
		// $data=array('name'=>'测试文字十多年看见爱上百年大计喀什市的不能萨克斯的分别缴纳时间段包括那接口上半年的');
		// (new \app\index\validate\Index())->checkData($data,'edit');

	}
}

?>