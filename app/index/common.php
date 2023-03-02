<?php
// 这是系统自动生成的公共文件

if (!function_exists('sysconfig')) {

    /**
     * 获取系统配置信息
     * @param $group
     * @param null $name
     * @return array|mixed
     */
    function sysconfig($group, $name = null)
    {
        $where = ['group' => $group];
        // $value = empty($name) ? Cache::get("sysconfig_{$group}") : Cache::get("sysconfig_{$group}_{$name}");
        // if (empty($value)) {
        //     if (!empty($name)) {
        //         $where['name'] = $name;
        //         $value = \app\index\model\SystemConfig::where($where)->value('value');
        //         Cache::tag('sysconfig')->set("sysconfig_{$group}_{$name}", $value, 3600);
        //     } else {
        //         $value = \app\index\model\SystemConfig::where($where)->column('value', 'name');
        //         Cache::tag('sysconfig')->set("sysconfig_{$group}", $value, 3600);
        //     }
        // }
        return $value;
    }
}