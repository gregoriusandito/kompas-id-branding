<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Kompas_Id_Footer
 * @subpackage Kompas_Id_Footer/admin/partials
 */
 
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
    <h1>Kompas ID General Footer Settings</h1>
    <form method="post" action="options.php">  
    <?php settings_fields( 'kompas-id-footer-settings-group' ); ?>
    <?php do_settings_sections( 'kompas-id-footer-settings-group' ); ?>
        <div id="kompas-id-footer-options-table"></div>
        <?php submit_button(); ?> 
    </form>
</div>
