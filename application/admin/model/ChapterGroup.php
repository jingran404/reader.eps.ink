<?php
namespace app\admin\model;

use think\Model;

class ChapterGroup extends Model
{
    public function getChapterGroupsByWhere($condition = array(), $field = '*', $limit = 0, $offset = null, $orderBy = 'sort ASC')
    {
        $list = $this->field($field)->where($condition)->order($orderBy)->limit($limit, $offset)->select();
        return (empty($list)) ? [] : $list;
    }

    public function getChapterGroupByWhere($condition = array(), $field = '*')
    {
        $row = $this->field($field)->where($condition)->find();
        return (empty($row)) ? [] : $row;
    }

    public function updateChapterGroupByWhere($condition = array(), $data = array())
    {
        $data['update_time'] = time();
        return $this->update($data, $condition);
    }

    public function addChapterGroup($data)
    {
        $data['create_time'] = time();
        return $this->insert($data, false, true);
    }

}
