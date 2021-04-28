<?php

namespace GodMod;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;

use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;

use GodMod\Main;

class Main extends PluginBase implements Listener {

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->eco = $this->getServer()->getPluginManager()->getPlugin("EconomyAPI");
	}
	
	public function onCommand(CommandSender $player, Command $command, string $label, array $args) : bool {
		switch($command->getName()){
			case "godmod":
if($player instanceof Player){
  if($player->hasPermission("use.godmod")) {
           $effect = new
           EffectInstance(Effect::getEffect(11),
           47483647 * 20,
           5);
           $effect->setVisible(false);
           $player->addEffect($effect);
           $player->sendPopup("§eGodMod active!");
			}

			}
			break;
		}
	    return true;
	}
}
