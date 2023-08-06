<?php

namespace kurth\simplekoth;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Central extends PluginBase implements Listener {

    public static $instance;

    public static function getInstance(): Central {
        return self::$instance;
    }

    public function onLoad(): void {
        self::$instance = $this;
    }

    public function onEnable(): void {
        $central = Central::getInstance();
    }

    public function onDisable(): void {
        $central = Central::getInstance();
    }
}