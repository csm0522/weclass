<?php
namespace Home\Controller;
use Think\Controller;
class indexController extends Controller {
    public function index(){
        $course  = M('class')->where('tag=0')->join('t_classtype on tid = t_Class.ctype')->order("num DESC")->limit(4)->select();
        $this->assign('course',$course);
        $courselist = M('class')->where('tag=0')->join('t_classtype on tid = t_Class.ctype')->order("cid DESC")->limit(12)->select();
        $this->assign("list",$courselist);
        $this->display();
    }
}