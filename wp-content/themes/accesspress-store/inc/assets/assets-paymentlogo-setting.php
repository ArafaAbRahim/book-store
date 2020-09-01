<?php
function accesspress_paymentlogo_setting($wp_customize){
    $wp_customize->add_panel(
        'paymentlogo_setting',
        array(
            'priority'        =>      '60',
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => __( 'Payment/Certification Logo Setting', 'accesspress-store' ),
            'description' => __( 'This allows to edit the paymentlogo', 'accesspress-store' ),
            )
        );
    
    $wp_customize->add_section(
        'paymentlogo_images',
        array(
          'title'           =>      __('Payment Logo Images', 'accesspress-store'),
          'priority'        =>      '2',
          'panel' => 'paymentlogo_setting', )
        );
    
    $wp_customize->add_setting(
        'paymentlogo1_image',
        array(
            'default'       =>      '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'paymentlogo1_image',
        array(
            'section'       =>      'paymentlogo_images',
            'label'         =>      __('Upload Payment Logo 1 Image', 'accesspress-store'),
            'type'          =>      'image',
            )
        ));
    
    $wp_customize->add_setting(
        'paymentlogo2_image',
        array(
            'default'       =>      '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'paymentlogo2_image',
        array(
            'section'       =>      'paymentlogo_images',
            'label'         =>      __('Upload Payment Logo 2 Image', 'accesspress-store'),
            'type'          =>      'image',
            )
        ));
    
    $wp_customize->add_setting(
        'paymentlogo3_image',
        array(
            'default'       =>      '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );
    
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'paymentlogo3_image',
        array(
            'section'       =>      'paymentlogo_images',
            'label'         =>      __('Upload Payment Logo 3 Image', 'accesspress-store'),
            'type'          =>      'image',
            )
        ));
    
    $wp_customize->add_setting(
        'paymentlogo4_image',
        array(
            'default'       =>      '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'paymentlogo4_image',
        array(
            'section'       =>      'paymentlogo_images',
            'label'         =>      __('Upload Payment Logo 4 Image', 'accesspress-store'),                                        'type'          =>      'image',
            )
        ));
    $wp_customize->add_section(
        'other_images',
        array(
          'title'           =>      __('Other Logo Images', 'accesspress-store'),
          'priority'        =>      '2',
          'panel' => 'paymentlogo_setting', )
        );
    
    $wp_customize->add_setting(
        'other1_image',
        array(
            'default'       =>      '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'other1_image',
        array(
            'section'       =>      'other_images',
            'label'         =>      __('Upload SSL Seal Image', 'accesspress-store'),                                        'type'          =>      'image',
            )
        )); 
    $wp_customize->add_setting(
        'other2_image',
        array(
            'default'       =>      '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'other2_image',
        array(
            'section'       =>      'other_images',
            'label'         =>      __('Upload Other Seal 2 Image', 'accesspress-store'),                                        'type'          =>      'image',
            )
        ));
    $wp_customize->add_setting(
        'other3_image',
        array(
            'default'       =>      '',
            'sanitize_callback' => 'esc_url_raw'
            )
        );

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        'other3_image',
        array(
            'section'       =>      'other_images',
            'label'         =>      __('Upload Other Seal 2 Image', 'accesspress-store'),                                        'type'          =>      'image',
            )
        ));
