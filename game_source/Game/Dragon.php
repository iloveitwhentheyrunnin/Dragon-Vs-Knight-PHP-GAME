<?php

class Dragon extends Player
{
    public function hit()
    {
        return $this->force * rand(1,10);
    }

    public function incrementShot()
    {
       $this->shot++;
    }

    public function getShot(): int
    {
        return $this->shot;
    }

}