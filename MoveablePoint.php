<?php
class MoveablePoint extends Point
{
    private $xSpeed;
    private $ySpeed;
    public function __construct($x, $y,$xSpeed,$ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
    }
    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function setSpeed($xSpeed,$ySpeed){
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;

    }
    public function move(){

        $this->x+=$this->xSpeed;
        $this->y+=$this->ySpeed;
    }

    public function getSpeed(){
        $array[]=$this->xSpeed;
        $array[]=$this->ySpeed;
        return json_encode($array);
    }
    public function __toString()
    {
        return parent::__toString()."with speed".$this->getSpeed();
    }
}