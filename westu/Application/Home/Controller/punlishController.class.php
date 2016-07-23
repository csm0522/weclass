<?php
namespace Home\Controller;

use Org\Util\Date;
use Think\Controller;

class punlishController extends Controller
{
    public function index()
    {
        if (session('uid')) {
            $tag=M('user')->where('uid='.session('uid'))->getField(tag);
            if($tag==2){
                $types = M('classtype')->select();
                $this->assign('type', $types);
                $this->display();
            }
           else{
               $this->error("您没有发布课程权限。",'/westu/index.php/Home/index/index');
           }
        } else {
            $this->error("由于长时间未操作,已被系统移除,请重新登录", '/westu/index.php/Home/login/index');
        }
    }

    public function impclass()
    {
        //上传课程

        if (session('uid')) {
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
                'name' => $_POST['cname'],
                'ctype' => $_POST['type'],
                'img' => $_POST['imgs'],
                'video' => $_POST['video'],
                'cintro' => $_POST['intro'],
                'createttime' =>Date('Y-m-d H:i:s'),
            );
            if (empty($data['img'])) {
                $data['img'] = './upload/classTX/2016-07-20/578f1cad312d4.jpg';
            }
            if (empty($data['video'])) {
                $this->Error("上传视频不得为空");
                return;
            }

            if (M('class')->add($data)) {
                $this->Success("视频上次成功");
            }
        } else {
            $this->error("请重新登录", '/westu/index.php/Home/login/index');
        }
    }
}













