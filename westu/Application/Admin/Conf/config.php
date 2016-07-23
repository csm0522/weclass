<?php
return array(
    'TMPL_PARSE_STRING' => array(
        '__HomeJS__' => __ROOT__ . '/Public/Home/javascript',
        '__HomeCSS__' => __ROOT__ . '/Public/Home/css',
        '__HomeIMG__' => __ROOT__ . '/Public/Home/image',
        '__AdminJS__' => __ROOT__ . '/Public/Admin/js',
        '__AdminCSS__' => __ROOT__ . '/Public/Admin/css',
        '__AdminIMG__' => __ROOT__ . '/Public/Admin/images',
        '__AdminPublic__' => __ROOT__ . '/Application/Admin/View/Public/Admin',
    ),
    //***********************************SESSION设置**********************************
    'SESSION_OPTIONS'         =>  array(
        'name'                =>  'BJYSESSION',                    //设置session名
        'expire'              =>  1200,                     //SESSION保存15天24*3600*15,
        'use_trans_sid'       =>  1,                               //跨页传递
        'use_only_cookies'    =>  0,                               //是否只开启基于cookies的session的会话方式
    ),
    'SESSION_AUTO_START' => true,
    //数据库连接配置
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'weclass',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  't_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    'DB_CHARSET' => 'utf8',


    'SHOW_PAGE_TRACE'   => true,

    'URL_MODEL' =>1,//先关掉debug

    //url地址大小写不敏感设置
    'URL_CASE_INSENSITIVE'  =>  false,
    'URL_ROUTER_ON'   => true,
);