<?php

require_once("integer.php");
require_once("text.php");
require_once("boolean.php");
require_once("id.php");
require_once("floatPoint.php");
require_once("owner.php");
require_once("fake.php");

class Builder {

    private string $builder;
    private int $lineId;
    private array $vars;

    public function __construct(string $builder ,int $lineId ,array $vars){
        $this->builder = trim($builder);
        $this->lineId = $lineId;
        $this->vars = $vars;
    }

    private function operations():string{
        
        $builderCmds = explode(":",$this->builder);
        $type = $builderCmds[0];

        switch($type){

            case "Id": return new Id($this->lineId + $start = $builderCmds[1]);

            case "Integer": return new Integer($builderCmds[1],$builderCmds[2]);
                
            case "Boolean": return new Boolean($builderCmds[1]);
            
            case "Text": return new Text($builderCmds[1] , $builderCmds[2]);

            case "Fake": return new Fake($builderCmds[1],$builderCmds[2],$this->lineId);
            
            case "Owner": return new Owner($builderCmds[1],$this->vars);

        }
    }

    public function __toString():string{
        return $this->operations();
    }

}