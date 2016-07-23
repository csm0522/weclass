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
            if (M('user')->where($con)->getField(tag) == 0 ) {
                M('user')->where($con)->setInc('times', 1);
                M('user')->where($con)->save($data);
                $cons= M('user')->where($con)->select();
                session('uid', $cons[0]['uid']);
                session('username', $cons[0]['username']);
                redirect(U('Index/index'));
            }else{
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
        $list =  M('user')->select();
        $show = $ppp->show();
        $this->assign('list', $list);
        $this->assign('page', $show);//分页导航
        $this->display();
    }

    public function userDel()
    {
        $login = D('login');
        $user = D('user');
        $id = $_GET['id'];
//		echo "<script>alert('$id');</script>";exit;
        if ($id) {
            $setTag = $user->where("loginid = '$id'")->setField('tag', 0);
            $setloginStatus = $login->where("loginid = '$id'")->setField('LoginStatus', 1);
            redirect(U('User/userlist'));
        } else {
            echo "<script>alert('$id');</script>";
            exit;

        }
    }

    public
    function userUnLock()
    {
        $login = D('login');
        $user = D('user');
        $id = $_GET['id'];
        if ($id) {
            $setTag = $user->where("loginid = '$id'")->setField('tag', 1);
            $setloginStatus = $login->where("loginid = '$id'")->setField('LoginStatus', 0);
            redirect(U('User/userlist'));
        } else {
            echo "<script>alert('$id');</script>";
            exit;

        }
    }
    public
    function Stulist()
    {
        $page = M('user')->where('status = 0')->count();
        $ppp = new Page($page, 10);
        $list =  M('user')->where('tag=1')->select();
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
        $list =  M('user')->where('tag=2')->select();
        $show = $ppp->show();
        $this->assign('list', $list);
        $this->assign('page', $show);//分页导航
        $this->display('User/Userlist');
    }
}
