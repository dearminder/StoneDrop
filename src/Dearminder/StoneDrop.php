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
			$random_stuff = mt_rand(1, 100);
			$xp_coal = mt_rand(0, 3);
			$xp_redstone = mt_rand(1, 5);
			$xp_diamemer = mt_rand(3, 7);
			$xp_lapis = mt_rand(2, 5);
			if ($player->getGamemode() == 0){
			if ($ItemInHand == 270 /**wooden pickaxe*/){
				if ($block->getId() == 1){
					if ($random_stuff >= 15 && $random_stuff < 50/**chance 20% for coal*/){
						$ev->setDrops([Item::get(263, 0, 1)]);
						if ($xp_coal = 1){$player->addXp(1);}
						elseif ($xp_coal = 2){$player->addXp(2);}
						elseif ($xp_coal = 3) {$player->addXP(3);}
						}
					}}
			if ($ItemInHand == 274 /**stone pickaxe*/){
				if ($block->getId() == 1){
					if ($random_stuff >= 15 && $random_stuff < 50/**chance 20% for coal*/){
						$ev->setDrops([Item::get(263, 0, 1)]);
						if ($xp_coal = 1){$player->addXp(1);}
						elseif ($xp_coal = 2){$player->addXp(2);}
						elseif ($xp_coal = 3) {$player->addXP(3);}
						}
				elseif ($random_stuff >= 50 && $random_stuff < 75)/**chance 25% for iron*/{
						$ev->setDrops([Item::get(15, 0, 1)]);}
				elseif ($random_stuff >= 90 && $random_stuff < 95)/**chance 5% for lapiz*/{
						$ev->setDrops([Item::get(351, 4, 1)]);}
					}}
			if ($ItemInHand == 257 /**iron pickaxe*/){
				if ($block->getId() == 1){
					if ($depth <= 12)/**level of diamonds**/ {
						if ($random_stuff >= 15 && $random_stuff < 50/**chance 20% for coal*/){
						$ev->setDrops([Item::get(263, 0, 1)]);
						if ($xp_coal = 1){$player->addXp(1);}
						elseif ($xp_coal = 2){$player->addXp(2);}
						elseif ($xp_coal = 3) {$player->addXP(3);}}
				elseif ($random_stuff >= 50 && $random_stuff < 75)/**chance 25% for iron*/{
						$ev->setDrops([Item::get(15, 0, 1)]);}
				elseif ($random_stuff >= 90 && $random_stuff < 95)/**chance 5% for lapiz*/{
						$ev->setDrops([Item::get(351, 4, 1)]);}
				elseif ($random_stuff >= 80 && $random_stuff < 90)/**chance 10% for gold*/{
						$ev->setDrops([Item::get(14, 0, 1)]);}
				elseif ($random_stuff >= 75 && $random_stuff < 80)/**chance 5% for redstone*/{
						$ev->setDrops([Item::get(331, 0, 1)]);}
				elseif ($random_stuff >= 95 && $random_stuff < 100)/**chance 5% for diamond*/{
						$ev->setDrops([Item::get(264, 0, 1)]);
						if ($xp_diamemer = 3){$player->addXp(3);}
						elseif ($xp_diamemer = 4){$player->addXp(4);}
						elseif ($xp_diamemer = 5) {$player->addXP(5);}
						elseif ($xp_diamemer = 6) {$player->addXP(6);}
						elseif ($xp_diamemer = 7) {$player->addXP(7);}}
				elseif ($random_stuff <= 1)/**chance 10% for emerald*/{
						$ev->setDrops([Item::get(388, 0, 1)]);
						if ($xp_diamemer = 3){$player->addXp(3);}
						elseif ($xp_diamemer = 4){$player->addXp(4);}
						elseif ($xp_diamemer = 5) {$player->addXP(5);}
						elseif ($xp_diamemer = 6) {$player->addXP(6);}
						elseif ($xp_diamemer = 7) {$player->addXP(7);}}
						/**End of Level*/}
						elseif($depth > 12){
						if ($random_stuff >= 15 && $random_stuff < 50/**chance 20% for coal*/){
						$ev->setDrops([Item::get(263, 0, 1)]);
						if ($xp_coal = 1){$player->addXp(1);}
						elseif ($xp_coal = 2){$player->addXp(2);}
						elseif ($xp_coal = 3) {$player->addXP(3);}
						}
				elseif ($random_stuff >= 50 && $random_stuff < 75)/**chance 25% for iron*/{
						$ev->setDrops([Item::get(15, 0, 1)]);}
				elseif ($random_stuff >= 90 && $random_stuff < 95)/**chance 5% for lapiz*/{
						$ev->setDrops([Item::get(351, 4, 1)]);}
				elseif ($random_stuff >= 80 && $random_stuff = 90)/**chance 10% for gold*/{
						$ev->setDrops([Item::get(14, 0, 1)]);}
				elseif ($random_stuff >= 75 && $random_stuff < 80)/**chance 5% for redstone*/{
						$ev->setDrops([Item::get(331, 0, 1)]);}
				elseif ($random_stuff <= 1)/**chance 10% for emerald*/{
						$ev->setDrops([Item::get(388, 0, 1)]);
						if ($xp_diamemer = 3){$player->addXp(3);}
						elseif ($xp_diamemer = 4){$player->addXp(4);}
						elseif ($xp_diamemer = 5) {$player->addXP(5);}
						elseif ($xp_diamemer = 6) {$player->addXP(6);}
						elseif ($xp_diamemer = 7) {$player->addXP(7);}}
							}	}}
			if ($ItemInHand == 285 /**golden pickaxe*/){
				if ($block->getId() == 1){
					if ($random_stuff >= 15 && $random_stuff < 50/**chance 20% for coal*/){
						$ev->setDrops([Item::get(263, 0, 1)]);
						$player->addXp(1);}
						}
						}
			if ($ItemInHand == 278 /**diamond pickaxe*/){
				if ($block->getId() == 1){
					if ($random_stuff >= 15 && $random_stuff < 50/**chance 20% for coal*/){
						$ev->setDrops([Item::get(263, 0, 1)]);
						if ($xp_coal = 1){$player->addXp(1);}
						elseif ($xp_coal = 2){$player->addXp(2);}
						elseif ($xp_coal = 3) {$player->addXP(3);}
						}
				elseif ($random_stuff >= 50 && $random_stuff < 75)/**chance 25% for iron*/{
						$ev->setDrops([Item::get(15, 0, 1)]);}
				elseif ($random_stuff >= 90 && $random_stuff < 95)/**chance 5% for lapiz*/{
						$ev->setDrops([Item::get(351, 4, 1)]);}
				elseif ($random_stuff >= 80 && $random_stuff = 90)/**chance 10% for gold*/{
						$ev->setDrops([Item::get(14, 0, 1)]);}
				elseif ($random_stuff >= 75 && $random_stuff < 80)/**chance 5% for redstone*/{
						$ev->setDrops([Item::get(331, 0, 1)]);}
				elseif ($random_stuff >= 95 && $random_stuff < 100)/**chance 5% for diamond*/{
						$ev->setDrops([Item::get(264, 0, 1)]);
						if ($xp_diamemer = 3){$player->addXp(3);}
						elseif ($xp_diamemer = 4){$player->addXp(4);}
						elseif ($xp_diamemer = 5) {$player->addXP(5);}
						elseif ($xp_diamemer = 6) {$player->addXP(6);}
						elseif ($xp_diamemer = 7) {$player->addXP(7);}}
				elseif ($random_stuff <= 1)/**chance 10% for emerald*/{
						$ev->setDrops([Item::get(388, 0, 1)]);
						if ($xp_diamemer = 3){$player->addXp(3);}
						elseif ($xp_diamemer = 4){$player->addXp(4);}
						elseif ($xp_diamemer = 5) {$player->addXP(5);}
						elseif ($xp_diamemer = 6) {$player->addXP(6);}
						elseif ($xp_diamemer = 7) {$player->addXP(7);}}
						}}
						}}}