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
        dump($data);
        $user=M('user');
        $con['user']=$data['user'];
        $isE=$user->where($con)->count();
        if($isE=0){

        }
        else{
            $res['result']=1;
            $res['msg']='用户名已经存在';
        }
        $this->ajaxReturn($res);

    }
    public function checkusername(){
        $data['user']=$_GET['users'];
        $isE=M('user')->where($data)->count();

//        $this->ajaxReturn (json_encode($arr),'JSON');
        if($isE=0){
            $res['result']=0;
            $res['msg']='用户名已经存在';
        }
        else{
            $res['result']=1;
            $res['msg']='用户名已经存在';
        }

        $this->ajaxReturn($res,'JSON');

    }
}
?>