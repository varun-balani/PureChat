<?php

namespace _64FF00\PureChat\factions;

use pocketmine\Player;
use pocketmine\Server;

class PiggyFactions implements FactionsInterface
{

    public function getAPI()
    {
        return Server::getInstance()->getPluginManager()->getPlugin("PiggyFactions")->getPlayerManager();
    }

    public function getPlayerFaction(Player $player)
    {
        $member = $this->getAPI()->getPlayer($player->getUniqueId());
        $faction = $member === null ? null : $member->getFaction();
        if($faction === null) {
            return "";
        }
        return $faction->getName();
    }

    public function getPlayerRank(Player $player)
    {
        $member = $this->getAPI()->getPlayer($player->getUniqueId());
        $faction = $member === null ? null : $member->getFaction();
        if($faction === null) {
            return "";
        }
        return $member->getRole();
    }
}