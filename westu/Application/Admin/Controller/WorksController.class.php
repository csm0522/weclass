<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class worksController extends Controller {
	public function worksList() {
//			print_r(get_defined_constants());exit;
			$user = M('user');
			$page = M('user')->join('RIGHT JOIN t_class ON t_user.uid = t_class.uid')-> count();
			$ppp = new Page($page,5);
			$list = $user ->join('RIGHT JOIN t_class ON t_user.uid = t_class.uid')->join('JOIN t_classtype ON t_class.ctype = t_classtype.tid')->limit($ppp->firstRow.','.$ppp->listRows)-> select();
			$show = $ppp -> show();
			$this -> assign('list', $list);
			$this -> assign('page', $show);//分页导航
			$this -> display();

	}

	public function essaysList() {
			$user = D('login');
			$page = D('login')->join('RIGHT JOIN t_user ON t_login.Loginid = t_user.Loginid')->join('RIGHT JOIN t_artical ON t_user.userid = t_artical.userid')->where('upLoadType = 2')-> count();
			$ppp = new Page($page,5);
			$list = $user -> join('RIGHT JOIN t_user ON t_login.Loginid = t_user.Loginid')->join('RIGHT JOIN t_artical ON t_user.userid = t_artical.userid')->where('upLoadType = 2')->limit($ppp->firstRow.','.$ppp->listRows)-> select();
			$show = $ppp -> show();
			$this -> assign('list', $list);
			$this -> assign('page', $show);//分页导航
			$this -> display();
	}

	public function editWorks() {
		if(IS_GET)
		{
			$id = $_GET['id'];
			$data = M('artical')->where("ariticalid = '$id'")->find();
			$this->assign('data',$data);
			$this -> display('Works/editworks');
//
		}
		else if(IS_POST)
		{
			if($_POST['fenlei']){
			switch($_POST['fenlei']){
				case "UI" : $type = 1;break;
				case 'PM' : $type = 2;break;
				case 'MH' : $type = 3;break;
				case 'WY' : $type = 4;break;
				case 'MD' : $type = 5;break;
				case 'DP' : $type = 6;break;
				case 'PT' : $type = 7;break;
				default :  $type = 8;break;
				}
			}
			$id=$_POST["hiddenid"];
			$content = htmlspecialchars(stripslashes($_POST['content']));
			$newData = array('Title'=>$_POST['title'],'type'=>$type,'Content'=>$content);
			$upd = M('artical')->where("ariticalid='$id'")->save($newData);
			redirect(U('Works/workslist'));
		}
	}
	public function deleEssay() {
		if(IS_GET)
		{
			$id = $_GET['id'];
			$status = 0;
			$data = M('artical')->where("ariticalid = '$id'")->setField('status',$status);
			$this->assign('data',$data);
			redirect(U('Works/essayslist'));
//
		}
	}
	public function unDeleEssay() {
		if(IS_GET)
		{
			$id = $_GET['id'];
			$status = 1;
			$data = M('artical')->where("ariticalid = '$id'")->setField('status',$status);
			$this->assign('data',$data);
			redirect(U('Works/essayslist'));
//
		}
	}
	public function deleWorks() {
		if(IS_GET)
		{
			$id = $_GET['id'];
			$status = 0;
			$data = M('artical')->where("ariticalid = '$id'")->setField('status',$status);
			$this->assign('data',$data);
			redirect(U('Works/Workslist'));
//
		}
	}
	public function unDeleWorks() {
		if(IS_GET)
		{
			$id = $_GET['id'];
			$status = 1;
			$data = M('artical')->where("ariticalid = '$id'")->setField('status',$status);
			$this->assign('data',$data);
			redirect(U('Works/Workslist'));
//
		}
	}
	public function unRepWorks() {
		if(IS_GET)
		{
			$id = $_GET['id'];
			$reptag = 0;
			$data = M('artical')->where("ariticalid = '$id'")->setField('RepTag',$reptag);
			$this->assign('data',$data);
			redirect(U('Works/Workslist'));
//
		}
	}
	public function editEssay() {
		if(IS_GET)
		{
			$id = $_GET['id'];
			$data = M('artical')->where("ariticalid = '$id'")->find();
			$this->assign('data',$data);
			$this -> display('Works/editEssay');
//
		}
		else if(IS_POST)
		{
			if($_POST['fenlei']){
			switch($_POST['fenlei']){
				case "JC" : $ArticalType = 1;break;
				case 'GD' : $ArticalType = 2;break;
				case 'SJ' : $ArticalType = 3;break;
				default :  $ArticalType = 4;break;
			}
		}
			$id=$_POST["hiddenid"];
			$content = htmlspecialchars(stripslashes($_POST['content']));
			$intro = $_POST['intro'];
			$newData = array('Title'=>$_POST['title'],'ArticalType'=>$ArticalType,'Content'=>$content,'intro'=>$intro);
			$upd = M('artical')->where("ariticalid='$id'")->save($newData);
			redirect(U('Works/essayslist'));
		}
	}
	public function ueditor(){
    	$data = new \Org\Util\Ueditor();
		echo $data->output();
    }
}
