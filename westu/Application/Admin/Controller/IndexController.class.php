<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Page;

class IndexController extends Controller
{
    public function index()
    {
        if (session('uid') != null) {
            if (session('Admin')) {
                $name = session('Admin');
                $this->assign('name', $name);
            }
            $list = M('user')->select();
            $worksNum = M('user')->where('tag=2')->select();
            $couresNum = M('class')->select();
            $adminInfo = M('user')->where('uid=' . session('uid'))->select();
            $this->assign('list', $list);
            $this->assign('worksNum', $worksNum);
            $this->assign('couresNum', $couresNum);
            $this->assign('adminInfo', $adminInfo[0]);
            $this->display('Index/index');
        } else {
            $this->display('User/login');
        }
    }

    public function showss()
    {
        $this->display('');
    }


    public function BusinessList()
    {
        $user = D('login');
        $page = D('login')->join('RIGHT JOIN t_company ON t_login.Loginid = t_company.Loginid')->where('t_login.LoginTag = 1')->count();
        $ppp = new Page($page, 3);
        $list = $user->join('RIGHT JOIN t_company ON t_login.Loginid = t_company.Loginid')->where('t_login.LoginTag = 1 and t_company.tag = 1')->limit($ppp->firstRow . ',' . $ppp->listRows)->select();
        $show = $ppp->show();
//			show_bug($list);
        $this->assign('list', $list);
        $this->assign('page', $show);//分页导航
        $this->display();
    }


}
