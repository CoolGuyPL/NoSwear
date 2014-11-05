<?php

namespace noswear;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\entity;

class noswear extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);	
	}
		
     public function playerChat(PlayerChatEvent $PCE){
     	$word = $PCE->getMessage();
     	$player = $PCE->getPlayer();
     	switch($word){
     		case"idiot":
     	if($word = "idiot"){
     		$player->setOnFire(5);	   
     		$player->sendMessage("Do Not Swear!"); 		
     	}
     	break;
     		case"fuck you":
     	if($word = "fuck you"){
     		$player->setOnFire(5);
     		$player->sendMessage("Do Not Swear!");
     	}
     	break;
     		case"bitch":
     	if($word = "bitch"){
     		$player->setOnFire(5);
     		$player->sendMessage("Do Not Swear!");
     	}
     	break;
     		case"mother fucker":
     	if($word = "mother fucker"){
     		$player->setOnFire(5);
     		$player->sendMessage("Do Not Swear!");
     	}
     	break;
     		case"fucker":
     	if($word = "fucker"){
     		$player->setOnFire(5);
     		$player->sendMessage("Do Not Swear!");
     	}
     	break;
     		case"shit":
     	if($word = "shit"){
     		$player->setOnFire(5);
     		$player->sendMessage("Do Not Swear!");
     	}
     	break;
     		case"dumb":
     	if($word = "dumb"){
     		$player->setOnFire(5);
     		$player->sendMessage("Do Not Swear!");
     	}
     	break;
     		case"damn":
     	if($word = "damn"){
     		$player->setOnFire(5);
     		$player->sendMessage("Do Not Swear!");
     	}
     	break;
     		case"motherfucker":
     	if($word = "motherfucker"){
     		$player->setOnFire(5);
     		$player->sendMessage("Do Not Swear!");
     	}
     	break;
     		case"dick":
     	if($word = "dick"){
     		$player->setOnFire(5);
     		$player->sendMessage("Do Not Swear!");
     	}
     	break;
     		case"fuck":
     	if($word = "fuck"){
     		$player->setOnFire(5);
     		$player->sendMessage("Do Not Swear!");
     	}
     	break;
     		case"butt":
     			$player->setOnFire(5);
     			$player->sendMessage("Do Not Swear!");
     }
     }
}