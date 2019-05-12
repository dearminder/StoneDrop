<?php

namespace Dearminder;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\utils\MainLogger;
use pocketmine\entity\Effect;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\block\Block;
use pocketmine\math\Vector3;
use pocketmine\item\Item;

class StoneDrop extends PluginBase implements Listener{
	
	public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);}
        public function onBreak(BlockBreakEvent $ev){
			$player = $ev->getPlayer();
			$ItemInHand = $player->getInventory()->getItemInHand()->getId();
			$block = $ev->getBlock();
			$depth = $block->GetY();
			$r_redstone = mt_rand(2, 2); /**Random amount of redstone*/
			$percentage = mt_rand(1, 10000); /**Support for 0,01%*/
			$xp_coal = mt_rand(0, 3);/**random amount of xp for coal*/
			$xp_redstone = mt_rand(1, 5);/**random amount of xp for redstone*/
			$xp_diamemer = mt_rand(3, 7);/**random amount of xp for diamond and emerald*/
			$xp_lapis = mt_rand(2, 5);/**random amount of xp for lapis*/
			if ($player->getGamemode() == 0){
			if ($ItemInHand == 270 /**wooden pickaxe*/){
				if ($block->getId() == 1){
					if ($percentage >= 1 && $percentage < 200/**chance 2% for coal*/){
						$ev->setDrops([Item::get(263, 0, 1)]);
						$player->addXp($xp_coal);}
						}
					}
			if ($ItemInHand == 274 /**stone pickaxe*/){
				if ($block->getId() == 1){
					if ($percentage >= 1 && $percentage < 200/**chance 2% for coal*/){
						$ev->setDrops([Item::get(263, 0, 1)]);
						$player->addXp($xp_coal);}
				elseif ($percentage >= 200 && $percentage < 380)/**chance 1,8% for iron*/{
						$ev->setDrops([Item::get(15, 0, 1)]);}
				elseif ($percentage >= 380 && $percentage < 560)/**chance 1,5% for lapiz*/{
						$ev->setDrops([Item::get(351, 4, 1)]);
						$player->addXp($xp_lapis);}
					}}
			if ($ItemInHand == 257 /**iron pickaxe*/){
				if ($block->getId() == 1){
					if ($depth <= 12)/**level of diamonds**/ {
						if ($percentage >= 1 && $percentage < 200/**chance 2% for coal*/){
						$ev->setDrops([Item::get(263, 0, 1)]);
						$player->addXp($xp_coal);}
				elseif ($percentage >= 200 && $percentage < 380)/**chance 1,8% for iron*/{
						$ev->setDrops([Item::get(15, 0, 1)]);}
				elseif ($percentage >= 380 && $percentage < 560)/**chance 1,5% for lapiz*/{
						$ev->setDrops([Item::get(351, 4, 1)]);
						$player->addXp($xp_lapis);
						}
				elseif ($percentage >= 80 && $percentage < 90)/**chance 0,8% for gold*/{
						$ev->setDrops([Item::get(14, 0, 1)]);}
				elseif ($percentage >= 560 && $percentage < 695)/**chance 1,35% for redstone*/{
						$ev->setDrops([Item::get(331, 0, 1)]);
						$player->addXp($xp_redstone);
						}
				elseif ($percentage >= 695 && $percentage < 815)/**chance 1,2% for diamond*/{
						$ev->setDrops([Item::get(264, 0, 1)]);
						$player->addXp($xp_diamemer);}
				elseif ($percentage >= 895 && $percentage < 970)/**chance 0,75% for emerald*/{
						$ev->setDrops([Item::get(388, 0, 1)]);
						$player->addXp($xp_diamemer);}
						/**End of Level*/}
						elseif($depth > 12){
						if ($percentage >= 1 && $percentage < 200/**chance 2% for coal*/){
						$ev->setDrops([Item::get(263, 0, 1)]);
						$player->addXp($xp_coal);}
				elseif ($percentage >= 200 && $percentage < 380)/**chance 1,8% for iron*/{
						$ev->setDrops([Item::get(15, 0, 1)]);}
				elseif ($percentage >= 380 && $percentage < 560)/**chance 1,5% for lapiz*/{
						$ev->setDrops([Item::get(351, 4, 1)]);
						$player->addXp($xp_lapis);}
				elseif ($percentage >= 815 && $percentage < 895)/**chance 0,8% for gold*/{
						$ev->setDrops([Item::get(14, 0, 1)]);}
				elseif ($percentage >= 560 && $percentage < 695)/**chance 1,35% for redstone*/{
						$ev->setDrops([Item::get(331, 0, 1)]);
						$player->addXp($xp_redstone);}
				elseif ($percentage >= 895 && $percentage < 970)/**chance 0,75% for emerald*/{
						$ev->setDrops([Item::get(388, 0, 1)]);
						$player->addXp($xp_diamemer);}
							}}}
			if ($ItemInHand == 285 /**golden pickaxe*/){
				if ($block->getId() == 1){
					if ($percentage >= 1 && $percentage < 200/**chance 2% for coal*/){
						$ev->setDrops([Item::get(263, 0, 1)]);
						$player->addXp($xp_coal);}
						}
						}
			if ($ItemInHand == 278 /**diamond pickaxe*/){
				if ($block->getId() == 1){
					if ($depth <= 12)/**level of diamonds**/ {
					if ($percentage >= 1 && $percentage < 200/**chance 2% for coal*/){
						$ev->setDrops([Item::get(263, 0, 1)]);
						$player->addXp($xp_coal);}
				elseif ($percentage >= 200 && $percentage < 380)/**chance 1,8% for iron*/{
						$ev->setDrops([Item::get(15, 0, 1)]);}
				elseif ($percentage >= 380 && $percentage < 560)/**chance 1,5% for lapiz*/{
						$ev->setDrops([Item::get(351, 4, 1)]);
						$player->addXp($xp_lapis);}
				elseif ($percentage >= 815 && $percentage < 895)/**chance 0,8% for gold*/{
						$ev->setDrops([Item::get(14, 0, 1)]);}
				elseif ($percentage >= 560 && $percentage < 695)/**chance 1,35% for redstone*/{
						$ev->setDrops([Item::get(331, 0, 1)]);
						$player->addXp($xp_redstone);}
				elseif ($percentage >= 695 && $percentage < 815)/**chance 1,2% for diamond*/{
						$ev->setDrops([Item::get(264, 0, 1)]);
						$player->addXp($xp_diamemer);}
				elseif ($percentage >= 895 && $percentage < 970)/**chance 0,75% for emerald*/{
						$ev->setDrops([Item::get(388, 0, 1)]);
						$player->addXp($xp_diamemer);}
						}
						/**End Of level*/
						elseif($depth > 12){
						if ($percentage >= 1 && $percentage < 200/**chance 2% for coal*/){
						$ev->setDrops([Item::get(263, 0, 1)]);
						$player->addXp($xp_coal);}
				elseif ($percentage >= 200 && $percentage < 380)/**chance 1,8% for iron*/{
						$ev->setDrops([Item::get(15, 0, 1)]);}
				elseif ($percentage >= 380 && $percentage < 560)/**chance 1,5% for lapiz*/{
						$ev->setDrops([Item::get(351, 4, 1)]);
						$player->addXp($xp_lapis);}
				elseif ($percentage >= 815 && $percentage < 895)/**chance 0,8% for gold*/{
						$ev->setDrops([Item::get(14, 0, 1)]);}
				elseif ($percentage >= 560 && $percentage < 695)/**chance 1,35% for redstone*/{
						$ev->setDrops([Item::get(331, 0, 1)]);
						$player->addXp($xp_redstone);}
				elseif ($percentage >= 895 && $percentage < 970)/**chance 0,75% for emerald*/{
						$ev->setDrops([Item::get(388, 0, 1)]);
						$player->addXp($xp_diamemer);}
						}
						}}
						}}}
						
						
						
						