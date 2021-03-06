<?php
namespace app\index\validate;
use app\common\BaseValidate;

/**
 * 验证类
 */
class Index extends BaseValidate {
	protected $rule = [
		'id' => 'require',
		'name' => 'require|max:25',
		'age' => 'number|between:1,120',
		'email' => 'email',
	];

	protected $message = [
		'id.require' => '用户id不可为空',
		'name.require' => '名称必须',
		'name.max' => '名称最多不能超过25个字符',
		'age.number' => '年龄必须是数字',
		'age.between' => '年龄只能在1-120之间',
		'email' => '邮箱格式错误',
	];

	protected $scene = [
		'id' => ['id'],
		// 'edit' => ['name'],

	];
}

?>