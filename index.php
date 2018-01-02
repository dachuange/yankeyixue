<?php

//	$a = sendSmsMessage("17091001305");
//	var_dump($a);
//	//新版短信接口函数，创蓝接口
//  function sendSmsMessage ($mobile, $content = '')
//  {
//      $code = guid();
//      if (empty($content)) {
//          $content = '您的验证码是' . $code;
//      }
//      //$content .= "【e站装屏】";
//      $post_data = array();
//      $post_data['account'] = iconv('GB2312', 'GB2312', "vip_yzzp01");
//      $post_data['pswd'] = iconv('GB2312', 'GB2312', "Tch567132");
//      $post_data['mobile'] = $mobile;
//      $post_data['msg'] = $content;
//      $url = 'http://222.73.117.156/msg/HttpBatchSendSM?';//这里填写创蓝给你接口地址
//      $o = "";
//      foreach ($post_data as $k => $v) {
//          $o .= "$k=" . urlencode($v) . "&";
//      }
//      $post_data = substr($o, 0, -1);
//      $ch = curl_init();
//      curl_setopt($ch, CURLOPT_POST, 1);
//      curl_setopt($ch, CURLOPT_HEADER, 0);
//      curl_setopt($ch, CURLOPT_URL, $url);
//      curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
//      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//      $result = curl_exec($ch);
//      $res = explode(",", $result);
//      if ($res[1] == 0) {
//          return array('status' => true, 'code' => $code);
//      }
//      return array('status' => false,'info' => $result);
//  }
//
//	// 生成4位验证码
//  function guid ()
//  {
//      if (function_exists('com_create_guid')) {
//          return com_create_guid();
//      } else {
//          mt_srand((double)microtime() * 10000);//optional for php 4.2.0 and up.
//          $charid = strtoupper(md5(uniqid(rand(), true)));
//          $uuid = substr($charid, 0, 4);
//          $uuid = str_replace("A", "1", $uuid);
//          $uuid = str_replace("B", "2", $uuid);
//          $uuid = str_replace("C", "3", $uuid);
//          $uuid = str_replace("D", "4", $uuid);
//          $uuid = str_replace("E", "5", $uuid);
//          $uuid = str_replace("F", "6", $uuid);
//
//          return $uuid;
//      }
//  }exit;


// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录   此处修改
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单
