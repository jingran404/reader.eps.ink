<?php
namespace app\home\model;

use think\facade\Cache;
use think\Model;

class Category extends Model
{
    /**
     * 查询所有分类
     * @Author: eps
     * @return array|\PDOStatement|string|\think\Collection
     */
    public function getCategorys()
    {
        $categoryListCache = Cache::get('categoryList');
        if ($categoryListCache) {
            return $categoryListCache;
        } else {
            $list = $this->where('status', 1)->select();
            Cache::set('categoryList', $categoryListCache, 3600);
        }
        return (empty($list)) ? [] : $list;
    }

    /**
     * 根据分类别名查询分类
     * @Author: eps
     * @param $categoryAlias
     * @return array|null|\PDOStatement|string|Model
     */
    public function getCategoryByAlias($categoryAlias)
    {
        $row = $this->where('category_alias', $categoryAlias)->find();
        return (empty($row)) ? [] : $row;
    }

    /**
     * 根据分类名查询分类
     * @Author: eps
     * @param $categoryName
     * @return array|null|\PDOStatement|string|Model
     */
    public function getCategoryByCategoryName($categoryName)
    {
        $row = $this->where('category_name', $categoryName)->find();
        return (empty($row)) ? [] : $row;
    }
}
