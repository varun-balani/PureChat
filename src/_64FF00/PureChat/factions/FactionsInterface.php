<?php

namespace _64FF00\PureChat\factions;

use pocketmine\player\Player;

interface FactionsInterface
{

    public function getAPI();

    public function getPlayerFaction(Player $player);

    public function getPlayerRank(Player $player);
}
