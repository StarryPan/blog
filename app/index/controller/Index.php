<?php
declare (strict_types = 1);

namespace app\index\controller;

use app\common\controller\CommonController;

class Index extends CommonController
{
    public function index()
    {
        $showOther = 0;
        $detailsItems = [
            ['name' => '年龄', 'value' => 26],
            ['name' => '性别', 'value' => '男'],
            ['name' => '学历', 'value' => '本科'],
            ['name' => '身高', 'value' => 172],
            ['name' => '婚姻', 'value' => '未婚'],
            ['name' => '工作', 'value' => '2018'],
        ];

        $this->assign('showOther', $showOther);
        $this->assign('detailsItems', $detailsItems);
        return $this->fetch();
    }
}
