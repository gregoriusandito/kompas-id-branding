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

 if ( isset( $_GET['settings-updated'] ) ) {
 // add settings saved message with the class of "updated"
 add_settings_error( 'kompas-id-footer-updated', 'kompas-id-footer-updated', __( 'Perubahan berhasil disimpan', 'kompas-id-footer' ), 'updated' );
 }
 
 
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
    <h1>Kompas ID General Footer Settings</h1>
    <div class="error fade">
        <p>Plugin ini masih dalam pengembangan</p>
    </div>

    <?php // show error/update messages
        settings_errors( 'kompas-id-footer-updated' );
    ?>    

    <form method="post" action="options.php">  
    <?php settings_fields( 'kompas-id-footer-settings-group' ); ?>
    <?php do_settings_sections( 'kompas-id-footer-settings-group' ); ?>
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">Layanan Pelanggan</th>
                    <td>
                    	<fieldset>
                    	    <legend class="screen-reader-text">
                    	        <span>Layanan Pelanggan</span>
                            </legend>
                    	<label>
                    	    <input type="radio" name="kompas_id_footer_general_layanan_pelanggan" value="on" <?php if ( esc_attr( get_option('kompas_id_footer_general_layanan_pelanggan') ) && get_option('kompas_id_footer_general_layanan_pelanggan')=="on") echo "checked";?>> <span class="date-time-text format-i18n">ON</span>
                        </label>
                        &nbsp;
                    	<label>
                    	    <input type="radio" name="kompas_id_footer_general_layanan_pelanggan" value="off" <?php if ( esc_attr( get_option('kompas_id_footer_general_layanan_pelanggan') ) && get_option('kompas_id_footer_general_layanan_pelanggan')=="off") echo "checked";?>> <span class="date-time-text format-i18n">OFF</span>
                        </label>
                    	</fieldset>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">KOMPAS ID Coorporate Footer</th>
                    <td>
                    	<fieldset>
                    	    <legend class="screen-reader-text">
                    	        <span>General Footer</span>
                            </legend>
                    	<label>
                    	    <input type="radio" name="kompas_id_footer_general_status" value="on" <?php if (esc_attr( get_option('kompas_id_footer_general_status') ) && get_option('kompas_id_footer_general_status')=="on") echo "checked";?>> <span class="date-time-text format-i18n">ON</span>
                        </label>
                        &nbsp;
                    	<label>
                    	    <input type="radio" name="kompas_id_footer_general_status" value="off" <?php if (esc_attr( get_option('kompas_id_footer_general_status') ) && get_option('kompas_id_footer_general_status')=="off") echo "checked";?>> <span class="date-time-text format-i18n">OFF</span>
                        </label>
                    	</fieldset>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="kompas_id_footer_right_hex_color">Right Side Background Color of General Footer</label>
                    </th>
                    <td>
                        <input name="kompas_id_footer_right_hex_color" type="text" id="kompas_id_footer_right_hex_color" value="<?= esc_attr( get_option('kompas_id_footer_right_hex_color') ); ?>" class="regular-text">
                    </td>
                </tr>
                <?php if ( 1==2 ) : ?>
                    <tr>
                        <th scope="row">Disable Subsite Theme Footer</th>
                        <td>
                            <fieldset>
                                <legend class="screen-reader-text">
                                    <span>Disable Subsite Theme Footer</span>
                                </legend>
                                <label for="kompas_id_footer_disable_subsite_theme_footer">
                                    <input name="kompas_id_footer_disable_subsite_theme_footer" type="checkbox" id="kompas_id_footer_disable_subsite_theme_footer" value="1" <?php checked('1', get_option('kompas_id_footer_disable_subsite_theme_footer')); ?> >
                                    Disabled
                                </label>
                            </fieldset>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        
        <?php submit_button(); ?> 
    </form>
  
</div>
