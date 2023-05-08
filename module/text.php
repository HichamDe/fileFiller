<?php

class Text{

    private $length;
    private string $default;

    public function __construct($length , string $default){
        $this->length = $length;
        $this->default = $default;
    }


    private function opt(){

        $letters = [
            "a","z","e","r","t","y","u","i","o","p","q","s","d","f",
            "g","h","j","k","l","m","w","x","c","v","b","n","A","Z",
            "E","R","T","Y","U","I","O","P","Q","S","D","F","G","H",
            "J","K","L","M","W","X","C","V","B","N"
        ];

        if($this->length != ""){
            $res = "";
            for($i=0; $i< $this->length ;$i++){
                $res .=  $letters[rand(0,51)];
            }
            return $res;
        }
        return $this->default;
        
    }

    public function __toString(){
        return "{$this->opt()}";
    }


}