<?php

namespace SigitGamersYT\ParticleUI;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\task\scheduler\Task;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use pocketmine\math\Vector3;
use pocketmine\world\particle\FlameParticle;

class Main extends PluginBase implements Listener {
  
  public function onEnable(): void{
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getServer()->getLogger()->info("§bEnable!");
  }

}
