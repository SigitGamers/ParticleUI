<?php

namespace SigitGamersYT\ParticleUI;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\scheduler\Task;

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

class Particle extends Task{

     public function __construct(private Main $plugin){
        $this->plugin = $plugin;
     }

     public function onRun(): void{
          foreach($this->plugin->getServer()->getOnlinePlayers() as $player) {
		   $name = $player->getName();
	    	$inv = $player->getInventory();
			
		   $players = $player->getWorld()->getPlayers();
          $level = $player->getWorld();

          $x = $player->getLocation()->getFloorX();
          $y = $player->getLocation()->getFloorY();
          $z = $player->getLocation()->getFloorZ();
          
          if(in_array($name, $this->plugin->particle1)) {
				
		    $center = new Vector3($x, $y, $z);
	            $particle = new AngryVillagerParticle($center);
				
		    $time = 1;
	            $pi = 3.14159;
	            $time = $time+0.1/$pi;
	            for($i = 0; $i <= 2*$pi; $i+=$pi/8){
		        $x = $time*cos($i) + $center->x;
		        $z = exp(-0.1*$time)*sin($time) + $center->z;
			$y = $time*sin($i) + $center->y;
				
	                    $particle->setComponents($x, $y, $z);
		            $level->addParticle($particle);
				
		          }
	      }

         }
     }
}
