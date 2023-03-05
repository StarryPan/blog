<?php

namespace app\common\controller;

use app\BaseController;

/**
 * Class CommonController
 * @package app\common\controller
 */
class CommonController extends BaseController
{
    use \app\common\traits\JumpTrait;
    
    /**
     * 模板布局, false取消
     * @var string|bool
     */
    protected $layout = false;

    
    /**
     * 初始化方法
     */
    protected function initialize()
    {
        parent::initialize();
        $this->layout && $this->app->view->engine()->layout($this->layout);
    }

    /**
     * 模板变量赋值
     * @param string|array $name 模板变量
     * @param mixed $value 变量值
     * @return mixed
     */
    public function assign($name, $value = null)
    {
        return $this->app->view->assign($name, $value);
    }

    /**
     * 解析和获取模板内容 用于输出
     * @param string $template
     * @param array $vars
     * @return mixed
     */
    public function fetch($template = '', $vars = [])
    {
        return $this->app->view->fetch($template, $vars);
    }

    /**
     * 重写验证规则
     * @param array $data
     * @param array|string $validate
     * @param array $message
     * @param bool $batch
     * @return array|bool|string|true
     */
    public function validate(array $data, $validate, array $message = [], bool $batch = false)
    {
        try {
            parent::validate($data, $validate, $message, $batch);
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
        return true;
    }
}
