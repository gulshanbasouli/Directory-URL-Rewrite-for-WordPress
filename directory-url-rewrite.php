<?php
/*
Plugin Name: Directory URL Rewrite
Description: Creates SEO-friendly URLs for directory profiles.
Version: 1.0
Author: Gulshan Chauhan
*/

if (!defined('ABSPATH')) {
    exit;
}

function dur_register_rewrite_rules() {

    add_rewrite_tag('%firstName%', '([^&]+)');
    add_rewrite_tag('%lastName%', '([^&]+)');

    add_rewrite_rule(
        '^details/([^/]+)/([^/]+)/?$',
        'index.php?page_id=177&firstName=$matches[1]&lastName=$matches[2]',
        'top'
    );
}
add_action('init', 'dur_register_rewrite_rules');


function dur_activate() {
    dur_register_rewrite_rules();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'dur_activate');


function dur_deactivate() {
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'dur_deactivate');
