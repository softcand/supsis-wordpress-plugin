<?php

namespace Supsis;

class Admin
{
    public function __construct()
    {
        add_action("admin_menu", [$this, "adminMenu"]);
    }

    public function adminMenu()
    {
        add_menu_page(
            "Supsis - Live Support",
            "Supsis",
            "manage_options",
            "supsis",
            [$this, "adminPage"]
        );
    }

    public function adminPage()
    {
        $dir = plugin_dir_path(__FILE__);
        include $dir . "../views/iframe.php";
    }
}