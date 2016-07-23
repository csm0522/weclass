<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Page;

class worksController extends Controller
{
    public function worksList()
    {
        if(session('uid')){
            $user = M('user');
            $page = M('user')->join('RIGHT JOIN t_class ON t_user.uid = t_class.uid')->count();
            $ppp = new Page($page, 5);
            $list = $user->join('RIGHT JOIN t_class ON t_user.uid = t_class.uid')->join('JOIN t_classtype ON t_class.ctype = t_classtype.tid')->order("cid DESC")->limit($ppp->firstRow . ',' . $ppp->listRows)->select();
            $show = $ppp->show();
            $this->assign('list', $list);
            $this->assign('page', $show);//分页导航
            $this->display();
        }
        else {
            echo "<script>请先登陆</script>";
            redirect(U('User/login'), 0);
        }

    }

    public function deleWorks()
    {
        if (session('uid')) {
            if (IS_GET) {
                $id = $_GET['id'];
                $status = 1;
                $data = M('class')->where("cid = '$id'")->setField('tag', $status);
                $this->assign('data', $data);
                redirect(U('Works/Workslist'));
//
            } else {
                echo "<script>请稍后再试</script>";
            }
        } else {
            echo "<script>请先登陆</script>";
            redirect(U('User/login'), 0);
        }
    }

    public function unDeleWorks()
    {
        if (session('uid')) {
            if (IS_GET) {
                $id = $_GET['id'];
                $status = 0;
                $data = M('class')->where("cid = '$id'")->setField('tag', $status);
                $this->assign('data', $data);
                redirect(U('Works/Workslist'));
//
            } else {
                echo "<script>请稍后再试</script>";
            }
        } else {
            echo "<script>请先登陆</script>";
            redirect(U('User/login'), 0);
        }
    }

//    public function unRepWorks()
//    {
//        if (IS_GET) {
//            $id = $_GET['id'];
//            $reptag = 0;
//            $data = M('artical')->where("ariticalid = '$id'")->setField('RepTag', $reptag);
//            $this->assign('data', $data);
//            redirect(U('Works/Workslist'));
////
//        }
//    }
}
