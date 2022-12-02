<?php

namespace lobby\astral\commands;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\player\Player;

class FlyCommand extends Command{

  public function __construct(){
    parent::__construct("Fly", "U wanna fly?");
    $this->setpermission('fly.command');
    
  }

  public function execute(CommandSender $sender, string $commandLabel, array $args){
    if ($sender->haspermission("fly.command")){
        $sender->SendMessage("the pussy's Cant Fly");
        return;
    }
    if(!isset($args[0])){
        $sender->SendMessage("learn to write stupid monkey, /fly on, /fly off");
        return;
    }
    

    if($args[0] == "on"){
    $sender->setFlying(true);
    $sender->SendMessage("U're flying :D");

    }
    
    if($args[0] == "off"){
    $sender->SendMessage("Ok.");
    $sender->setFlying(false);

    }
    
  }

}


