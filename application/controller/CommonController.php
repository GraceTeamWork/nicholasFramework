<?php
namespace Application\controller;

class CommonController
{
    public $params = [];
    public function __construct()
    {
        $this->params = $_POST;
    }
}
?>