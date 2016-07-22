<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class UserController extends Controller {
	public function login() {
		if (IS_POST) {
			$name = $_POST['login_un'];
			$pwd = md5($_POST['login_pwd']);
			$data = array('lastdate'=>Date('Y-m-d H:i:s'));
			$loginModel = new \Admin\Model\UserModel();
			if ($loginModel -> login($name, $pwd)) {
				$user=D('login')->where("LoginName='$name'")->select();
				$userlogNum = M('login') -> where("LoginName='$name'") ->setInc('loginNum');
				M('login') ->  where("LoginName='$name'")->setField($data);
				$arr = array(
					'admin'=>$user[0]['loginname'], 'adminId'=>$user[0]['loginid']
				);
				session(array('name'=>'Admin','expire'=>3600));
				session('Admin',$arr);
				$this -> success('success', U('Index/index'));
			}
			else {
				echo "<script>alert('用户名或密码不正确');</script>";
           		 $this->display('User/login');
			}
		}
		else{
            $this->display('User/login');
        }
	}
	public function logout() {
		// 清除session
		session(null);
		redirect(U('User/login'), 0);
	}

	public function UserList() {
			$user = D('login');
			$page = D('login')->join('t_user ON t_login.Loginid = t_user.Loginid')->where('t_login.loginstatus = 0') -> count();
			$ppp = new Page($page, 10);
			$list = $user -> join('RIGHT JOIN t_user ON t_login.Loginid = t_user.Loginid')->where('t_login.LoginTag = 1') ->limit($ppp->firstRow.','.$ppp->listRows)-> select();
			$show = $ppp -> show();
			$this -> assign('list', $list);
			$this -> assign('page', $show);//分页导航
			$this -> display();
	}

	public function userDel(){
        $login=D('login');
        $user=D('user');
		$id=$_GET['id'];
//		echo "<script>alert('$id');</script>";exit;
		if($id)
		{
			$setTag = $user -> where("loginid = '$id'") ->setField('tag',0);
			$setloginStatus = $login -> where("loginid = '$id'") ->setField('LoginStatus',1);
			redirect(U('User/userlist'));
		}
		else{
		echo "<script>alert('$id');</script>";exit;

		}
    }
	public function userUnLock(){
        $login=D('login');
        $user=D('user');
		$id=$_GET['id'];
		if($id)
		{
			$setTag = $user -> where("loginid = '$id'") ->setField('tag',1);
			$setloginStatus = $login -> where("loginid = '$id'") ->setField('LoginStatus',0);
			redirect(U('User/userlist'));
		}
		else{
		echo "<script>alert('$id');</script>";exit;

		}
    }

}
