<?php

namespace app\common;
use think\Validate;
/**
 * 验证基类
 */
class BaseValidate extends Validate
{
	public function checkData($data,$scene){
		
	
		$result = $this->scene($scene)->check($data);
		

		if(!$result){
			$msg = $this->getError();
			exit(\app\common\ApiResponce::checkFailed($msg));
		}else{
			return true;
		}
	}
}


?>
