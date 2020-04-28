<?php
namespace app\common;

use think\config;
use think\Exception;
use think\exception\Handle;

/**
 * 自定义异常类
 */
class ExceptionHandler extends Handle {
	/**
	 * http状态码
	 * @var unknown
	 */
	public $httpCode = 500;

	public function render(Exception $e) {
		$debug_status = config("app_debug");
		if ($debug_status) {
			return parent::render($e);
		} else {
			return $this->show(500, $e->getMessage(), [], $this->httpCode);
		}

	}

	/**
	 * 通用化API接口数据输出
	 * @param int $status  操作成功还是失败： 1 成功 2 失败
	 * @param int $errorcode 业务错误状态码
	 * @param string $msg 信息提示
	 * @param [] $result 数据
	 * @param int $httpCode http状态码
	 */
	public function show($code, $message, $data = [], $httpCode = 200) {
		$data = [
			'code' => $status,

			'msg' => $message,
			'data' => $data,
		];

		return json($data, $httpCode);

	}
}

?>