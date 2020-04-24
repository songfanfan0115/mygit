<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $user = $this->request->param('name');
        $pass = $this->request->param('pass');
        $result = new \app\index\model\Index();
        print_r($result);
        // \app\ApiResponce::success($result);
        
        // $json->success(array('name' => ,'11111' ));
    }
}
