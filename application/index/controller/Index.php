<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        // $data = Db::name('term_taxonomy')->find();
        // dump($data[term_taxonomy_id]);
        return 'hi,index,page';
    }
}
