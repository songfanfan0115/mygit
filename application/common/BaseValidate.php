<?php

namespace app\common;
use think\Validate;

/**
 * 验证基类
 */
class BaseValidate extends Validate {
	public function checkData($data, $scenes) {
		// $data = $rule;
		// $newRule = [];
		// foreach ($data as $key => $val) {
		// 	if (in_array($key, $scene[$scenes])) {
		// 		$newRule[$key] = $val;
		// 	}
		// }

		$result = $this->scene($scene)->check($data);
		// $result = $this->check($data, $newRule);
		if (!$result) {
			$msg = $this->getError();
			exit(\app\common\ApiResponce::checkFailed($msg));
		} else {
			return true;
		}
	}
}

?>
