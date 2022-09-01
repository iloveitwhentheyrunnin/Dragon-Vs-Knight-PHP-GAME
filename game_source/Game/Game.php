<?php

class Game
{
    protected $player1;
    protected $player2;

    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function run()
    {
        while($this->player1->getLife() > 0 && $this->player2->getLife() > 0){
            $this->OneTurn();
        }

    }

    public function OneTurn()
    {
        if(rand(0,1) == 0){
            $updatedLife = round($this->player2->getLife()-$this->player1->hit(),2);
            $this->player2->setLife($updatedLife);
            $this->player2->incrementShot();
        }else{
            $updatedLife = round($this->player1->getLife()-$this->player2->hit(),2);
            $this->player1->setLife($updatedLife);
            $this->player1->incrementShot();
        }
    }

    public function isWinner():string {
        if($this->player1->getLife()>0){
            return $this->player1->getName();
        }
        return $this->player2->getName();

    }


}
