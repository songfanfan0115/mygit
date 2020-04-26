<?php
namespace app\file\controller;
use think\Controller;
use app\file\model\File as FileModel;

class File extends Controller
{
    public function upload(){
    	// 获取表单上传文件 例如上传了001.jpg
	    $file = request()->file('file');
	   
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    if($file){

	        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
	        
	        if($info){
	        	Config::load(APP_PATH.'file/config.php');
	        	$sortId = config('banner');
	        	$result = (new FileModel())->setFile($info->getFilename(),$info->getSaveName(),$sortId,$info->getExtension());
	           
	        	\app\common\ApiResponce::success($result);
	        }else{
	            // 上传失败获取错误信息
	            \app\common\ApiResponce::err($file->getError());
	        }
	    }else{
	    	// \app\common\AipRespance::checkFailed('');
	    	\app\common\ApiResponce::checkFailed('文件不可为空');
	    }
    }


    public function ceshi(){
    	// Config::load(APP_PATH.'file/config.php');
	    $sortId = config('file');
	    print_r($sortId);
    }
}

?>
