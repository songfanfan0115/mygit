<?php
namespace app\common;
// use think\Request;

/**
 *	获取请求参数
 */
class GetParams {
	/**
	 * [index 获取请求参数]
	 * @param  array  $array [参数key]
	 * @param  string $type  [请求类型]
	 * @return [type]        [返回参数]
	 */
	public function index($array = [], $type = "param") {
		$request = \think\Request::instance();

		switch ($type) {
		case 'param':
			return $this->result($request->param(), $array);
			break;

		case 'get':
			return $this->result($request->get(), $array);
			break;

		case 'post':
			return $this->result($request->post(), $array);
			break;

		default:
			# code...
			break;
		}

	}
	/**
	 * [result 过滤请求参数]
	 * @param  [type] $all    [description]
	 * @param  [type] $result [description]
	 * @return [type]         [description]
	 */
	public function result($all, $result) {
		$param = array();

		if (empty($result)) {
			$param = $all;
		} else {
			foreach ($all as $key => $value) {
				if (in_array($key, $result)) {
					$param[$key] = ($value == "undefined" || $value == "null") ? "" : $value;
				}
			}
		}

		return $param;
	}

}

?>