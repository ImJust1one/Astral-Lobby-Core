<?php

namespace lobby\astral;

use pocketmine\plugin\PluginBase;

class Loader extends PluginBase {
  
  public function OnEnable(): void {
    $this->getLogger()->info("Astral Lobby Core Enable");
    $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
  }
}