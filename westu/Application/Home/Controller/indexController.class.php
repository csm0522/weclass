<?php
namespace Home\Controller;
use Think\Controller;
class indexController extends Controller {
    public function index(){
        if(empty(session('uid'))){
            
        }
        else{
            $this->assign('name',session('username'));
        }
        $this->display();
    }
}