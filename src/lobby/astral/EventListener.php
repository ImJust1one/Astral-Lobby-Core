<?php

namespace lobby\astral;

use pocketmine\event\Listener;

use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\block\BlockBreakEvent;

use pocketmine\event\entity\EntityDamageEvent;

use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\event\player\PlayerInteractEvent;


class EventListener implements Listener{ 

  public fuction BlockBreak(BlockBreakEvent $ev){
    $ev->cancel();

  }

  public fuction BlockPlace(BlockPlaceEvent $ev){
    $ev->cancel();
    
  }

  public fuction EntityDamage(EntityDamageEvent $ev){
    $ev->cancel();

  }

  public fuction PlayerDropItem(PlayerDropItemEvent $ev)¨{
    $ev->cancel();

  }

}