<?php

class Fake{

    private string $object;
    private string $property;
    private int $lineId;
    const FAKE_DATA_API_URL = "https://dummyjson.com/users";

    public function __construct(string $object , string $property, int $lineId){
        $this->object = $object;
        $this->property = $property;
        $this->lineId = $lineId;
    }

    private function opt(){

        if($this->object == "user"){

            $url = self::FAKE_DATA_API_URL;
            $request_url = $url . '/' . ($this->lineId+1);
            $curl = curl_init($request_url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);

            curl_close($curl);

            $value = json_decode($response, true)[$this->property];

            return $value;
        }
        
    }

    public function __toString(){
        return "{$this->opt()}";
    }


}