<?php



// Create the Menu link

function islp_options_menu_link(){
    add_options_page('Social Footer Links', 'social footer links', 'manage_options', 'islp-options', 'islp_options_content');
    
}

//Create Options page content
function islp_options_content(){
    
// init global variable for options

global $islp_options;

    ob_start();?>

    <div class="wrap">
        <h2><?php _e('Social Footer Links', 'islp_domain') ;?></h2>
        <p>
            <?php _e('Settings For the Social Footer Links Plugin', 'islp_domain') ;?>
        </p>
        <form action="options.php" method="post">

            <?php settings_fields('islp_settings_gruop') ;?>
                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row">
                                <label for="islp_settings[enable]">
                                    <?php _e('Enable Social Links', 'islp_domain') ;?>
                                </label>
                            </th>
                            <td>
                                <input type="checkbox" name="islp_settings[enable]" value="1" <?php checked( '1', $islp_options[ 'enable']) ;?> id="islp_settings[enable]"></td>
                        </tr>
                        
                            <th><i class="dashicons dashicons-facebook"></i>
                                <?php echo _e('Facebook Settings', 'islp_domain');?>
                            </th>
                            
                                <tr>
                                    <th scope="row">

                                        <label for="islp_settings[facebook_url]">
                                            <?php _e('Facebook Page URL', 'islp_domain') ;?>
                                        </label>
                                    </th>
                                    <td>
                                        <input type="text" name="islp_settings[facebook_url]" value="<?php echo $islp_options['facebook_url'] ;?>" id="islp_settings[facebook_url]" class="regular-text" />
                                        <p class="description">
                                            <?php _e('Enter facebook page URL', 'islp_domain');?>
                                        </p>
                                    </td>
                                </tr>
                            
                        <!--/ Facebook link settings-->
                        <tr>
                            <th><i class="dashicons dashicons-googleplus"></i>
                                <?php echo _e('Google Plus Settings', 'islp_domain');?>
                            </th>
                            <td>
                                <tr>
                                    <th scope="row">

                                        <label for="islp_settings[google_plus_url]">
                                            <?php _e('Google Business Page URL', 'islp_domain') ;?>
                                        </label>
                                    </th>
                                    <td>
                                        <input type="text" name="islp_settings[google_plus_url]" value="<?php echo $islp_options['google_plus_url'] ;?>" id="islp_settings[google_plus_url]" class="regular-text" />
                                        <p class="description">
                                            <?php _e('Google Business Page URL', 'islp_domain');?>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">

                                        <label for="islp_settings[google_plus_link_color]">
                                            <?php _e('Google Business Page Link Color', 'islp_domain') ;?>
                                        </label>
                                    </th>
                                    <td>
                                        <input type="text" name="islp_settings[google_plus_link_color]" value="<?php echo $islp_options['google_plus_link_color'] ;?>" id="islp_settings[google_plus_link_color]" class="regular-text" />
                                        <p class="description">
                                            <?php _e('Enter google_plus page Link Color or HEX value with #', 'islp_domain');?>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="islp_settings[show_in_feed]">
                                            <?php _e('Show in Posts Feed', 'islp_domain') ;?>
                                        </label>
                                    </th>
                                    <td>
                                        <input type="checkbox" name="islp_settings[show_in_feed]" value="1" <?php checked( '1', $islp_options[ 'show_in_feed']) ;?> id="islp_settings[show_in_feed]"></td>
                                </tr>
                            </td>
                        </tr>
                        <!--/ Google +  link settings-->
                        <tr>
                            <th><i class="dashicons dashicons-twitter"></i>
                                <?php echo _e('Twitter Settings', 'islp_domain') ;?>
                            </th>
                            <td>
                                <tr>
                                    <th scope="row">

                                        <label for="islp_settings[twitter_url]">
                                            <?php _e('Twitter Profile URL', 'islp_domain') ;?>
                                        </label>
                                    </th>
                                    <td>
                                        <input type="text" name="islp_settings[twitter_url]" value="<?php echo $islp_options['twitter_url'] ;?>" id="islp_settings[twitter_url]" class="regular-text" />
                                        <p class="description">
                                            <?php _e('Twitter Profile URL', 'islp_domain');?>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">

                                        <label for="islp_settings[twitter_plus_link_color]">
                                            <?php _e('Twitter Page Link Color', 'islp_domain') ;?>
                                        </label>
                                    </th>
                                    <td>
                                        <input type="text" name="islp_settings[twitter_link_color]" value="<?php echo $islp_options['twitter_link_color'] ;?>" id="islp_settings[twitter_link_color]" class="regular-text" />
                                        <p class="description">
                                            <?php _e('Enter Twitter page Link Color or HEX value with #', 'islp_domain');?>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <label for="islp_settings[show_in_feed]">
                                            <?php _e('Show in Posts Feed', 'islp_domain') ;?>
                                        </label>
                                    </th>
                                    <td>
                                        <input type="checkbox" name="islp_settings[show_in_feed]" value="1" <?php checked( '1', $islp_options[ 'show_in_feed']) ;?> id="islp_settings[show_in_feed]"></td>
                                </tr>
                            </td>
                        </tr>
                        <!--/ Twitter  link settings-->

                    </tbody>

                </table>
                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'islp_domain') ;?>">
                </p>
        </form>
    </div>

    <?php

echo ob_get_clean();

}

add_action('admin_menu','islp_options_menu_link');

//register the settings

function islp_register_settings(){
    register_setting('islp_settings_gruop', 'islp_settings');
    
}
add_action('admin_init', 'islp_register_settings');