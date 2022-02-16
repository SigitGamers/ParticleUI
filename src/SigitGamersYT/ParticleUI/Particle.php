<?php

namespace SigitGamersYT\ParticleUI;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\task\scheduler\Task;

class Particle extends Task{

   public function __construct(Main $plugin): void{
     $this->plugin = $plugin;
   }

   public function onRun(): void{
   }
}
