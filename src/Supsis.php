<?php

namespace Supsis;

class Supsis
{
    public static function init()
    {
        if (!is_admin()) {
            $widget = new Widget();
            return;
        }
        if (current_user_can("activate_plugins")) {
            new Admin();
        }
    }
}