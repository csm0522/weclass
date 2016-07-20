<?php
namespace Home\Controller;
use Think\Controller;
class punlishController extends Controller {
    public function index(){
        $types=M('classtype')->select();
        $this->assign('type',$types);
        $this->display();
    }
    public function impclass(){
        //上传课程
        $config = array(
            'rootPath' => './Public/',
            'savePath' => './upload/classTX/',
        );
        $ULImg = new\Think\Upload($config);
        $re = $ULImg->uploadOne($_FILES['imgs']);
        if ($re) {
            $UPImgPath = $re['savepath'] . $re['savename'];
            $_POST['imgs'] = $UPImgPath;
        }

        $data = array(
            'uid' => session('uid'),
            'name'=>$_POST['cname'],
            'ctype'=>$_POST['type'],
            'img' => $_POST['imgs'],
            'video'=>$_POST['video'],
            'cintro' => $_POST['intro'],
        );
        if(empty($data['img'])){
            $data['img']='./upload/classTX/2016-07-20/578f1cad312d4.jpg';
        }
        if(empty($data['video'])){
            $this->Error("上传视频不得为空");
            return;
        }

        if(M('class')->add($data)) {
            $this->Success("视频上次成功");
        }
    }
}













