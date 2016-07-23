<?php
namespace Home\Controller;

use Think\Controller;

class loginController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function logins()
    {
        $data['user'] = $_POST['username'];
        $data['pwd'] = $_POST['pwd'];
        $user = M('user');
        $isE = $user->where($data)->count();
        if ($isE == 0) {
            $res['result'] = 1;
            $res['msg'] = '用户名或密码不正确';
        } else if ($isE == 1) {
            $cons = $user->where($data)->select();
            $datas = array('lastip' => get_client_ip(), 'lasttime' => Date('Y-m-d H:i:s'));

            $user->where($data)->setInc('times', 1);
            $user->where($data)->save($datas);

            if ($cons[0]['status'] == 1) {
                $res['result'] = 1;
                $res['msg'] = '您的账户被禁用,详情请联系管理员。';
            } else {
                session('uid', $cons[0]['uid']);
                session('username', $cons[0]['username']);
                session('tag', $cons[0]['tag']);
                $res['result'] = 0;
                $res['msg'] = '成功登陆';
                $res['uid'] = $cons[0]['uid'];
            }

        }
        $this->ajaxReturn($res);
    }

    public function logout()
    {
        session(null);
        redirect(U('index/index'));
    }

    public function changepwd()
    {
        $data['pwd'] = $_POST['olds'];
        $user = M('user');
        $pwd = $user->where('uid=' . session('uid'))->getField(pwd);
        if ($data['pwd'] == $pwd) {
            $cons['pwd'] = $_POST['news'];
            if ($user->where('uid=' . session('uid'))->save($cons)) {
                $res['res'] = 0;
                $res['msg'] = '修改密码成功';
                session(null);
            } else {
                $res['res'] = 1;
                $res['msg'] = '网络错误,请稍后再试';
            }
        } else {
            $res['res'] = 2;
            $res['msg'] = '原密码不正确';
        }

        $this->ajaxReturn($res);
    }

    public function editinfo()
    {
        $flag = 0;
        $data["username"] = $_POST["username"];
        $data["email"] = $_POST["email"];
        $data["intro"] = $_POST["intro"];
        $user = M("user");
        if ($user->where('uid=' . session('uid'))->save($data)) {
            $res['res'] = 0;
            $res['msg'] = "个人信息修改成功。";
        } else {
            $res['res'] = 1;
            $res['msg'] = "个人信息修改失败。";
        }
        $this->ajaxReturn($res);
    }
}

?>