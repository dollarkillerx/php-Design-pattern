<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午9:08
 */

namespace App\StrategyMode;


class FemaleUserStrategy implements UserStrategy
{

    function showAd()
    {
        // TODO: Implement showAd() method.
        echo '新款女装';
    }

    function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo '女装';
    }
}