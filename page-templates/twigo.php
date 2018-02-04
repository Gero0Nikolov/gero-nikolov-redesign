<?php
/*
*   Template name: TWIGO
*/

wp_redirect( get_site_url() );
exit;

get_header();

require_once get_view( "twigo-header.php" );
require_once get_view( "twigo-content.php" );

get_footer();
?>
