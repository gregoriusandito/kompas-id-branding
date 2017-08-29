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
				<div class="grid">
					<div class="grid__col grid__col--1-of-2">
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
				                    	    <input type="radio" name="kompas_id_footer_general_layanan_pelanggan" value="on" :checked="footer_layanan_pelanggan == 'on'" v-model="footer_layanan_pelanggan"> 
				                    	    <span class="date-time-text format-i18n">ON</span>
				                        </label>
				                        &nbsp;
				                    	<label>
				                    	    <input type="radio" name="kompas_id_footer_general_layanan_pelanggan" value="off" :checked="footer_layanan_pelanggan == 'off'" v-model="footer_layanan_pelanggan"> 
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
				                    	    <input type="radio" name="kompas_id_footer_general_status" value="on" :checked="footer_coorporate_status == 'on'" v-model="footer_coorporate_status"> 
				                    	    <span class="date-time-text format-i18n">ON</span>
				                        </label>
				                        &nbsp;
				                    	<label>
				                    	    <input type="radio" name="kompas_id_footer_general_status" value="off" :checked="footer_coorporate_status == 'off'" v-model="footer_coorporate_status"> 
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
				            </tbody>
				        </table>					
					
					</div>				
					
					<div class="grid__col grid__col--1-of-2">
				        <table class="form-table">
				            <tbody>
				                <tr>
				                    <th scope="row">Live Preview</th>
				                    <td>
				                        <div style="width: 300px">
				                        	<div :style="footer_layanan_pelanggan === 'on' ? 'display: block' : 'display: none' ">
				                        		<div class="kompas-border-separator-bottom"></div>
									            <div class="kompas-pad-bottom-10 kompas-pad-top-10">
									                <div class="kompas-row kompas-font-sans">
									                    <div class="kompas-large-12 kompas-medium-12 kompas-columns">
									                        <div class="kompas-row kompas-pad-left-15 kompas-pad-right-15">
									                            <div class="kompas-large-3 kompas-medium-3 kompas-columns kompas-mobile-pad-bottom-20 kompas-padding-10-auto">
									                                <div class="font-2 font-weight-400 kompas-line-height-2"><span class="kompas-font-weight-700">LAYANAN </span>PELANGGAN<i class="fa fa-angle-right kompas-pad-left-30 kompas-font-20" aria-hidden="true"></i></div>
									                            </div>
									                            <div class="kompas-large-9 kompas-medium-9 kompas-columns">
									                                <div class="kompas-row">
									                                    <div class="kompas-medium-3 kompas-columns">
									                                        <div class="kompas-page-footer-profile-def-description"><a class="kompas-page-footer-cs-link" href="tel:+622125676000">
									                                                <div class="font-2 kompas-page-footer-profile-def-description-icon kompas-font-24 kompas-line-height-1"><i class="fa fa-phone kompas-v-align-middle" aria-hidden="true"></i></div>
									                                                <div class="font-2 kompas-page-footer-profile-def-description-text kompas-line-height-1-4"><span class="font-2 kompas-page-footer-cs-term">KOMPAS KRING</span><span class="font-2 kompas-mobile-font-20">+6221 2567 6000</span></div></a></div>
									                                    </div>
									                                    <div class="kompas-medium-3 kompas-columns">
									                                        <div class="kompas-page-footer-profile-def-description"><a class="kompas-page-footer-cs-link" href="whatsapp://send/6281290050800#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end">
									                                                <div class="font-2 kompas-page-footer-profile-def-description-icon kompas-font-24 kompas-line-height-1"><i class="fa fa-whatsapp kompas-v-align-middle" aria-hidden="true"></i></div>
									                                                <div class="font-2 kompas-page-footer-profile-def-description-text kompas-line-height-1-4"><span class="font-2 kompas-page-footer-cs-term">WHATSAPP</span><span class="font-2 kompas-mobile-font-20">+62812 900 50 800</span></div></a></div>
									                                    </div>
									                                    <div class="kompas-medium-3 kompas-columns">
									                                        <div class="kompas-page-footer-profile-def-description"><a class="kompas-page-footer-cs-link" href="mailto:hotline@kompas.id">
									                                                <div class="font-2 kompas-page-footer-profile-def-description-icon kompas-font-24 kompas-line-height-1"><i class="fa fa-envelope-o kompas-v-align-middle" aria-hidden="true"></i></div>
									                                                <div class="font-2 kompas-page-footer-profile-def-description-text kompas-line-height-1-4"><span class="font-2 kompas-page-footer-cs-term">EMAIL</span><span class="font-2 kompas-mobile-font-20">hotline@kompas.com</span></div></a></div>
									                                    </div>
									                                    <div class="kompas-medium-3 kompas-columns">
									                                        <div class="kompas-page-footer-profile-def-description">
									                                            <div class="font-2 kompas-page-footer-profile-def-description-icon kompas-font-24 kompas-line-height-1"><i class="fa fa-clock-o v-align-middle" aria-hidden="true"></i></div>
									                                            <div class="font-2 kompas-page-footer-profile-def-description-text kompas-line-height-1-4"><span class="font-2 kompas-page-footer-cs-term">JAM KERJA</span><span class="font-2 kompas-mobile-font-20">06.00 - 18.00 WIB</span></div>
									                                        </div>
									                                    </div>
									                                </div>
									                            </div>
									                        </div>
									                    </div>
									                </div>
									            </div>
				                        	</div>
				                        	<div :style="footer_coorporate_status === 'on' ? 'display: block' : 'display: none' ">
												<div class="page-footer-gradient-background" v-bind:style="{ 'background' : 'linear-gradient(to right, #eeeeee 0%, #eeeeee 50%, '+ footer_coorporate_color +' 50%, '+ footer_coorporate_color +' 100%)' }" >
											        <div class="kompas-font-sans kompas-position-relative">
											            <div class="grid__col grid__col--10-of-12 page-footer-background-gray kompas-pad-top-10 kompas-pad-bottom-10 kompas-profile-left">
									                        <div class="grid">
									                            <div class="grid__col grid__col--7-of-12">
								                                    <div class="grid__col grid__col--6-of-12 kompas-mobile-pad-bottom-40 kompas-profile-left-inner">
							                                            <div class="kompas-page-footer-profile-text">
						                                                    <p class="font-2">Harian Kompas adalah surat kabar Indonesia yang berkantor pusat di Jakarta. Kompas diterbitkan oleh PT Kompas Media Nusantara yang merupakan bagian dari kelompok usaha Kompas Gramedia (KG), yang didirikan oleh PK. Ojong (almarhum) dan Jakob Oetama sejak 28 Juni 1965.</p>
						                                                    <p class="font-2">Mengusung semboyan "Amanat Hati Nurani Rakyat", Kompas dikenal sebagai sumber informasi tepercaya, akurat, dan mendalam.</p>
							                                            </div>
							                                            <div class="kompas-page-footer-profile-social-accounts new">
							                                                <ul class="kompas-page-footer-profile-social-accounts-list">
																				<li class="kompas-page-footer-profile-social-accounts-item new"><a class="page-footer-profile-social-accounts-link new font-2" href="#" target="_blank" title="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
						                                                        <li class="kompas-page-footer-profile-social-accounts-item new"><a class="page-footer-profile-social-accounts-link new font-2" href="#" target="_blank" title="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
							                                                </ul>
							                                            </div>
								                                    </div>
								                                    <div class="grid__col grid__col--6-of-12 kompas-profile-left-inner">
								                                        <div class="kompas-page-footer-profile-container">
																			<dl>
						                                                        <dt class="page-footer-profile-def-term font-2">Kantor Redaksi</dt>
						                                                        <dd class="page-footer-profile-def-description">
						                                                            <div class="page-footer-profile-def-description-icon font-2"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
						                                                            <div class="page-footer-profile-def-description-text">
						                                                                <p class="font-2">Gedung Kompas Gramedia<br>Jalan Palmerah Selatan 26-28,<br>Jakarta 10270 Indonesia</p>
						                                                            </div>
						                                                        </dd>
						                                                        <dd class="page-footer-profile-def-description">
						                                                            <div class="page-footer-profile-def-description-icon font-2"><i class="fa fa-phone" aria-hidden="true"></i></div>
						                                                            <div class="page-footer-profile-def-description-text">
						                                                                <p class="font-2"><a href="tel:+62215347710">+6221 5347 710</a> / <a href="tel:+62215347720">720</a> / <a href="tel:+62215347730">730</a><br><a href="tel:+62215302200">+6221 5302 200</a></p>
						                                                            </div>
						                                                        </dd>
						                                                    </dl>											                                            
								                                        </div>
								                                    </div>
									                            </div>
									                            <div class="grid__col grid__col--5-of-12">
									                                <div class="grid">
									                                    <div class="grid__col grid__col--6-of-12">
																			<dl>
							                                                    <dt class="page-footer-profile-def-term font-2">Produk</dt>
							                                                    <dd class="page-footer-profile-def-description">
							                                                        <div class="page-footer-profile-def-link">
							                                                            <p class="font-2"><a href="#" title="ePaper" target="_blank">ePaper</a><br><a href="#" title="Kompas.id" target="_blank">Kompas.id</a><br><a href="#" title="Kompas Mobile Apps" target="_blank">Kompas Mobile Apps</a><br><a href="#" title="Kompaspedia" target="_blank">Kompaspedia</a><br><a href="#" title="KompasData" target="_blank">KompasData</a><br><a href="#" title="Info Klasika" target="_blank">Info Klasika   </a></p>
							                                                        </div>
							                                                    </dd>
							                                                </dl>
									                                    </div>
									                                    <div class="grid__col grid__col--6-of-12">
							                                                <dl>
							                                                    <dt class="page-footer-profile-def-term font-2">Iklan</dt>
							                                                    <dd class="page-footer-profile-def-description">
							                                                        <div class="page-footer-profile-def-link">
							                                                            <p class="font-2"><a href="#" title="Iklan Reguler" target="_blank">Iklan Reguler</a><br><a href="#" title="Iklan Klasika" target="_blank">Iklan Klasika</a><br><a href="#" title="Iklan Digital" target="_blank">Iklan Digital</a><br><a href="#" title="Konten Bersponsor" target="_blank">Konten Bersponsor</a><br><a href="#" title="Advertorial" target="_blank">Advertorial      </a></p>
							                                                        </div>
							                                                    </dd>
							                                                </dl>
									                                    </div>
									                                </div>
									                            </div>
									                        </div>
											            </div>
											            <div class="grid__col grid__col--2-of-12 page-footer-background-royal-blue kompas-pad-20 kompas-pad-top-10 kompas-pad-bottom-10 kompas-position-relative" v-bind:style="{ background: footer_coorporate_color }">
											                <div class="grid">
											                    <div class="grid__col grid__col--12-of-12">
											                        <dl>
											                            <dt class="page-footer-profile-def-term kompas-text-white font-2">Tentang</dt>
											                            <dd class="page-footer-profile-def-description">
											                                <div class="page-footer-profile-def-link">
																				<p class="font-2"><a href="#" title="ePaper" target="_blank">ePaper</a><br><a href="#" title="Kompas.id" target="_blank">Kompas.id</a><br><a href="#" title="Kompas Mobile Apps" target="_blank">Kompas Mobile Apps</a><br><a href="#" title="Kompaspedia" target="_blank">Kompaspedia</a><br><a href="#" title="KompasData" target="_blank">KompasData</a><br><a href="#" title="Info Klasika" target="_blank">Info Klasika   </a></p>
											                                </div>
											                            </dd>
											                        </dl>
											                        <dl>
											                            <dt class="page-footer-profile-def-term kompas-text-white font-2">Lainnya</dt>
											                            <dd class="page-footer-profile-def-description">
											                                <div class="page-footer-profile-def-link">
																				<p class="font-2"><a href="#" title="Iklan Reguler" target="_blank">Iklan Reguler</a><br><a href="#" title="Iklan Klasika" target="_blank">Iklan Klasika</a><br><a href="#" title="Iklan Digital" target="_blank">Iklan Digital</a><br><a href="#" title="Konten Bersponsor" target="_blank">Konten Bersponsor</a><br><a href="#" title="Advertorial" target="_blank">Advertorial      </a></p>
											                                </div>
											                            </dd>
											                        </dl>
											                    </div>
											                </div>
											            </div>
											        </div>
											    </div>
				                        		
				                        	</div>
								            <div class="page-footer-credit">
								                <div class="kompas-row kompas-font-sans">
								                    <div class="kompas-small-12 kompas-columns kompas-clearfix kompas-page-footer-credit-wrapper kompas-padding-15-auto">
								                    	<span class="kompas-page-footer-credit-copy">&copy; 2017 PT Kompas Media Nusantara</span>
								                        <nav class="kompas-page-footer-credit-nav left">
								                            <ul class="kompas-page-footer-credit-nav-list">
								                                <li class="menu-item"><a href="tanya_jawab.html" title="Tanya Jawab">Tanya Jawab</a></li>
								                                <li class="menu-item"><a href="hubungi_kami.html" title="Hubungi Kami">Hubungi Kami</a></li>
								                                <li class="menu-item"><a href="sidik_gangguan.html" title="Sidik Gangguan">Sidik Gangguan</a></li>
								                                <li class="menu-item"><a href="syarat_ketentuan.html" title="Syarat &amp; Ketentuan">Syarat &amp; Ketentuan</a></li>
								                                <li class="menu-item"><a href="media_sosial.html" title="Media Sosial">Media Sosial</a></li>
								                                <li class="menu-item"><a href="pimpinan.html" title="Pimpinan">Pimpinan</a></li>
								                            </ul>
								                        </nav>
								                        <nav class="kompas-page-footer-credit-nav right">
								                            <ul class="kompas-page-footer-credit-nav-list">
								                                <li class="menu-item"><a href="karier.html" title="Karier">Karier</a></li>
								                                <li class="menu-item"><a href="iklan.html" title="Iklan">Iklan</a></li>
								                                <li class="menu-item"><a href="berlangganan.html" title="Berlangganan">Berlangganan</a></li>
								                            </ul>
								                        </nav>
								                    </div>
								                </div>
								            </div>
				                        </div>
				                    </td>
				                </tr>
							</tbody>
						</table>	
					</div>				
				</div>
				`
			});
		}
    });

}(jQuery));
