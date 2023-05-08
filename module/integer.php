<?php

require_once("syntax.php");

class Integer{

    private $range;
    private $default;

    public function __construct($range , $default){
        $this->range = $range;
        $this->default = $default;
    }

    private function opt(){

        if($this->range != ""){
            $rangeSplited = explode("-",$this->range);
            $min = $rangeSplited[0];
            $max = $rangeSplited[1];

            return rand($min,$max);
        }
        return $this->default;
    }

    public function __toString(){
        return "{$this->opt()}";
    }

}