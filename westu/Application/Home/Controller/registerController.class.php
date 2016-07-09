<?php
namespace Home\Controller;
use Think\Controller;
class registerController extends Controller
{
    public function index(){
        $this->display();
    }
    public function registers(){
        $data['user']=$_POST['users'];
        $data['username']=$_POST['name'];
        $data['pwd']=$_POST['pwds'];
        $data['tag']=$_POST['tag'];
//        dump($data);
        $user=M('user');
        $con['user']=$data['user'];
        $isE=$user->where($con)->count();
//        echo $isE;
        if($isE==0){
            if($user->add($data)){
                $res['result']=0;
                $res['msg']='注册成功';
            }
            else{
                $res['result']=1;
                $res['msg']='请稍后再试';
            }
        }
        else{
            $res = array(
                'result' => '1',
                'msg' => 用户名已经存在
            );
        }
        $this->ajaxReturn($res);

    }
    public function checkusername(){
        $data['user']=$_GET['users'];
        $isE=M('user')->where($data)->count();
        if($isE==0){
            $res['result']=0;
        }
        else{
            $res['result']=1;
            $res['msg']='用户名已经存在';
        }

        $this->ajaxReturn($res,'JSON');
    }
}
?>