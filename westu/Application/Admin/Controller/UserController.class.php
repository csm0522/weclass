<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Page;

class UserController extends Controller
{
    public function login()
    {
        if (IS_POST) {
            $name = $_POST['login_un'];
            $pwd = md5($_POST['login_pwd']);
            $data = array('lastip' => get_client_ip(), 'lasttime' => Date('Y-m-d H:i:s'));
            $con['user'] = $name;
            $con['pwd'] = $pwd;
            if (M('user')->where($con)->getField(tag) == 0) {
                M('user')->where($con)->setInc('times', 1);
                M('user')->where($con)->save($data);
                $cons = M('user')->where($con)->select();
                session('uid', $cons[0]['uid']);
                session('username', $cons[0]['username']);
                redirect(U('Index/index'));
            } else {
                echo "<script>alert('密码有误');</script>";
                $this->display('User/login');
            }
        } else {
            $this->display('User/login');
        }
    }

    public
    function logout()
    {
        // 清除session
        session(null);
        redirect(U('User/login'), 0);
    }

    public
    function UserList()
    {
        $page = M('user')->where('status = 0')->count();
        $ppp = new Page($page, 10);
        $list = M('user')->order("uid DESC")->select();
        $show = $ppp->show();
        $this->assign('list', $list);
        $this->assign('page', $show);//分页导航
        $this->display();
    }

    public function userDel()
    {
        if (IS_GET) {
            $id = $_GET['id'];
            $status = 1;
            $data = M('user')->where("uid=".$id)->setField('status', $status);
            $this->assign('list', $data);
            redirect(U('User/UserList'));
        } else {
            echo "<script>请稍后再试</script>";
        }
    }

    public
    function userUnLock()
    {

        if (IS_GET) {
            $id = $_GET['id'];
            $status = 0;
            $data = M('user')->where("uid=".$id)->setField('status', $status);
            $this->assign('list', $data);
            redirect(U('User/UserList'));
//
        } else {
            echo "<script>请稍后再试</script>";
        }
    }

    public
    function Stulist()
    {
        $page = M('user')->where('status = 0')->count();
        $ppp = new Page($page, 10);
        $list = M('user')->where('tag=1')->order("uid DESC")->select();
        $show = $ppp->show();
        $this->assign('list', $list);
        $this->assign('page', $show);//分页导航
        $this->display('User/Userlist');
    }

    public
    function Tealist()
    {
        $page = M('user')->where('status = 0')->count();
        $ppp = new Page($page, 10);
        $list = M('user')->where('tag=2')->order("uid DESC")->select();
        $show = $ppp->show();
        $this->assign('list', $list);
        $this->assign('page', $show);//分页导航
        $this->display('User/Userlist');
    }
}
