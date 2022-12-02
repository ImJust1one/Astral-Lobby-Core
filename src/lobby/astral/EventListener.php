<?php

namespace lobby\astral;

use pocketmine\event\Listener;

use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\block\BlockBreakEvent;

use pocketmine\event\entity\EntityDamageEvent;

use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\inventory\InventoryTransactionEvent;

class EventListener implements Listener{ 

  public function BlockBreak(BlockBreakEvent $ev){
    $ev->cancel();

  }

  public function BlockPlace(BlockPlaceEvent $ev){
    $ev->cancel();
    
  }

  public function EntityDamage(EntityDamageEvent $ev){
    $ev->cancel();

  }

  public function PlayerDropItem(PlayerDropItemEvent $ev){
    $ev->cancel();

  }

  public function InventoryTransaction(InventoryTransactionEvent $ev){
    $ev->cancel();
    
  } 
  
  public function PlayerChat(PlayerChatEvent $ev){
    $ev->cancel()

  } 

}