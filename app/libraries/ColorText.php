<?php


class ColorText extends Text
{
    private $color = '';

    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function show()
    {
        if($this->color===''){
            parent::show();
        } else {
            echo '<p style="color:'.$this->getColor().'">'.$this->getStr().'</p>';
        }

    }

    public function __construct($str, $color)
    {
        parent::__construct($str);
        $this->color = $color;
    }
}