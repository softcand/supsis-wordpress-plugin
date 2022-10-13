<?php

namespace Supsis;

/**
 * Supsis configuration.
 */
class Config
{
    public string $tabletUrl = "https://beta-api.supsis.live/api/public/integration/wordpress";
    public string $widgetUrl;
    public string $domain;
    public string $username;
    public string $email;

    /**
     * Initialize user information.
     */
    public function __construct()
    {
        $this->domain = $_SERVER['SERVER_NAME'];
        $this->username = wp_get_current_user()->nickname;
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
