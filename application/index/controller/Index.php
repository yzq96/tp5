<?php

namespace app\index\controller;

use app\common\model\Lunar;
use app\common\model\Lunar1;
use app\common\model\LunarSolarConverter;
use think\facade\Env;
use app\common\model\Table;

class Index
{

    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
//        print_r(Table::insert(['name'=>'yang','age'=>24,'note'=>'hd']));
//        print_r(Table::all());
    }

    /**
     * @param string $name
     * @return string
     *
     * @route("nongli")
     */
    public function hello($name = 'ThinkPHP5')
    {
        /*$lunar = new Lunar();
        $nongli = $lunar->convertSolarToLunar('2020', '07', '20');
        dump($nongli);
        $weekarray = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];

        dump($weekarray[date("w", time())]);*/



    }

    /**
     * @param $solar
     *
     * @route("solartolunar")
     */
    public function SolarToLunar(){
//        dump(LunarSolarConverter::SolarToLunar('2020-07-20'));
        $lunar = new Lunar1();
        dump($lunar->convertSolarToLunar(2020,07,20));
    }

}
