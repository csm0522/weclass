<?php
namespace Home\Controller;

use Think\Controller;

class courseController extends Controller
{
    public function index()
    {
        $types = M('classtype')->select();
        $list = M('class')->where('tag=0')->order("num DESC")->select();
        $this->assign('courselist', $list);
        $this->assign('type', $types);
        $this->display('list');
    }

    public function showlist()
    {
        $typeid = $_GET['id'];
        $types = M('classtype')->select();
        $list = M('class')->where('tag=0')->where('ctype=' . $typeid)->select();
        $this->assign('courselist', $list);
        $this->assign('type', $types);
        $this->display('list');
    }

    public function showdetail()
    {
        $classid = $_GET['id'];
        M("class")->where('cid=' . $classid)->setInc('num', 1);
        $play = M('class')->where('cid=' . $classid)->select();
        $teacher = M('user')->where("uid=" . $play[0]['uid'])->select();
        $this->assign('course', $play);
        $this->assign('teacher', $teacher);
        $this->display('course');
    }

    public function addclass()
    {
        if (session('uid')) {
            $cid = $_POST['id'];
            $con['cid'] = $cid;
            $con['uid'] = session('uid');
            $num = M('study')->where($con)->count();
            $res['res'] = 1;

            if ($num == 0) {
                $data['cid'] = $cid;
                $data['uid'] = session('uid');
                $data['createtime'] = Date('Y-m-d H:i:s');
                M('study')->where($con)->add($data);
                $res['res'] = 0;
                $res['msg'] = '收藏成功';
                $this->ajaxReturn($res);
            } else {
                $res['msg'] = '您已经关注';
                $this->ajaxReturn($res);
            }
        } else {
            $res['res'] = 2;
            $res['msg'] = '请先登录';
            $this->ajaxReturn($res);
        }
    }
    public function checkstatus(){
        if (session('uid')) {
            $cid = $_POST['id'];
            $con['cid'] = $cid;
            $con['uid'] = session('uid');
            $num = M('study')->where($con)->count();
            if ($num == 0) {
                $res['res'] = 1;
                $res['msg'] = '加入收藏';
                $this->ajaxReturn($res);
            } else {
                $res['res'] = 0;
                $res['msg'] = '已收藏';
                $this->ajaxReturn($res);
            }
        } else {
            $res['res'] = 1;
            $res['msg'] = '加入收藏';
            $this->ajaxReturn($res);
        }
    }
}

?>