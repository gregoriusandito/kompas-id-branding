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
        <?php if (1==2) : ?>
            <table class="form-table">
                <tbody>
                    <tr>
                        <th scope="row">Footer bagian Layanan Pelanggan</th>
                        <td>
                        	<fieldset>
                        	    <legend class="screen-reader-text">
                        	        <span>Footer bagian Layanan Pelanggan</span>
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
                        <th scope="row">Footer Korporasi</th>
                        <td>
                        	<fieldset>
                        	    <legend class="screen-reader-text">
                        	        <span>Footer Korporasi</span>
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
                            <label for="kompas_id_footer_right_hex_color">Warna Background Footer Korporasi bagian kanan</label>
                        </th>
                        <td>
                            <input name="kompas_id_footer_right_hex_color" type="text" id="kompas_id_footer_right_hex_color" value="<?= esc_attr( get_option('kompas_id_footer_right_hex_color') ); ?>" class="regular-text" placeholder="Default: #00599A (Biru Kompas)">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Live Preview</th>
                        <td>
                            <div id="kompas-id-footer-live-preview"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        <?php endif; ?>
        <div id="kompas-id-footer-options-table"></div>
        
        <?php submit_button(); ?> 
    </form>
  
</div>
