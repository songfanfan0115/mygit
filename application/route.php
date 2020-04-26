<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
// Route::controller('user', 'index/Index');
// 请求类型参数必须大写
Route::alias('user', 'index/Index', [
		'method' => [
			'index' => 'GET',

		],
	]);//index控制器

Route::alias('file', 'file/File', [
		'method' => [
			'test'  => 'GET',

		],
	]);
// return [
// 	'new/:id' =>'index/controller/Index':
// ]
// https://www.kancloud.cn/manual/thinkphp5/177576
// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];
