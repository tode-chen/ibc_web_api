<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});
// http://ibc.com/api/public
// http://ibc.com/api/public/api/v1/home/getCategoryList
// http://ibc.com/api/v1/home/getCategoryList
Route::get('api/:version/home/getCategoryList', 'api/:version.Home/getCategoryList');
// http://api.cn/api/v1/home/getHelpList
Route::get('api/:version/home/getHelpList', 'api/:version.Home/getHelpList');
// http://api.cn/api/v1/home/getArticleDetail?id=30
Route::get('api/:version/home/getArticleDetail', 'api/:version.Home/getArticleDetail');
return [

];
// Route::get('hello/:name', 'index/hello');
