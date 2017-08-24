<!-- START: NEW FOOTER-->
<footer>
	<?php if ( get_option('kompas_id_footer_general_layanan_pelanggan') == "on" ) : ?>
	    <div class="border-separator-bottom"></div>
	    <!-- START: PAGE FOOTER-CONTACT-->
	    <div class="pad-bottom-30 pad-top-30">
	        <?php if ( $footer_custom_support ) : ?>
	            <div class="row font-sans">
	                <div class="large-12 medium-12 columns">
	                    <div class="row">
	                        <div class="large-3 medium-3 columns mobile-pad-bottom-20">
	                            <div class="font-weight-400 line-height-2"><span class="font-weight-700">LAYANAN </span>PELANGGAN<i class="fa fa-angle-right pad-left-30 font-gray font-20" aria-hidden="true"></i></div>
	                        </div>
	                        <div class="large-9 medium-9 columns">
	                            <div class="row">
	
	                            	<?php if ( $footer_custom_support_telephone ) : ?>
	                                    <div class="medium-3 columns">
	                                        <div class="page-footer-profile-def-description">
	                                        	<a class="page-footer-cs-link" href="tel:<?php echo preg_replace( '/\s+/', '', $footer_custom_support_telephone ) ?>">
	                                                <div class="page-footer-profile-def-description-icon font-24 line-height-1">
	                                                	<i class="fa fa-phone v-align-middle" aria-hidden="true"></i>
	                                            	</div>
	                                                <div class="page-footer-profile-def-description-text line-height-1-4">
	                                                	<span class="page-footer-cs-term">KOMPAS KRING</span>
	                                                	<span class="font-12 mobile-font-20"><?php echo $footer_custom_support_telephone ?></span>
	                                            	</div>
	                                        	</a>
	                                    	</div>
	                                    </div>
	                                <?php endif ?>
	                                
									<?php if ( $footer_custom_support_whatsapp ) : ?>
	                                    <div class="medium-3 columns">
	                                        <div class="page-footer-profile-def-description">
	                                        	<a class="page-footer-cs-link" href="whatsapp://send/<?php echo str_replace( array( '+', ' ' ), array( '', '' ), $footer_custom_support_whatsapp ) ?>#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end">
	                                                <div class="page-footer-profile-def-description-icon font-24 line-height-1">
	                                                	<i class="fa fa-whatsapp v-align-middle" aria-hidden="true"></i>
	                                            	</div>
	                                                <div class="page-footer-profile-def-description-text line-height-1-4">
	                                                	<span class="page-footer-cs-term">WHATSAPP</span>
	                                                	<span class="font-12 mobile-font-20"><?php echo $footer_custom_support_whatsapp ?></span>
	                                            	</div>
	                                        	</a>
	                                    	</div>
	                                    </div>
	                                <?php endif ?>    
									
									<?php if ( $footer_custom_support_email ) : ?>
	                                    <div class="medium-3 columns">
	                                        <div class="page-footer-profile-def-description">
	                                        	<a class="page-footer-cs-link" href="mailto:<?php echo $footer_custom_support_email ?>">
	                                                <div class="page-footer-profile-def-description-icon font-24 line-height-1">
	                                                	<i class="fa fa-envelope-o v-align-middle" aria-hidden="true"></i>
	                                            	</div>
	                                                <div class="page-footer-profile-def-description-text line-height-1-4">
	                                                	<span class="page-footer-cs-term">EMAIL</span>
	                                                	<span class="font-12 mobile-font-20"><?php echo $footer_custom_support_email ?></span>
	                                            	</div>
	                                        	</a>
	                                    	</div>
	                                    </div>
	                                <?php endif ?>
	                                
	                                <?php if ( $footer_custom_support_office_hour ) : ?>
	                                <div class="medium-3 columns">
	                                    <div class="page-footer-profile-def-description">
	                                        <div class="page-footer-profile-def-description-icon font-24 line-height-1">
	                                        	<i class="fa fa-clock-o v-align-middle" aria-hidden="true"></i>
	                                    	</div>
	                                        <div class="page-footer-profile-def-description-text line-height-1-4">
	                                        	<span class="page-footer-cs-term">JAM KERJA</span>
	                                        	<span class="font-12 mobile-font-20"><?php echo $footer_custom_support_office_hour ?></span>
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