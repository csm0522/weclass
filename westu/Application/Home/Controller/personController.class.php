<?php
namespace Home\Controller;
use Think\Controller;
class personController extends Controller {
    public function index(){
        $concern = M('concern')->where('uid='.session('uid'))->count();
        $fans = M('concern')->where('beid='.session('uid'))->count();
        $this->assign('fan',$fans);
        $this->assign('concern',$concern);
        $this->assign('username',session('username'));
        $intro = M('user')->where('uid='.session('uid'))->getField(intro);
        $this->assign('intro',$intro);
        $this->display();
    }
    public function edit(){
        $concern = M('concern')->where('uid='.session('uid'))->count();
        $fans = M('concern')->where('beid='.session('uid'))->count();
        $this->assign('fan',$fans);
        $this->assign('concern',$concern);
        $this->assign('username',session('username'));
        $intro = M('user')->where('uid='.session('uid'))->getField(intro);
        $this->assign('intro',$intro);
        $this->display('editinfo');
    }
}