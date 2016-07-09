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
        }else if($isE==1){
            $datas = array('lastip' => get_client_ip(), 'lasttime' => Date('Y-m-d H:i:s'),'isonline'=>'1');

            $user->where($data)->setInc('times',1);
            $user->where($data)->save($datas);

            $cons=$user->where($data)->select();
            if($cons[0]['status']==1){
                $res['result'] = 1;
                $res['msg'] = '您的账户被禁用,详情请联系管理员。';
            }else{
                session('uid',$cons[0]['uid']);
                session('username',$cons[0]['username']);
                session('tag',$cons[0]['tag']);
                $res['result'] = 0;
                $res['msg'] = '成功登陆';
                $res['uid']=$cons[0]['uid'];
            }

        }
        $this->ajaxReturn($res);
    }

    public function logout()
    {
        session(null);
        redirect(U('index/index'));
    }
}

?>