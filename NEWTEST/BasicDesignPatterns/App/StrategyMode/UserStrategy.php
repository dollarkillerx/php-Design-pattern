<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午9:05
 */

namespace App\StrategyMode;


interface UserStrategy
{
    function showAd();
    function showCategory();
}