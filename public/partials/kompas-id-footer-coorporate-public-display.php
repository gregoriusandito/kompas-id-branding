<?php 

$footer_color = get_option('kompas_id_footer_right_hex_color') ? get_option('kompas_id_footer_right_hex_color') : '#00599a';

?>
	<?php if ( get_option('kompas_id_footer_general_status') == "on" ) : ?>
	    <!-- START: PAGE FOOTER—PROFILE-->
	    <div class="page-footer-gradient-background" style="background: #eee;
    background: -moz-linear-gradient(left, #eee 0%, #eee 50%, <?= $footer_color ?> 50%, <?= $footer_color ?> 100%);
    background: -webkit-linear-gradient(left, #eee 0%, #eee 50%, <?= $footer_color ?> 50%, <?= $footer_color ?> 100%);
    background: linear-gradient(to right, #eeeeee 0%, #eeeeee 50%, <?= $footer_color ?> 50%, <?= $footer_color ?> 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='<?= $footer_color ?>',GradientType=1 );">
	        <div class="row page-footer-profile-contents font-sans pr">
	            <div class="large-10 columns page-footer-background-gray pad-top-40 pad-bottom-40">
	                <div class="row">
	                    <div class="large-12 medium-12 columns">
	                        <div class="row">
	                            <div class="medium-7 columns">
	                                <div class="row">
	                                    <div class="medium-6 small-12 columns mobile-pad-bottom-40">
	                                    	<?php if ( $footer_custom_profile_text ) : ?>
	                                            <div class="page-footer-profile-text">
	                                            	<?php echo $footer_custom_profile_text ?>
	                                            </div>
	                                        <?php endif; ?>    
	                                        <?php if ( $footer_custom_profile_social_accounts ) : ?>
	                                            <div class="page-footer-profile-social-accounts new">
	                                                <ul class="page-footer-profile-social-accounts-list">
														<?php foreach( $footer_custom_profile_social_accounts as $social_account ) : ?>
															<li class="page-footer-profile-social-accounts-item">
																<a class="page-footer-profile-social-accounts-link" href="<?php echo $social_account['kompas_theme_footer_custom_social_account_url'] ?>" target="_blank" title="<?php echo $social_account['kompas_theme_footer_custom_social_account_name'] ?>">
																	<i class="<?php echo $social_account['kompas_theme_footer_custom_social_account_css_class'] ?>" aria-hidden="true"></i>
																</a>
															</li>
														<?php endforeach ?>
	                                                </ul>
	                                            </div>
	                                        <?php endif; ?>    
	                                    </div>
	                                    <div class="large-6 medium-6 columns">
	                                        <div class="page-footer-profile-container">
	                                            <dl>
	                                            	<?php if ( $footer_custom_editorial_address ) : ?>
	                                                    <dt class="page-footer-profile-def-term">Kantor Redaksi</dt>
	                                                    <dd class="page-footer-profile-def-description">
	                                                        <div class="page-footer-profile-def-description-icon">
	                                                        	<i class="fa fa-map-marker" aria-hidden="true"></i>
	                                                    	</div>
	                                                        <div class="page-footer-profile-def-description-text">
	                                                            <?php echo $footer_custom_editorial_address ?>
	                                                        </div>
	                                                    </dd>
	                                                    <dd class="page-footer-profile-def-description">
	                                                        <div class="page-footer-profile-def-description-icon">
	                                                        	<i class="fa fa-phone" aria-hidden="true"></i>
	                                                    	</div>
	                                                        <div class="page-footer-profile-def-description-text">
																<p>
																	<?php if ( $footer_custom_editorial_phones ) : ?>
																		<?php foreach ($footer_custom_editorial_phones as $editorial_phone) : ?>
																			<a href="tel:<?php echo preg_replace( '/\s+/', '', $editorial_phone['kompas_theme_footer_custom_editorial_phone_number'] ) ?>"><?php echo $editorial_phone['kompas_theme_footer_custom_editorial_phone_number'] ?></a>
																			<br>
																		<?php endforeach ?>
																	<?php endif ?>
																</p>
	                                                        </div>
	                                                    </dd>
	                                                <?php endif ?>    
	                                            </dl>
	                                            <dl>
	                                            	<?php if ( $footer_custom_business_address ) : ?>
	                                                    <dt class="page-footer-profile-def-term">Kantor Iklan</dt>
	                                                    <dd class="page-footer-profile-def-description">
	                                                        <div class="page-footer-profile-def-description-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
	                                                        <div class="page-footer-profile-def-description-text">
	                                                            <?php echo $footer_custom_business_address ?>
	                                                        </div>
	                                                    </dd>
	                                                    <dd class="page-footer-profile-def-description">
	                                                        <div class="page-footer-profile-def-description-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
	                                                        <div class="page-footer-profile-def-description-text">
																<p>
																	<?php foreach ($footer_custom_business_phones as $business_phone) : ?>
																		<a href="tel:<?php echo preg_replace( '/\s+/', '', $business_phone['kompas_theme_footer_custom_business_phone_number'] ) ?>"><?php echo $business_phone['kompas_theme_footer_custom_business_phone_number'] ?></a>
																		<br>
																	<?php endforeach ?>
																</p>
	                                                        </div>
	                                                    </dd>
	                                                <?php endif; ?>    
	                                            </dl>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="medium-5 columns">
	                                <div class="row">
	                                    <div class="large-6 small-6 columns">
	                                        <dl>
	                                        	<?php if ( $footer_custom_products ) : ?>
	                                                <dt class="page-footer-profile-def-term">Produk</dt>
	                                                <dd class="page-footer-profile-def-description">
	                                                    <div class="page-footer-profile-def-link">
															<p>
																<?php foreach($footer_custom_products as $custom_product) : ?>
																	<a href="<?php echo $custom_product['kompas_theme_footer_custom_product_url'] ?>" title="<?php echo $custom_product['kompas_theme_footer_custom_product_name'] ?>" target="_blank"><?php echo $custom_product['kompas_theme_footer_custom_product_name'] ?></a><br>
																<?php endforeach ?>
															</p>
	                                                    </div>
	                                                </dd>
	                                            <?php endif; ?>
	                                        </dl>
	                                    </div>
	                                    <div class="large-6 small-6 columns">
	                                        <dl>
	                                        	<?php if ( $footer_custom_ads_products ) : ?>
	                                                <dt class="page-footer-profile-def-term">Iklan</dt>
	                                                <dd class="page-footer-profile-def-description">
	                                                    <div class="page-footer-profile-def-link">
															<p>
																<?php foreach($footer_custom_ads_products as $custom_ads_product) : ?>
																	<a href="<?php echo $custom_ads_product['kompas_theme_footer_custom_ads_product_url'] ?>" title="<?php echo $custom_ads_product['kompas_theme_footer_custom_ads_product_name'] ?>" target="_blank"><?php echo $custom_ads_product['kompas_theme_footer_custom_ads_product_name'] ?></a><br>
																<?php endforeach ?>
															</p>
	                                                    </div>
	                                                </dd>
	                                            <?php endif ?>
	                                        </dl>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="large-2 columns page-footer-background-royal-blue pad-20 pad-top-40 pad-bottom-40 pr" style="background-color: <?= $footer_color ?>;">
	                <div class="row">
	                    <div class="large-12 medium-12 columns">
	                        <dl>
	                            <dt class="page-footer-profile-def-term text-white">Tentang</dt>
	                            <dd class="page-footer-profile-def-description">
	                                <div class="page-footer-profile-def-link">
										<p>
											<?php if ( $footer_custom_about_links ) : ?>
												<?php foreach ( $footer_custom_about_links as $key => $about_link ) : ?>
													<a class="text-white" href="<?php echo $about_link['kompas_theme_footer_about_repeater_url'] ?>" title="<?php echo $about_link['kompas_theme_footer_about_repeater_label'] ?>" target="_blank"><?php echo $about_link['kompas_theme_footer_about_repeater_label'] ?></a>
													<?php if ( $key < count( $footer_custom_about_links ) - 1 ) : ?>
														<br>
													<?php endif ?>
												<?php endforeach ?>
											<?php endif ?>
										</p>
	                                </div>
	                            </dd>
	                        </dl>
	                        <dl>
	                            <dt class="page-footer-profile-def-term text-white">Lainnya</dt>
	                            <dd class="page-footer-profile-def-description">
	                                <div class="page-footer-profile-def-link">
										<p>
											<?php if ( $footer_custom_other_links ) : ?>
												<?php foreach ( $footer_custom_other_links as $key => $other_link ) : ?>
													<a class="text-white" href="<?php echo $other_link['kompas_theme_footer_about_repeater_url'] ?>" title="<?php echo $other_link['kompas_theme_footer_about_repeater_label'] ?>" target="_blank"><?php echo $other_link['kompas_theme_footer_about_repeater_label'] ?></a>
													<?php if ( $key < count( $footer_custom_other_links ) - 1 ) : ?>
														<br>
													<?php endif ?>
												<?php endforeach ?>
											<?php endif ?>
										</p>
	                                </div>
	                            </dd>
	                        </dl>
	                    </div>
	                </div>
	                <div class="page-footer-logo"><a class="link-block text-center" href="<?= get_site_url() ?>" title="Harian Kompas"><img class="page-header-nameplate-logo-image" src="<?php echo get_template_directory_uri() ?>/assets/img/logos/logo_kompas_footer.png" ,="" alt="Harian Kompas"></a></div>
	            </div>
	        </div>
	    </div>
	<?php endif; ?>	    