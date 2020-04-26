<?php
namespace app\file\model;
use think\Model;
class File extends Model
{
	 // 设置当前模型对应的完整数据表名称
    // protected $table = 'user';
	
	public function setFile($fileName,$path,$sortId,$type){

		$file = new File(array(
			'name' => $fileName,
			'path' => $path,
			'sort_id' => $sortId,
			'file_type' => $type,
			'creat_time' => time()
		));
		// return $user;
		$file->save();
		return $file->id;
	}
}
?>