	<?php if ( get_option('kompas_id_footer_general_status') == "on" ) : ?>
	    <!-- START: PAGE FOOTER—PROFILE-->
	    <div class="page-footer-gradient-background" 
	    <?php if ( $footer_color ) : ?>	
		    style="background: #eee;
		    	background: -moz-linear-gradient(left, #eee 0%, #eee 50%, <?= $footer_color ?> 50%, <?= $footer_color ?> 100%);
		    	background: -webkit-linear-gradient(left, #eee 0%, #eee 50%, <?= $footer_color ?> 50%, <?= $footer_color ?> 100%);
		    	background: linear-gradient(to right, #eeeeee 0%, #eeeeee 50%, <?= $footer_color ?> 50%, <?= $footer_color ?> 100%);
		    	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='<?= $footer_color ?>',GradientType=1 );"
		 <?php endif; ?>
		 >
	        <div class="kompas-row kompas-page-footer-profile-contents kompas-font-sans kompas-position-relative"
			<?php if ( $footer_width ) : ?>
			    style="max-width: <?= $footer_width ?>px;"
			<?php endif; ?>  
			>
	            <div class="kompas-large-10 kompas-columns page-footer-background-gray kompas-pad-top-40 kompas-pad-bottom-40 kompas-profile-left">
	                <div class="kompas-row">
	                    <div class="kompas-large-12 kompas-medium-12 kompas-columns">
	                        <div class="kompas-row">
	                            <div class="kompas-medium-7 kompas-columns">
	                                <div class="kompas-row">
	                                    <div class="kompas-medium-6 kompas-columns kompas-mobile-pad-bottom-40 kompas-profile-left-inner">
	                                    	<?php if ( $footer_custom_profile_text ) : ?>
	                                            <div class="kompas-page-footer-profile-text">
	                                            	<?php echo $footer_custom_profile_text ?>
	                                            </div>
	                                        <?php endif; ?>    
	                                        <?php if ( $footer_custom_profile_social_accounts ) : ?>
	                                            <div class="kompas-page-footer-profile-social-accounts new">
	                                                <ul class="kompas-page-footer-profile-social-accounts-list">
														<?php foreach( $footer_custom_profile_social_accounts as $social_account ) : ?>
															<li class="kompas-page-footer-profile-social-accounts-item new">
																<a class="page-footer-profile-social-accounts-link" href="<?php echo $social_account['kompas_theme_footer_custom_social_account_url'] ?>" target="_blank" title="<?php echo $social_account['kompas_theme_footer_custom_social_account_name'] ?>">
																	<i class="<?php echo $social_account['kompas_theme_footer_custom_social_account_css_class'] ?>" aria-hidden="true"></i>
																</a>
															</li>
														<?php endforeach ?>
	                                                </ul>
	                                            </div>
	                                        <?php endif; ?>    
	                                    </div>
	                                    <div class="kompas-large-6 kompas-medium-6 kompas-columns kompas-profile-left-inner">
	                                        <div class="kompas-page-footer-profile-container">
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
	                            <div class="kompas-medium-5 kompas-columns">
	                                <div class="kompas-row">
	                                    <div class="kompas-large-6 kompas-small-6 kompas-columns">
	                                        <dl>
	                                        	<?php if ( $footer_custom_products ) : ?>
	                                                <dt class="page-footer-profile-def-term">Produk</dt>
	                                                <dd class="page-footer-profile-def-description">
	                                                    <div class="page-footer-profile-def-link">
															<p>
																<?php foreach($footer_custom_products as $custom_product) : ?>
																	<a class="kompas-text-black" href="<?php echo $custom_product['kompas_theme_footer_custom_product_url'] ?>" title="<?php echo $custom_product['kompas_theme_footer_custom_product_name'] ?>" target="_blank"><?php echo $custom_product['kompas_theme_footer_custom_product_name'] ?></a><br>
																<?php endforeach ?>
															</p>
	                                                    </div>
	                                                </dd>
	                                            <?php endif; ?>
	                                        </dl>
	                                    </div>
	                                    <div class="kompas-large-6 kompas-small-6 kompas-columns">
	                                        <dl>
	                                        	<?php if ( $footer_custom_ads_products ) : ?>
	                                                <dt class="page-footer-profile-def-term">Iklan</dt>
	                                                <dd class="page-footer-profile-def-description">
	                                                    <div class="page-footer-profile-def-link">
															<p>
																<?php foreach($footer_custom_ads_products as $custom_ads_product) : ?>
																	<a class="kompas-text-black" href="<?php echo $custom_ads_product['kompas_theme_footer_custom_ads_product_url'] ?>" title="<?php echo $custom_ads_product['kompas_theme_footer_custom_ads_product_name'] ?>" target="_blank"><?php echo $custom_ads_product['kompas_theme_footer_custom_ads_product_name'] ?></a><br>
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
	            <div class="kompas-large-2 kompas-columns page-footer-background-royal-blue kompas-pad-20 kompas-pad-top-40 kompas-pad-bottom-40 kompas-position-relative" style="background-color: <?= $footer_color ?>;">
	                <div class="kompas-row">
	                    <div class="kompas-large-12 kompas-medium-12 kompas-columns">
	                        <dl>
	                            <dt class="page-footer-profile-def-term kompas-text-white">Tentang</dt>
	                            <dd class="page-footer-profile-def-description">
	                                <div class="page-footer-profile-def-link">
										<p>
											<?php if ( $footer_custom_about_links ) : ?>
												<?php foreach ( $footer_custom_about_links as $key => $about_link ) : ?>
													<a class="kompas-text-white" href="<?php echo $about_link['kompas_theme_footer_about_repeater_url'] ?>" title="<?php echo $about_link['kompas_theme_footer_about_repeater_label'] ?>" target="_blank"><?php echo $about_link['kompas_theme_footer_about_repeater_label'] ?></a>
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
	                            <dt class="page-footer-profile-def-term kompas-text-white">Lainnya</dt>
	                            <dd class="page-footer-profile-def-description">
	                                <div class="page-footer-profile-def-link">
										<p>
											<?php if ( $footer_custom_other_links ) : ?>
												<?php foreach ( $footer_custom_other_links as $key => $other_link ) : ?>
													<a class="kompas-text-white" href="<?php echo $other_link['kompas_theme_footer_about_repeater_url'] ?>" title="<?php echo $other_link['kompas_theme_footer_about_repeater_label'] ?>" target="_blank"><?php echo $other_link['kompas_theme_footer_about_repeater_label'] ?></a>
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
	                <div class="page-footer-logo kompas-pad-right-20">
	                	<a class="kompas-link-block kompas-text-center" href="https://kompas.id" title="Harian Kompas">
	                		<img class="kompas-footer-logo-height" src="<?php echo plugin_dir_url(dirname(__FILE__)) ?>img/logos/kompas-footer-logo.svg" alt="Harian Kompas">
                		</a>
            		</div>
	            </div>
	        </div>
	    </div>
	<?php endif; ?>	    