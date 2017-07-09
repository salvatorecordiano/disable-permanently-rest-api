<?php
/*
 * Plugin Name: Disable Permanently REST API
 * Plugin URI: https://github.com/salvatorecordiano/disable-rest-api/
 * Description: The most simple plugin to disable permanently REST API on WordPress 4.7+
 * Author: Salvatore Cordiano
 * Version: 0.1.0
 * Author URI: https://www.salvatorecordiano.it/
 */

class DisableRestApiPlugin
{
    public static function onRestAuthenticationErrorsFilter($params)
    {
        return new WP_Error(
            'rest_api_disabled', 
            'REST Api permanently disabled'
        );
    }
}

add_filter('rest_authentication_errors', 'DisableRestApiPlugin::onRestAuthenticationErrorsFilter');
