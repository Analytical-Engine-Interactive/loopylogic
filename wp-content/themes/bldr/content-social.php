
												
			<div class="social-bar"> 
        		<div class="grid grid-pad">
        			<div class="col-1-1">
                
                	<?php if ( get_theme_mod( 'footer_social_text' ) ) : ?>
        			  	
                        <h3>
							<?php echo esc_html( get_theme_mod( 'footer_social_text' )); ?>
                        </h3> 
                	
					<?php endif; ?> 
              			
                        	<ul class='social-media-icons'>
                            	<?php if ( get_theme_mod( 'bldr_fb' ) ) : ?> 
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_fb' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-facebook"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_twitter' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_twitter' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-twitter"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_linked' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_linked' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-linkedin"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_google' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_google' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-google-plus"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_instagram' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_instagram' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-instagram"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_snapchat' ) ) : ?> 
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_snapchat' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-snapchat-ghost"></i>   
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_vine' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_vine' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-vine"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_flickr' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_flickr' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-flickr"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_pinterest' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_pinterest' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-pinterest"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_youtube' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_youtube' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-youtube"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_vimeo' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_vimeo' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-vimeo-square"></i>
                                    </a>
                                    </li> 
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_tumblr' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_tumblr' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-tumblr"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_dribbble' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_dribbble' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-dribbble"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_behance' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_behance' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-behance"></i>
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_500px' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_500px' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-500px"></i>
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_vk' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_vk' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-vk"></i>
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_yelp' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_yelp' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-yelp"></i>
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_xing' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_xing' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-xing"></i>
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_skype' ) ) : ?>
                                	<li>
                                    <a href="skype:<?php echo esc_html( get_theme_mod( 'bldr_skype' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-skype"></i> 
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_deviant' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_deviant' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-deviantart"></i>
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_reddit' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_reddit' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-reddit"></i>
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_github' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_github' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-github"></i>
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_codepen' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_codepen' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-codepen"></i>
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_spotify' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_spotify' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-spotify"></i>
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_soundcloud' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_soundcloud' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-soundcloud"></i>
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_lastfm' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_lastfm' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-lastfm"></i> 
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_stumble' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_stumble' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-stumbleupon"></i>  
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_weibo' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_weibo' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-weibo"></i>  
                                    </a> 
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_rss' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_rss' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-rss"></i>
                                    </a>
                                    </li>   
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_phone_number_icon' ) ) : ?>
                                	<li>
                                    <a href="tel:<?php echo esc_attr( get_theme_mod( 'bldr_phone_number_icon' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-phone"></i> 
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_email_icon' ) ) : ?>
                                	<li>
                                    <a href="mailto:<?php echo esc_html( get_theme_mod( 'bldr_email_icon' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>  
                                    <i class="fa fa-envelope"></i> 
                                    </a>
                                    </li> 
								<?php endif; ?> 
                        	</ul>
                       
                
                	</div><!-- col-1-1 -->
        		</div><!-- grid -->
        	</div><!-- social-bar -->
    											