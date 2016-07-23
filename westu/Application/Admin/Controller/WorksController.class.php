<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Page;

class worksController extends Controller
{
    public function worksList()
    {
//			print_r(get_defined_constants());exit;
        $user = M('user');
        $page = M('user')->join('RIGHT JOIN t_class ON t_user.uid = t_class.uid')->count();
        $ppp = new Page($page, 5);
        $list = $user->join('RIGHT JOIN t_class ON t_user.uid = t_class.uid')->join('JOIN t_classtype ON t_class.ctype = t_classtype.tid')->order("cid DESC")->limit($ppp->firstRow . ',' . $ppp->listRows)->select();
        $show = $ppp->show();
        $this->assign('list', $list);
        $this->assign('page', $show);//分页导航
        $this->display();

    }

    public function deleWorks()
    {
        if (IS_GET) {
            $id = $_GET['id'];
            $status = 1;
            $data = M('class')->where("cid = '$id'")->setField('tag', $status);
            $this->assign('data', $data);
            redirect(U('Works/Workslist'));
//
        }
    }

    public function unDeleWorks()
    {
        if (IS_GET) {
            $id = $_GET['id'];
            $status = 0;
            $data = M('class')->where("cid = '$id'")->setField('tag', $status);
            $this->assign('data', $data);
            redirect(U('Works/Workslist'));
//
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
