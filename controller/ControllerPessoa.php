<?php

class ControllerPessoa {

    private $_method;
    private $modelPessoa;

    public function __construct($model) {
        
        $this->_modelPessoa = $model;
        $this->method = $_SERVER['REQUEST_METHOD'];

    }

}

?>