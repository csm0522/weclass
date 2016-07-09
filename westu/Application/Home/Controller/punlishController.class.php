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
        $data['name'] = $_POST['names'];
        $data['type'] = $_POST['types'];
        dump($data);
    }
}