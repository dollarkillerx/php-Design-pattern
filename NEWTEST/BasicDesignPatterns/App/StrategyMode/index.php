<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午9:11
 */
namespace App\StrategyMode;

class Page
{
    protected $strategy;

    function index() {
        $this->strategy->showAd();
    }

    function setStrategy(\App\StrategyMode\UserStrategy $strategy) {
        $this->strategy = $strategy;
    }

}

$page = new Page();
if (isset($_GET['female'])) {
    $strategy = new \App\StrategyMode\FemaleUserStrategy;
}else{

}
$page->setStrategy($strategy);
$page->index();