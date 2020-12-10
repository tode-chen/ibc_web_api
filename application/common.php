<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

function setResponse ($res) {
	if(!empty($res)){
		$data = $res ;
    	$code = 200 ;
    	$msg = '操作成功' ;
    }else{
    	$data = $res ;
    	$code = 204 ;
    	$msg = '操作失败，或无该记录' ;
    }
    return ['data'=>$data,'code'=>$code,'msg'=>$msg];
}

function setCatch($msg, $code= 400, $status= 400){
    return json(['data'=> '', 'code'=> $code, 'msg'=> $msg], $status);
}