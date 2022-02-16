<?php

namespace SigitGamersYT\ParticleUI;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\command\{Command, CommandSender};
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\task\scheduler\Task;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use pocketmine\math\Vector3;
use pocketmine\world\Position;
use pocketmine\world\particle\FlameParticle;

use pocketmine\world\particle\HeartParticle; 
use pocketmine\world\particle\InkParticle;
use pocketmine\world\particle\LavaParticle;
use pocketmine\world\particle\AngryVillagerParticle;
use pocketmine\world\particle\EndermanTeleportParticle;
use pocketmine\world\particle\CriticalParticle;
use pocketmine\world\particle\ExplodeParticle;
use pocketmine\world\particle\HappyVillagerParticle;
use pocketmine\world\particle\PortalParticle;
use pocketmine\world\particle\RedstoneParticle;
use pocketmine\world\particle\SnowballPoofParticle;
use pocketmine\world\particle\SmokeParticle;
use pocketmine\world\particle\WaterDripParticle;

use FormAPI\{CustomForm, SimpleForm};

class Main extends PluginBase implements Listener {
  
  
  public $players = [];

  public function onEnable(): void{
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getServer()->getLogger()->info("§bEnable!");
  }

  public function onDisable(): void{
    $this->getServer()->getLogger()->info("§cDisable!");
  }

}
