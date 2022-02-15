<?php

namespace _64FF00\PureChat\factions;

use pocketmine\player\Player;
use pocketmine\plugin\Plugin;
use pocketmine\Server;

class PiggyFactions implements FactionsInterface
{
    public function getAPI(): ?Plugin
    {
        return Server::getInstance()->getPluginManager()->getPlugin("PiggyFactions");
    }

    public function getPlayerFaction(Player $player): string
    {
        $member = $this->getAPI()->getPlayerManager()->getPlayer($player);
        $faction = $member?->getFaction();
        if ($faction === null) return "";
        return $faction->getName();
    }

    public function getPlayerRank(Player $player): string
    {
        $member = $this->getAPI()->getPlayerManager()->getPlayer($player);
        $symbol = $member === null ? null : $this->getAPI()->getTagManager()->getPlayerRankSymbol($member);
        if ($member === null || $symbol === null) return "";
        return $symbol;
    }
}