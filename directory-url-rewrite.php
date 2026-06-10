// Function File Code

function string_url_rewrite() {
    global $wp_rewrite;
    add_rewrite_tag('%firstName%', '([^&]+)');
    add_rewrite_tag('%lastName%', '([^&]+)');
    //In the rewrite rule you need to enter page slug and page id
    add_rewrite_rule('^details/([^/]*)/([^/]*)/?', 'index.php?page_id=177&firstName=$matches[1]&lastName=$matches[2]', 'top');

    $wp_rewrite->flush_rules(true);
}
add_action('init', 'string_url_rewrite', 10, 0);
