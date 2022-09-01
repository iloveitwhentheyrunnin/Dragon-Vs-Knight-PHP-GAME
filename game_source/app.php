<?php
require_once __DIR__ . '/Game/Game.php';
require_once __DIR__ . '/Game/Player.php';
require_once __DIR__ . '/Game/Dragon.php';
require_once __DIR__ . '/Game/Knight.php';

$dragon = new Dragon();

$dragon->setName('Oblivia');
$dragon->setForce(2);
$dragon->setLife(150);

$knight = new Knight();
$knight->setName('Jean Mi');
$knight->setLife(110);
$knight->setForce(3);

$game = new Game($dragon,$knight);

$game->run();

echo '<pre>';
print_r($game);
print_r($game->isWinner());
echo '</pre>';