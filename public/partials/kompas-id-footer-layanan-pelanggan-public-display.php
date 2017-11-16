<!-- START: NEW FOOTER-->
<footer class="kompas-position-relative kompas-branding-footer">
	<?php if ( get_option('kompas_id_footer_general_layanan_pelanggan') == "on" ) : ?>
	    <div class="kompas-border-separator-bottom"></div>
	    <!-- START: PAGE FOOTER-CONTACT-->
	    <div class="kompas-pad-bottom-30 kompas-pad-top-30" style="background-color: #fefefe">
	        <?php if ( $footer_custom_support ) : ?>
	            <div class="kompas-row kompas-font-sans"
				<?php if ( $footer_width ) : ?>
				    style="max-width: <?= $footer_width ?>px;"
				<?php endif; ?>  
				>
	                <div class="kompas-large-12 kompas-medium-12 kompas-columns">
	                    <div class="kompas-row kompas-pad-left-15 kompas-pad-right-15 kompas-mobile-pad-right-10 kompas-mobile-pad-left-10"
						<?php if ( $footer_width ) : ?>
						    style="max-width: <?= $footer_width ?>px;"
						<?php endif; ?>  
						>
	                        <div class="kompas-large-3 kompas-medium-3 kompas-columns kompas-mobile-pad-bottom-20 kompas-padding-10-auto">
	                            <div class="kompas-font-weight-400 kompas-line-height-2 kompas-font-16">
	                            	<span class="kompas-font-weight-700">LAYANAN </span>PELANGGAN
	                            	<i class="fa fa-angle-right kompas-pad-left-30 kompas-font-gray kompas-font-20" aria-hidden="true"></i></div>
	                        </div>
	                        <div class="kompas-large-9 kompas-medium-9 kompas-columns">
	                            <div class="kompas-row">

	                            	<?php if ( $footer_custom_support_telephone ) : ?>
	                                    <div class="kompas-medium-3 kompas-columns">
	                                        <div class="kompas-page-footer-profile-def-description kompas-pad-left-15 kompas-pad-right-15 kompas-mobile-pad-left-right-0">
	                                        	<a class="page-footer-cs-link" href="tel:<?php echo preg_replace( '/\s+/', '', $footer_custom_support_telephone ) ?>">
	                                                <div class="page-footer-profile-def-description-icon kompas-font-24 kompas-line-height-1">
	                                                	<i class="fa fa-phone kompas-v-align-middle" aria-hidden="true"></i>
	                                            	</div>
	                                                <div class="page-footer-profile-def-description-text kompas-line-height-1-4">
	                                                	<span class="page-footer-cs-term">KOMPAS KRING</span>
	                                                	<span class="kompas-font-12 kompas-mobile-font-20"><?php echo $footer_custom_support_telephone ?></span>
	                                            	</div>
	                                        	</a>
	                                    	</div>
	                                    </div>
	                                <?php endif ?>
	                                
									<?php if ( $footer_custom_support_whatsapp ) : ?>
	                                    <div class="kompas-medium-3 kompas-columns">
	                                        <div class="kompas-page-footer-profile-def-description kompas-pad-left-15 kompas-pad-right-15 kompas-mobile-pad-left-right-0">
	                                        	<a class="page-footer-cs-link" href="whatsapp://send/<?php echo str_replace( array( '+', ' ' ), array( '', '' ), $footer_custom_support_whatsapp ) ?>#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end">
	                                                <div class="page-footer-profile-def-description-icon kompas-font-24 kompas-line-height-1">
	                                                	<i class="fa fa-whatsapp kompas-v-align-middle" aria-hidden="true"></i>
	                                            	</div>
	                                                <div class="page-footer-profile-def-description-text kompas-line-height-1-4">
	                                                	<span class="page-footer-cs-term">WHATSAPP</span>
	                                                	<span class="kompas-font-12 kompas-mobile-font-20"><?php echo $footer_custom_support_whatsapp ?></span>
	                                            	</div>
	                                        	</a>
	                                    	</div>
	                                    </div>
	                                <?php endif ?>    
									
									<?php if ( $footer_custom_support_email ) : ?>
	                                    <div class="kompas-medium-3 kompas-columns">
	                                        <div class="kompas-page-footer-profile-def-description kompas-pad-left-15 kompas-pad-right-15 kompas-mobile-pad-left-right-0">
	                                        	<a class="page-footer-cs-link" href="mailto:<?php echo $footer_custom_support_email ?>">
	                                                <div class="page-footer-profile-def-description-icon kompas-font-24 kompas-line-height-1">
	                                                	<i class="fa fa-envelope-o kompas-v-align-middle" aria-hidden="true"></i>
	                                            	</div>
	                                                <div class="page-footer-profile-def-description-text kompas-line-height-1-4">
	                                                	<span class="page-footer-cs-term">EMAIL</span>
	                                                	<span class="kompas-font-12 kompas-mobile-font-20"><?php echo $footer_custom_support_email ?></span>
	                                            	</div>
	                                        	</a>
	                                    	</div>
	                                    </div>
	                                <?php endif ?>
	                                
	                                <?php if ( $footer_custom_support_office_hour ) : ?>
	                                <div class="kompas-medium-3 kompas-columns">
	                                    <div class="kompas-page-footer-profile-def-description kompas-pad-left-15 kompas-pad-right-15 kompas-mobile-pad-left-right-0">
	                                        <div class="page-footer-profile-def-description-icon kompas-font-24 kompas-line-height-1">
	                                        	<i class="fa fa-clock-o kompas-v-align-middle" aria-hidden="true"></i>
	                                    	</div>
	                                        <div class="page-footer-profile-def-description-text kompas-line-height-1-4">
	                                        	<span class="page-footer-cs-term">JAM KERJA</span>
	                                        	<span class="kompas-font-12 kompas-mobile-font-20"><?php echo $footer_custom_support_office_hour ?></span>
	                                		</div>
	                                    </div>
	                                </div>
	                                <?php endif ?>
	                                
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	    	<?php endif ?>	        
	    </div>
	    <!-- END: PAGE FOOTER-CONTACT  -->
    <?php endif; ?>
