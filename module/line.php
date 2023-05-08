<?php

require_once("expression.php");

class Line{

    public string $expressions;
    public string $seprator;
    public string $id;

    public function __construct(string $expressions , string $seprator , int $id){
        $this->expressions = $expressions;
        $this->seprator = $seprator;
        $this->id = $id;
    }

    private function createVars(string $varsBuilder):array{

        $varDeclerations = explode("+",$varsBuilder);

        if(count($varDeclerations) > 1){
            foreach($varDeclerations as $varDecleration){
                $varDecleration = explode("=", trim($varDecleration));
                $varName = trim($varDecleration[0]);
                $expression = trim($varDecleration[1]);
                $varValue = (new Expression($expression,$this->id,[]))->__toString();

                $vars[$varName] = $varValue;
                return $vars;
            }
        }
        else return []; 
        
    }

    public function make():string{

        $line = [];
        $expressionsCS = explode(",",$this->expressions);
        $varsBuilder = trim(array_shift($expressionsCS));

        $vars = self::createVars(substr($varsBuilder,1,strlen($varsBuilder)-2));

        foreach($expressionsCS as $expression){
            $column = new Expression($expression,$this->id,$vars);
            $line[] = $column;
        }
        return implode($this->seprator,$line);
    } 

    public function pushTo($filePath):void{
        $myFile = fopen($filePath,"a") or die("File Doesn't exist");
        fwrite($myFile,$this->make()."\n");
        fclose($myFile);
    }

    public function __toString(){
        return $this->id . "";
    }
}