/**
** Custom Themes Info
**/
    $wp_customize->add_panel(
        'theme_info',
        array(
            'priority'        =>      '160',
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => __( 'Theme Info', 'accesspress-store' ),
            )
        );
    
    $wp_customize->add_section(
        'our_product_info',
        array(
          'title'           =>  __('Our Products', 'accesspress-store'),
          'priority'        =>  '2',
          'panel' => 'theme_info', )
        );    
    
    $wp_customize->add_setting('theme_info_more_theme',array(
        'default' => '',
        'sanitize_callback' => 'accesspress_store_sanitize_text',
        ));

    $our_product = '<a target="_blank" href="'.admin_url().'themes.php?page=accesspressstore-themes">'.__('More Free Themes','accesspress-store').'</a> <br />';

    $wp_customize->add_control( new Theme_Info_Product_Custom_Control( $wp_customize ,'theme_info_more_theme',array(
        'label' => __( 'More Free Themes' , 'accesspress-store' ),
        'section' => 'our_product_info',
        'description' => $our_product
        )));

    $wp_customize->add_setting('theme_info_pro_theme',array(
        'default' => '',
        'sanitize_callback' => 'accesspress_store_sanitize_text',
        ));

    $our_product = '<a target="_blank" href="https://accesspressthemes.com/wordpress-themes/">'.__('AccessPress PRO Themes','accesspress-store').'</a> <br />';

    $wp_customize->add_control( new Theme_Info_Product_Custom_Control( $wp_customize ,'theme_info_pro_theme',array(
        'label' => __( 'AccessPress PRO Themes' , 'accesspress-store' ),
        'section' => 'our_product_info',
        'description' => $our_product
    )));

    $wp_customize->add_setting('theme_info_useful_plugins',array(
        'default' => '',
        'sanitize_callback' => 'accesspress_store_sanitize_text',
    ));

    $our_product = '<a target="_blank" href="'.esc_url('https://accesspressthemes.com/plugins/').'">'.__('AccessPress Plugins','accesspress-store').'</a>';  

    $wp_customize->add_control( new Theme_Info_Product_Custom_Control( $wp_customize ,'theme_info_useful_plugins',array(
        'label' => __( 'AccessPress Plugins' , 'accesspress-store' ),
        'section' => 'our_product_info',
        'description' => $our_product
    )));

    $wp_customize->add_section(
        'accesspress_store_pro_features',
        array(
          'title'           =>  __('AccessPress Store Pro Features', 'accesspress-store'),
          'priority'        =>  '4',
          'panel' => 'theme_info', 
    ));

    $wp_customize->add_setting('theme_info_theme',array(
        'default' => '',
        'sanitize_callback' => 'accesspress_store_sanitize_text',
    ));

    $wp_customize->add_control( new Theme_Info_Custom_Control( $wp_customize ,'theme_info_theme',array(
        'label' => __( 'Store Pro Features' , 'accesspress-store' ),
        'section' => 'accesspress_store_pro_features',
    )));

}
add_action('customize_register', 'accesspress_paymentlogo_setting');

// Our Product detail's
if(class_exists( 'WP_Customize_control')){
    class Theme_Info_Product_Custom_Control extends WP_Customize_Control
    {
        public function render_content()
        {
            ?>
            <label>
                <!-- <h3 class="customize-title"><?php //echo esc_html( $this->label ); ?></h3>
                <br /> -->
                <span class="customize-text_editor_desc button">
                    <?php echo wp_kses_post( $this->description ); ?>
                </span>
            </label>
            <?php
        }
    }
}

// AccessPress Store Pro Features
if(class_exists( 'WP_Customize_control')){
    class Theme_Info_Custom_Control extends WP_Customize_Control
    {
        public function render_content()
        {
            ?>
            <label>
                <h2 class="customize-title"><?php echo esc_html( $this->label ); ?></h2>
                <br />
                <span class="customize-text_editor_desc">
                    <?php //echo wp_kses_post( $this->description ); ?>
                  
                          <img src="<?php echo get_template_directory_uri() ?>/inc/images/feature-list-pro.jpg"/>
                              <ul class="admin-pro-feature-list">   
                        <li><span><?php _e('Fully built on customizer!','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Next generation WooCommerce theme','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Deep WooCommerce Integration!','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Mega menu','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Advanced product search','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Boxed and full layout','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Unlimited slider options','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Background configuration','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Color configuration','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Highly configurable home page','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Youtube video integration','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Multiple Category display layout','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Product and content search','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Promo Ticker','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Unlimited SSL Badge and credit card icons upload','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('WooCommerce settings','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('4 WooCommerce Archive layout','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('4 Page layout','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('4 Post layout','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Grid / list Archive view','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('4 Blog layout','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('14 Widgets','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Page banner','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Beautiful product page','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Beautiful checkout pages','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Widget for latest product with accordance','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Tab section to show category','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Tab section to show products','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Team section','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Testimonial section','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Client Logo Section','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Fully SEO optimized','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('Fast loading','accesspress-store'); ?> </span></li>
                        <li><span><?php _e('A perfect theme to start your online shop of any kind!','accesspress-store'); ?> </span></li>
                    </ul>

                    <a href="https://accesspressthemes.com/wordpress-themes/accesspress-store-pro" class="button button-primary buynow" target="_blank"><?php _e('Buy Now','accesspress-store'); ?></a>
                </span>
            </label>
            <?php
        }
    }
}