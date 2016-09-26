<?php

function islp_add_footer($content){
    
    global $islp_options;
    
    $footer_output = '<hr class="divider">';
    $footer_output .= '<div class="footer_social_links">';
    $footer_output .= '<h4>'.  __('Get Social With Us', 'csl_domain') . '</h4>';
    $footer_output .= '<ul id="islp-footer-links-list">';
    if(!empty($islp_options['facebook_url'])){
       $footer_output .= '<li class="social-link" id="facebook"><a href="'. $islp_options['facebook_url'] .'" target="_blank"><i class="fa fa-facebook"></i></a></li>'; 
    }
        if(!empty($islp_options['twitter_url'])){
        $footer_output .= '<li class="social-link" id="twitter"><a href="'. $islp_options['twitter_url'] .'" target="_blank"><i class="fa fa-twitter"></i></a></li>'; 
    }
   if(!empty($islp_options['google_plus_url'])){
       $footer_output .= '<li class="social-link" id="google"><a href="'. $islp_options['google_plus_url'] .'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
   }
    if(!empty($islp_options['yelp_url'])){
     $footer_output .= '<li class="social-link" id="yelp"><a href="'. $islp_options['yelp_url'] .'" target="_blank"><i class="fa fa-yelp"></i></a></li>';   
    }
    $footer_output .= '</ul>';
    $footer_output .= '</div>';
    
    //Enable / disable social links in feed
    
    if($islp_options['show_in_feed']){
        if(is_single() || is_home() && $islp_options['enable']){
        return $content . $footer_output;
    }
        
    }else{
        if(is_single() && $islp_options['enable']){
        return $content . $footer_output;
    }
    }
    
    
    
    return $content;
    
}
add_filter('the_content','islp_add_footer' );