<?php

namespace Supsis;

class Widget
{
    public function __construct()
    {
        add_action("wp_footer", [$this, "getScriptTags"], PHP_INT_MAX);
    }

    public function getScriptTags()
    {
        $scriptTag = '<!-- Start of SUPSIS Embed Code --> 
                        <script>window.supsis=window.supsis||function(){(supsis.q=supsis.q||[]).push(arguments)};supsis.l=+new Date;</script>
                        <script src="https://betavisitor.supsis.live/static/js/loader.js" type="text/javascript" async defer></script>
                        <!-- End of SUPSIS Embed Code --> ';
        echo $scriptTag;
    }
}