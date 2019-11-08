<?php
# test.php

class Home {
    /**
     * 定义一个变量 用于apiGroup 因为不支持直接输入中文
     * @apiDefine test 测试
     */

    /**
     * @api {post} /Index/getVip 获取vip列表   页面加载时自动获取
     * @apiName GetVip
     * @apiGroup test
     *
     * @apiParam {string} req1 请求值
     *
     * @apiSuccess {String} res1 返回值1
     * @apiSuccessExample Success-Response:
     * {
     * 　　res1:"test"
     * }
     */
    public function test(){

    }
}