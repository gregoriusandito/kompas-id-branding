/*global Vue, ajaxurl, jQuery*/
(function ($) {

    $(document).ready(function () {
		if ( $('#kompas-id-footer-options-table').length ) {
			new Vue({
				el : '#kompas-id-footer-options-table',
				data : {
					footer_layanan_pelanggan : '',
					footer_coorporate_status : '',
					footer_coorporate_color : '',
					layanan_pelanggan_picked: '',
				},
				mounted() {
					this.init();
				},
				methods : {
					init() {
						let _self = this;
						$.ajax( {
							url : ajaxurl,
							method: 'GET',
							dataType: 'JSON',
							data : {
								action : 'get_json_footer_options'
							},
							success : ( data ) => {
								_self.footer_layanan_pelanggan = data.footer_layanan_pelanggan;
								_self.footer_coorporate_status = data.footer_coorporate_status;
								_self.footer_coorporate_color = data.footer_coorporate_color;
								console.log(data);
							}
						} );
					},
					set_footer_layanan_pelanggan(val) {
						this.footer_layanan_pelanggan = val;
					},
					set_footer_coorporate_status(val) {
						this.footer_coorporate_status = val;
					},
					set_video(key) {
						
					},

				},
				template : `
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
			                    	    <input type="radio" name="kompas_id_footer_general_layanan_pelanggan" value="on" :checked="footer_layanan_pelanggan === 'on'" v-model="footer_layanan_pelanggan"> 
			                    	    <span class="date-time-text format-i18n">ON</span>
			                        </label>
			                        &nbsp;
			                    	<label>
			                    	    <input type="radio" name="kompas_id_footer_general_layanan_pelanggan" value="off" :checked="footer_layanan_pelanggan === 'off'" v-model="footer_layanan_pelanggan"> 
			                    	    <span class="date-time-text format-i18n">OFF</span>
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
			                    	    <input type="radio" name="kompas_id_footer_general_status" value="on" :checked="footer_coorporate_status === 'on'" v-model="footer_coorporate_status"> 
			                    	    <span class="date-time-text format-i18n">ON</span>
			                        </label>
			                        &nbsp;
			                    	<label>
			                    	    <input type="radio" name="kompas_id_footer_general_status" value="off" :checked="footer_coorporate_status === 'off'" v-model="footer_coorporate_status"> 
			                    	    <span class="date-time-text format-i18n">OFF</span>
			                        </label>
			                    	</fieldset>
			                    </td>
			                </tr>
			                <tr>
			                    <th scope="row">
			                        <label for="kompas_id_footer_right_hex_color">Warna Background Footer Korporasi bagian kanan</label>
			                    </th>
			                    <td>
			                        <input name="kompas_id_footer_right_hex_color" type="text" id="kompas_id_footer_right_hex_color" :value="footer_coorporate_color" class="regular-text" placeholder="Default: #00599A (Biru Kompas)" v-model="footer_coorporate_color">
			                    </td>
			                </tr>
			                <tr>
			                    <th scope="row">Live Preview</th>
			                    <td>
			                        <div style="width: 300px">
			                        	<div :style="footer_layanan_pelanggan === 'on' ? 'display: block' : 'display: none' ">
			                        		ini bagian layanan pelanggan
			                        	</div>
			                        	<div :style="footer_coorporate_status === 'on' ? 'display: block' : 'display: none' ">
			                        		ini bagian coorporate footer <span v-bind:style="{ color: footer_coorporate_color }">test</span>
			                        	</div>
			                        	<div>
			                        		bagian ini wajib!!
			                        	</div>
			                        </div>
			                    </td>
			                </tr>
			            </tbody>
			        </table>					
				`
			});
		}
    });

}(jQuery));
