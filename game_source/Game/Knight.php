<?php

class Knight extends Player
{

    public function hit()
    {
        if($this->getLife() < 50) {
            return $this->force * rand(1, 5);
        }
        else {
            return $this->force * rand(1, 10);
        }
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