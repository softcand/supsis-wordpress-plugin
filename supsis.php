<?php

/**
 * Supsis
 *
 * @package           Supsis
 * @author            Softcand Inc.
 * @copyright         2022 Softcand Inc.
 * @license           GPL2
 *
 * @wordpress-plugin
 * Plugin Name:       Supsis
 * Plugin URI:        https://supsis.com/plugins/wp
 * Description:       Supsis - The Powerful Live Supoort.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Softcand Inc.
 * Author URI:        https://softcand.com
 * Text Domain:       supsis-live-support
 * License:           GPL2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://supsis.com/plugins/wp
 */

use Supsis\Supsis;

defined("ABSPATH") or die("Hey, what are you doing here? You silly human!");

require_once plugin_dir_path(__FILE__) . "vendor/autoload.php";

function supsis_initialize()
{
    Supsis::init();
}

add_action("init", "supsis_initialize");
