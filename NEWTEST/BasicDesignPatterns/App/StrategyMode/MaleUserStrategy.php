<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午9:10
 */

namespace App\StrategyMode;


class MaleUserStrategy implements UserStrategy
{

    function showAd()
    {
        // TODO: Implement showAd() method.
        echo 'cos女装';
    }

    function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo '电子产品';
    }
}