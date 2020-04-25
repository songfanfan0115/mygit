<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User;
class Index extends Controller
{
    public function index()
    {
        $user = $this->request->param('name');
        $pass = $this->request->param('pass');
       
        $result = new User;
        $a = $result->index(1);
        // $a = $result->index(1);
        \app\common\ApiResponce::success($a);
        
        
    }
}
