<?php
namespace Home\Controller;
use Think\Controller;
class courseController extends Controller
{
    public function index(){
        $types=M('classtype')->select();
        $list=M('class')->select();
        $this->assign('courselist',$list);
        $this->assign('type',$types);
        $this->display('list');
    }
    public function showlist(){
        $typeid = $_GET['id'];
        $types=M('classtype')->select();
        $list=M('class')->where('ctype='.$typeid)->select();
        $this->assign('courselist',$list);
        $this->assign('type',$types);
        $this->display('list');
    }
    public function showdetail(){
        $classid = $_GET['id'];
        
        $play=M('class')->where('cid='.$classid)->select();
        $this->assign('course',$play);
        $this->display('course');
    }
}
?>