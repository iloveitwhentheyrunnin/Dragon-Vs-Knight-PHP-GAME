<?php

abstract class Player
{
    protected $force;
    protected $life;
    public $shot = 0;
    protected $name;


    public function getForce()
    {
        return $this->force;
    }

    public function setForce(float $force)
    {
        $this->force = $force;
    }


    public function getLife()
    {
        return $this->life;
    }

    public function setLife(float $life)
    {
        $this->life = $life;
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }


    abstract public function hit();
    abstract public function incrementShot();
    abstract public function getShot():int;

}