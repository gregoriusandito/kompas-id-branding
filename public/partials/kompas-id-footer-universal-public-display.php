
		<div class="page-footer-credit">
			<div class="kompas-row kompas-font-sans">
				<div class="kompas-small-12 kompas-columns clearfix page-footer-credit-wrapper kompas-pad-left-15 kompas-pad-right-15 kompas-mobile-pad-left-right-0">
					<span class="page-footer-credit-copy">&copy; <?php echo date('Y') ?> PT Kompas Media Nusantara</span>
                    <nav class="page-footer-credit-nav left">
                        <ul class="page-footer-credit-nav-list">
                        	<?php if ( $footer_custom_universal_left ) : ?>
	                            <?php foreach ( $footer_custom_universal_left as $left_value ) : ?>
	                            	<li class="menu-item">
	                            		<a href="<?= $left_value['kompas_theme_footer_left_footer_content_url'] ?>" title="<?= $left_value['kompas_theme_footer_left_footer_content_name'] ?>"><?= $left_value['kompas_theme_footer_left_footer_content_name'] ?></a>
	                        		</li>
	                            <?php endforeach; ?>
							<?php endif; ?>
                        </ul>
                    </nav>
                    <nav class="page-footer-credit-nav right">
                        <ul class="page-footer-credit-nav-list">
                        	<?php if ( $footer_custom_universal_right ) : ?>
	                            <?php foreach ( $footer_custom_universal_right as $right_value ) : ?>
	                            	<li class="menu-item">
	                            		<a href="<?= $right_value['kompas_theme_footer_right_footer_content_url'] ?>" title="<?= $right_value['kompas_theme_footer_right_footer_content_name'] ?>"><?= $right_value['kompas_theme_footer_right_footer_content_name'] ?></a>
	                        		</li>
	                            <?php endforeach; ?>
	                        <?php endif; ?>   
                        </ul>
                    </nav>
				</div>
			</div>
		</div>
	
</footer>
