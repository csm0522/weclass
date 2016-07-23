<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Page;

class IndexController extends Controller
{
    public function index()
    {
        if (session('uid') != null) {
            if (M('user')->where('uid=' . session('uid'))->getField(tag) != 0) {
                $this->display('User/login');
            } else {
                $list = M('user')->select();
                $worksNum = M('user')->where('tag=2')->select();
                $couresNum = M('class')->select();
                $adminInfo = M('user')->where('uid=' . session('uid'))->select();
                $this->assign('list', $list);
                $this->assign('worksNum', $worksNum);
                $this->assign('couresNum', $couresNum);
                $this->assign('adminInfo', $adminInfo[0]);
                $this->display('Index/index');
            }
        } else {
            $this->display('User/login');
        }

    }
}
