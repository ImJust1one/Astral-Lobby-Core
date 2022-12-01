<?php

namespace lobby\astral;

use pocketmine\plugin\PluginBase;

class Loader extends PluginBase {
  
  public function onEnable(): void {
    $this->getLogger()->info("Astral Lobby Core Enable");
    
    #listeners
    $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
  }
  
  public function onDisable(): void {
    $this->getLogger()->info("Astral Lobby Core Disable");
  }
  
}