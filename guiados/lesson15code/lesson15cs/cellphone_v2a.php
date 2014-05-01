<?php

class Cellphone {

    protected $_phoneNumber;
    public $model;
    public $color;

    public function __construct($phoneNumer, $model, $color) {
        $this->phoneNumber = $phoneNumer;
        $this->model = $model;
        $this->color = $color;
    }

    public function getPhoneNumer() {
        return $this->_phoneNumber;
    }

}
