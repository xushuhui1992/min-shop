<?php
/**
 * Created by xushuhui
 * User: 徐曙辉
 * Date: 2017/2/18
 * Time: 12:35
 */
namespace app\api\validate;

class AppTokenGet extends BaseValidate
{
    protected $rule = [
        'ac' => 'require|isNotEmpty',
        'se' => 'require|isNotEmpty'
    ];
}
