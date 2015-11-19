<?php

namespace AFD;

use PocketMine\plugin\PluginBase;
use Pocketmine\event\entity\EntityDamageEvent;
use Pocketmine\event\Listener;
class main extends PluginBase implements Listener {
  
  public function OnEnable{
    
    $this->log ( TextFormat::GREEN . "Anti Fall Damage - ENABLE" );
    
  }
  public function OnDisable{
    
    $this->log ( TextFormat::GREEN . "Anti Fall Damage - DISABLE" );
  }
  public function onDamage(EntityDamageEvent $event){
  if($event->getCause() === EntityDamageEvent::CAUSE_FALL){
    $event->setCancelled();
  }
}
  public function log($msg) {
		$this->getLogger ()->debug ( $msg );
}
  
