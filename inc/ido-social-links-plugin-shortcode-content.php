<?php
if (!defined('ABSPATH')){
	exit;
}

    
    global $islp_options;
    $facebook_link_color    = $islp_options['facebook_link_color'];
    $twitter_link_color     = $islp_options['twitter_link_color'];
    $google_plus_link_color = $islp_options['google_plus_link_color'];
    $instagram_link_color   = $islp_options['instagram_link_color'];
	    ?>
    <hr class="divider">
    <div class="footer_social_links">
    <h4><?php echo __('Get Social With Us', 'islp_domain');?></h4>
    <ul id="islp-footer-links-list">
   <?php if( !empty( $islp_options['facebook_url'])){ ?>
    <li class="social-link" id="facebook">
		<a href="<?php echo $islp_options['facebook_url'];?>" target="_blank">
			<i class="fa fa-facebook" style="color:<?php echo $facebook_link_color;?>"></i>
		</a>
    </li>
    <?php }
        if( !empty($islp_options['twitter_url'])){ ?>
        <li class="social-link" id="twitter">
	        <a href="<?php echo $islp_options['twitter_url'];?>" target="_blank">
		        <i class="fa fa-twitter" style="color:<?php echo $twitter_link_color;?>"></i>
	        </a>
        </li>
    <?php }
   if( !empty($islp_options['google_plus_url'])){ ?>
       <li class="social-link" id="google">
	       <a href="<?php echo $islp_options['google_plus_url'];?>" target="_blank">
		       <i class="fa fa-google-plus" style="color:<?php echo $google_plus_link_color;?>"></i>
	       </a>
       </li>
   <?php }
   if( !empty($islp_options['instagram_url'])){ ?>
       <li class="social-link" id="instagram">
           <a href="<?php echo $islp_options['instagram_url'];?>" target="_blank">
               <i class="fa fa-instagram" style="color:<?php echo $instagram_link_color;?>"></i>
           </a>
       </li>
   <?php } ?>

    </ul>
    </div>
    

