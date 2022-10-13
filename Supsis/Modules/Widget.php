<?php

namespace Supsis\Modules;

use Supsis\Config;

/**
 * Supsis chat bubble.
 */
class Widget extends Config
{
    /**
     * Registers supsis chat bubble.
     * @return void
     */
    public function register(): void
    {
        add_action("wp_footer", [$this, "addBubble"]);
    }

    /**
     * Adds supsis chat bubble.
     * @return void
     */
    function addBubble(): void
    {
        require_once SUPSIS_PATH . "templates/bubble.php";
    }
}
