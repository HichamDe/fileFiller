<?php


class Boolean{

    private $default;

    public function __construct( $default){
        $this->default = $default;
    }
    
    private function opt(){
        
        if($this->default != "") return $this->default;
        return rand(true,false) ? "true" : "false";
        
    }

    public function __toString(){
        return "{$this->opt()}";
    }

}