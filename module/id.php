<?php


class Id{

    private int $value;

    public function __construct(int $value){
        $this->value = $value;
    }

    public function __toString(){
        return "$this->value";
    }

}