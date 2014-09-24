<?php
//确定应用名称,一般有前台应用（一般叫Home），也有后台应用（一般叫Admin）。
define('APP_NAME','Home');
//确定应用路径
define('APP_PATH','./Home/');//./是index同级目录下的home文件夹，Home后面一定要有/,没有后果严重。
//开启或关闭调试模式
define('APP_DEBUG','true');
//应用核心文件
require './ThinkPHP/ThinkPHP.php';//requiren内的文件有错则全部停止运行
?>