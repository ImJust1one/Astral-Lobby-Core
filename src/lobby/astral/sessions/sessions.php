<?php

namespace lobby\astral\sessions;

use pocketmine\event\Listener;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class sessions implements Listener {

  public function onJoin(PlayerJoinEvent $event){

    $player = $event->getPlayer();
    $name = $player->getName();
    $event->setJoinMessage("§7[§9+§7] §9" . $name);
    
   }
    
   public function onQuit(PlayerQuitEvent $event){
    
    $player = $event->getPlayer();
    $name = $player->getName();
    $event->setQuitMessage("§7[§c-§7] §c" . $name);
    
   }


}
