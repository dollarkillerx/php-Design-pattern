<?php
namespace test;
function time()
{
    echo __NAMESPACE__;

}

namespace MySpace;
function time(){
    echo __NAMESPACE__;
}
time();
echo '<br>';
\test\time();