<?php
namespace app\index\controller;

use app\common\controller\CommonController;

class Mailer extends CommonController
{
    public function feedback()
    {
        $data = [
            'code' => 0,
            'msg'  => null,
            'data' => []
        ];

        return json($data);
    }
}
