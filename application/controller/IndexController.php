<?php
namespace Application\controller;

class IndexController extends CommonController
{
    public function Welcome()
    {
        echo "sh</br>";
        require dirname(__FILE__).'/../view/wecome.php';
    }
}

?>