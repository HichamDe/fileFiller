<?php

class Owner{

    private string $varName;
    private array $vars;

    public function __construct(string $varName, array $vars){
        $this->varName = $varName;
        $this->vars = $vars;
    }

    private function opt(){

        print_r($this->vars);
        return $this->vars[$this->varName];
        
    }

    public function __toString(){
        return "{$this->opt()}";
    }

}