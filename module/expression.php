<?php
require_once("builder.php");

class Expression{

    private string $expression;
    private int $lineId;
    private array $vars;
    const EMPTY_STATEMENT = "";
    const SYNTAX_OPERATOR = ":";
    const ADD_OPERATOR = "+";

    public function __construct(string $expression,int $lineId ,array $vars){
        $this->expression = $expression;
        $this->lineId = $lineId;
        $this->vars = $vars;
    }

    private function opt(){

        //* check if it's a complecated expression

        if(count(explode(self::ADD_OPERATOR,$this->expression)) > 1){
            //* it's a complecated expression 
            $expressions = trim(explode(self::ADD_OPERATOR,$this->expression)); // split with + and trim
            $expressions = substr($expressions,1,strlen($expressions)-2); // remove "(" and ")"
            $expressions = explode(self::SYNTAX_OPERATOR,$this->expression); // split with :
            foreach($expressions as $expression){
                return new Builder($expression,$this->lineId,$this->vars);
            }
            
        }
        return new Builder($this->expression,$this->lineId,$this->vars);

    }

    public function __toString(){
        return "{$this->opt()}";
    }

}