<?php

namespace _64FF00\PureChat;

use _64FF00\PurePerms\event\PPGroupChangedEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\player\IPlayer;
use pocketmine\player\Player;

class PCListener implements Listener
{
    private PureChat $plugin;

    public function __construct(PureChat $plugin)
    {
        $this->plugin = $plugin;
    }

    public function onGroupChanged(PPGroupChangedEvent $event)
    {
        $player = $event->getPlayer();
		if($player instanceof Player)
		{
            $WorldName = $this->plugin->getConfig()->get("enable-multiworld-chat") ? $player->getWorld()->getDisplayName() : null;
			$nameTag = $this->plugin->getNametag($player, $WorldName);
			$player->setNameTag($nameTag);
		}
    }

    /**
     * @param PlayerJoinEvent $event
     * @priority HIGH
     */
    public function onPlayerJoin(PlayerJoinEvent $event)
    {
        $player = $event->getPlayer();
        $WorldName = $this->plugin->getConfig()->get("enable-multiworld-chat") ? $player->getWorld()->getDisplayName() : null;
        $nameTag = $this->plugin->getNametag($player, $WorldName);
        $player->setNameTag($nameTag);
    }

    /**
     * @param PlayerChatEvent $event
     * @priority HIGH
     */
    public function onPlayerChat(PlayerChatEvent $event)
    {
		if ($event->isCancelled()) return;
		$player = $event->getPlayer();
        $message = $event->getMessage();
        $WorldName = $this->plugin->getConfig()->get("enable-multiworld-chat") ? $player->getWorld()->getDisplayName() : null;
        $chatFormat = $this->plugin->getChatFormat($player, $message, $WorldName);
        $event->setFormat($chatFormat);
    }
}
