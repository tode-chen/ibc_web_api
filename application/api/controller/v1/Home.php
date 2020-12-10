<?php

namespace app\api\controller\v1;

// use app\api\model\Term as TermModel;
// use app\api\model\Posts as PostsModel;
use think\Controller;
use think\Db;
use think\Request;

class Home extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function getCategoryList(Request $request)
    {
        try {
            $sql = "select a.term_id as cat_id, a.*, b.parent from wp_terms as a left join wp_term_taxonomy as b on a.term_id = b.term_taxonomy_id where b.parent = 2 and b.taxonomy = 'category'";
            $res = Db::query($sql);
            return setResponse($res);
        } catch (\Exception $e) {
            // return setCatch($e-> getMessage());
        }
    }
    public function getHelpList(Request $request)
    {
        try {
            $sql = "select a.id,a.post_title,b.term_taxonomy_id as cat_id from wp_posts as a left join wp_term_relationships as b on a.id = b.object_id where b.term_taxonomy_id in (select term_taxonomy_id  from wp_term_taxonomy WHERE parent = 2 and taxonomy = 'category')";
            $res = Db::query($sql);
            return setResponse($res);
        } catch (\Exception $e) {
            // return setCatch($e-> getMessage());
        }
    }
    public function getArticleDetail(Request $request)
    {
        try {
            $params= $request-> param();
            $sql = "select * from wp_posts where id = $params[id] limit 1";
            $res = Db::query($sql);
            return setResponse($res[0]);
        } catch (\Exception $e) {
            // return setCatch($e-> getMessage());
        }
    }
}
