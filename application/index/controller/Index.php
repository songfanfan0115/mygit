<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $user = $this->request->param('name');
        $pass = $this->request->param('pass');
    }
}
