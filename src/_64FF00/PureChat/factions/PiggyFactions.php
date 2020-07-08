<?php

namespace _64FF00\PureChat\factions;

use pocketmine\Player;
use pocketmine\Server;

class PiggyFactions implements FactionsInterface
{

    public function getAPI()
    {
        return Server::getInstance()->getPluginManager()->getPlugin("PiggyFactions");
    }

    public function getPlayerFaction(Player $player)
    {
        $member = $this->getAPI()->getPlayerManager()->getPlayer($player);
        $faction = $member === null ? null : $member->getFaction();
        if($faction === null) {
            return "";
        }
        return $faction->getName();
    }

    public function getPlayerRank(Player $player)
    {
        $member = $this->getAPI()->getPlayerManager()->getPlayer($player);
        $symbol = $member === null ? null : $this->getAPI()->getTagManager()->getPlayerRankSymbol($member);
        if($member === null || $symbol === null) {
            return "";
        }
        return $symbol;
    }
}