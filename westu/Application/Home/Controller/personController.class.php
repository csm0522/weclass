<?php
namespace Home\Controller;
use Think\Controller;
class personController extends Controller {
    public function index(){
        $concern = M('concern')->where('uid='.session('uid'))->count();
        $fans = M('concern')->where('beid='.session('uid'))->count();
        $concernlist = M('concern')-> join('t_user on t_user.uid = t_concern.beid')->where('t_concern.uid='.session('uid'))->count();
        $fan2list = M('concern')-> join('t_user on t_user.uid = t_concern.uid')->where('beid='.session('uid'))->count();
        $myclass = M('study')-> join('t_class on t_class.cid = t_study.cid')->where('t_study.uid='.session('uid'))->order('sid DESC')->select();
        $this->assign('fan',$fans);
        $this->assign('concern',$concern);
        //list
        $this->assign('fans',$fan2list);
        $this->assign('concerns',$concernlist);
        $this->assign('username',session('username'));
        $this->assign('userid',session('uid'));
        $this->assign('course',$myclass);
        $user = M('user')->where('uid='.session('uid'))->select();
        $this->assign('intro',$user);

        $tag = M('user')->where('uid='.session('uid'))->getField(tag);
        if($tag == 2){
            echo "  <script>$('#pubbtn').hide();</script>";
        }
        $this->display();
    }
    public function personUI(){
        $user = $_GET['id'];
        $concern = M('concern')->where('uid='.$user)->count();
        $fans = M('concern')->where('beid='.$user)->count();
        $concernlist = M('concern')-> join('t_user on t_user.uid = t_concern.beid')->where('t_concern.uid='.$user)->count();
        $fan2list = M('concern')-> join('t_user on t_user.uid = t_concern.uid')->where('beid='.$user)->count();
        $myclass = M('study')-> join('t_class on t_class.cid = t_study.cid')->where('t_study.uid='.$user)->order('sid DESC')->select();
        $this->assign('fan',$fans);
        $this->assign('concern',$concern);
        //list
        $this->assign('fans',$fan2list);
        $this->assign('concerns',$concernlist);
        $this->assign('username',session('username'));
        $this->assign('userid',$user);
        $this->assign('course',$myclass);
        $intro = M('user')->where('uid='.$user)->getField(intro);
        $this->assign('intro',$intro);
        $this->display();
    }
    public function edit(){
        $concern = M('concern')->where('uid='.session('uid'))->count();
        $fans = M('concern')->where('beid='.session('uid'))->count();
        $this->assign('fan',$fans);
        $this->assign('concern',$concern);
        $this->assign('username',session('username'));
        $this->assign('userid',session('uid'));
        $intro = M('user')->where('uid='.session('uid'))->getField(intro);
        $this->assign('intro',$intro);
        $this->display('editinfo');
    }
    function changepwd(){

    }
}