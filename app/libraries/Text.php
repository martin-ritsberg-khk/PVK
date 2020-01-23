<?php


class Text
{
    private $str = '';

    public  function setStr(string $str)
    {
        $this->str = $str;
    }
    public function getStr(): string
    {
        return $this->str;
    }

    public function show(){
        echo $this->str;
    }

    public function __construct($str)
    {
        $this->str = $str;
    }
}