<?php

namespace Admin\Model;
use Think\Model;
class UserModel extends Model{

	function login($name,$pwd) {
		$res = $this -> query("select * from t_login where LoginName='$name' and LoginPwd='$pwd' And LoginTag = 0");
        return $res;
	}

    function checknamepwd($name,$pwd){
        $info=$this->getByuser_name($name);
        if ($info!=null){
            if ($info['login_pwd']===$pwd){
                return $info;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

}



