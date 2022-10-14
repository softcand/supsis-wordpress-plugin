<?php

namespace Supsis;

/**
 * Supsis configuration.
 */
class Config
{
    public string $tabletUrl = "https://-api.supsis.live/api/public/integration/wordpress";
    public string $widgetUrl;
    public string $domain;
    public string $username;
    public string $email;

    /**
     * Initialize user information.
     */
    public function __construct()
    {
        $domain = $_SERVER['SERVER_NAME'];
        $domain = preg_replace("/(https?:\/\/|www.|.\w{2,4}(.\w{2})?$)/mi", "", $domain);
        $domain = str_replace(".", "-", $domain);
        $this->domain = $domain;
        $this->username = wp_get_current_user()->user_nicename;
        $this->email = wp_get_current_user()->user_email;
        $this->widgetUrl = "https://$this->domain.visitor.supsis.live/static/js/loader.js";
    }

    /**
     * Generates iFrame Url.
     * @return string
     */
    public function getIFrameUrl(): string
    {
        return "$this->tabletUrl"
            . "?domain=$this->domain"
            . "&email=$this->email"
            . "&fullname=$this->username";
    }
}
