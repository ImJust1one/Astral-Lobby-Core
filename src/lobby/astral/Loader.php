<?php

namespace lobby\astral;

use pocketmine\plugin\PluginBase;

use lobby\astral\sessions\Sessions;

use lobby\astral\commands\FlyCommand;

class Loader extends PluginBase {
  
  public function onEnable(): void {
    $this->getLogger()->info("Astral Lobby Core Enable");
    
    #listeners
    $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
    $this->getServer()->getPluginManager()->registerEvents(new Sessions(), $this);

    #Commands
    $this->getServer()->getCommandMap()->register("fly", new FlyCommand());
  }
  
  public function onDisable(): void {
    $this->getLogger()->info("Astral Lobby Core Disable");
  }
  
}