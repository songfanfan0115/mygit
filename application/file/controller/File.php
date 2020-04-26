<?php
namespace app\file\controller;

use app\file\model\File as FileModel;
use think\Controller;

/**
 * 附件
 */
class File extends Controller {
	/**
	 * [uploadFile 上传文件]
	 * @return [json] []
	 */
	public function uploadFile() {
		$file = request()->file('file');
		//$msg=$file->validate(['size'=>15678,'ext'=>'jpg,png,gif']);
		if ($file) {
			$this->upload($file);
		} else {
			\app\common\ApiResponce::checkFailed('文件不可为空');
		}
	}
	/**
	 * [upload 上传到服务器制定目录，存库]
	 * @param  [type] $info [file对象]
	 * @return [type]       [description]
	 */
	public function upload($info) {

		$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');

		if ($info) {

			$sortId = config('project.sort')['banner'];
			$result = (new FileModel())->setFile($info->getFilename(), $info->getSaveName(), $sortId, $info->getExtension());

			\app\common\ApiResponce::success($result);
		} else {
			// 上传失败获取错误信息
			\app\common\ApiResponce::err($file->getError());
		}

	}

}
