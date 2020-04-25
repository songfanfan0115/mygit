<?php
namespace app\common;
/**
 * api返回数据
 */
class ApiResponce
{

	public static function success($data=array()){
		$code = 200;
		$msg = 'success';
		self::json($code,$msg,$data);
	}

	public static function err($msg,$data=array()){
		$code = 500;
		$msg = $msg ? $msg : '操作失败';
		self::json($code,$msg,$data);
	}

	public static function checkFailed($msg,$data=array()){
		$code = 300;
		$msg = $msg ? $msg : '参数校验错误';
		self::json($code,$msg,$data);
	}




	public static function json($code,$msg,$data,$type="JSON"){
		
        $result=array(
                'code'=>$code,
                'msg'=>$msg,
                'data'=>$data
        );
        switch (strtoupper($type)){
            case 'JSON' :
                // 返回JSON数据格式到客户端 包含状态信息
                header('Content-Type:application/json; charset=utf-8');
                exit(json_encode($result));
            case 'XML'  :
                // 返回xml格式数据
                header('Content-Type:text/xml; charset=utf-8');
                exit(xml_encode($result));
            case 'JSONP':
                // 返回JSON数据格式到客户端 包含状态信息
                header('Content-Type:application/json; charset=utf-8');
                $handler  =   isset($_GET[C('VAR_JSONP_HANDLER')]) ? $_GET[C('VAR_JSONP_HANDLER')] : C('DEFAULT_JSONP_HANDLER');
                exit($handler.'('.json_encode($result).');');
            case 'EVAL' :
                // 返回可执行的js脚本
                header('Content-Type:text/html; charset=utf-8');
                exit($result);
                
        }
	}
}



?>