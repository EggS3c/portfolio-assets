<?php


    /***
     * 
     * 
     *  Template Name: about.php #3
     *  Description: Adding Customizer Settings to the projects field
     * 
     * 
     * 
     * 
     */


/*****
 * 
 * 
 * 
 * //page.php
 * 
 * 
 * 
 * 
 */         //adding Image
        function about_customizer_settings($wp_customizer){

            
            $wp_customizer->add_section('About Settings', array(
                'title'=> __('About Settings', 'Portfolio'),
                'priority' =>3
            ));

            $wp_customizer->add_setting('the_image' , array(
                'capability' => 'edit_theme_options'
            ));

            $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'the_image', array(
                'label' => __(' Main Image ', 'Portfolio'),
                'section' => 'About Settings'
            )));
                         /******
                         * 
                         * 
                         * 
                         *  about title field
                         * 
                         * 
                         */ 
                            
            
            
                         //  adding dynamic title settings
                                  $wp_customizer->add_setting('get_about_title' , array(
                                    'capability' => 'edit_theme_options',
                                    'default'=> 'We believe in passionate people'
                                                
                            
                                ));
                                        $wp_customizer->add_control('get_about_title_control', array(
                                            'label' =>__('About Title', 'Portfolio'),
                                            'description'=> 'Add your About Title ',
                                            'section'=> 'About Settings',
                                            'settings'=> 'get_about_title'
                                        ));

            
            
                            
                        /******
                         * 
                         * 
                         * 
                         *  cta field
                         * 
                         * 
                         */ 
                                           //cta button
    
              
                                    $wp_customizer->add_setting('the_cta' , array(
                                    'capability' => 'edit_theme_options',
                                    'default'=> 'career'
                                                
                            
                                ));
                                     $wp_customizer->add_control('the_cta_control', array(
                                     'label' =>__('CTA Button', 'Portfolio'),
                                        'description'=> 'Call To Action Button',
                                        'section'=> 'About Settings',
                                        'settings'=> 'the_cta'
                                        ));
              
                   
                             /******
                         * 
                         * 
                         * 
                         *  the end
                         * 
                         * 
                         */ 

                    
    
        }

        add_action('customize_register', 'about_customizer_settings');


        /** 
         * 
         * 
         * 
         * 
         *  left image (desktop) only
         * 
         * 
         * 
         * 
         */
        function about_left_image_customizer_settings($wp_customizer){

            
            $wp_customizer->add_section('About Settings', array(
                'title'=> __('About Settings', 'Portfolio'),
                'priority' =>3
            ));

            $wp_customizer->add_setting('get_image_left' , array(
                'capability' => 'edit_theme_options'
            ));

            $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'get_image_left', array(
                'label' => __(' Upload/Change left image ', 'Portfolio'),
                'section' => 'About Settings'
            )));

                             /******
                         * 
                         * 
                         * 
                         *  image cta text field
                         * 
                         * 
                         */ 
            
                        $wp_customizer->add_setting('get_image_left_title' , array(
                            'capability' => 'edit_theme_options',
                            'default'=> 'add title here'
                                        
                    
                        ));
                                $wp_customizer->add_control('get_image_left_title_control', array(
                                    'label' =>__('About Title', 'Portfolio'),
                                    'description'=> 'Add your About Title ',
                                    'section'=> 'About Settings',
                                    'settings'=> 'get_image_left_title'
                                ));
                    
        
        }

        add_action('customize_register', 'about_left_image_customizer_settings');


         /** 
         * 
         * 
         * 
         * 
         *  middle image (desktop) only
         * 
         * 
         * 
         * 
         */

         function middle_image_customizer_settings($wp_customizer){

           
            $wp_customizer->add_section('About Settings', array(
                'title' => __('About Settings', 'Portfolio'),
                'priority' =>3
            ));

            $wp_customizer->add_setting('the_middle_image', array(
                'capability' => 'edit_theme_options'
            ));

            $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'the_middle_image', array(
                'label' => __('Upload/Change middle image', 'Portfolio'),
                'section' => 'About Settings' 
            )));

                                /******
                         * 
                         * 
                         * 
                         *  left image title
                         * 
                         * 
                         */
                                
                        $wp_customizer->add_setting('get_image_middle_title' , array(
                            'capability' => 'edit_theme_options',
                            'default'=> 'Philosophy'
                                        
                    
                        ));
                                $wp_customizer->add_control('get_image_middle_title_control', array(
                                    'label' =>__('About Title', 'Portfolio'),
                                    'description'=> 'Add your About Title ',
                                    'section'=> 'About Settings',
                                    'settings'=> 'get_image_middle_title'
                                ));
                    

         }


            add_action('customize_register','middle_image_customizer_settings');
        


        /** 
         * 
         * 
         * 
         * 
         *  right image (desktop) only
         * 
         * 
         * 
         * 
         * 
         */

         function right_image_settings($wp_customizer){

            $wp_customizer->add_section('About Settings', array(
                'title' => __('About Settings', 'Portfolio'),
                'priority' =>3
            ));

            $wp_customizer->add_setting('the_right_image', array(
                'capability' => 'edit_theme_options'
            ));

            $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'the_right_image', array(
                'label' => __('Upload/Change right image', 'Portfolio'),
                'section' => 'About Settings' 
            )));

                         /******
                         * 
                         * 
                         * 
                         *  right image title
                         * 
                         * 
                         * 
                         * 
                         * 
                         * 
                         */
                        $wp_customizer->add_setting('the_right_image_title' , array(
                            'capability' => 'edit_theme_options',
                            'default'=> 'History'
                                        
                    
                        ));
                                $wp_customizer->add_control('the_right_image_title_control', array(
                                    'label' =>__('About Title', 'Portfolio'),
                                    'description'=> 'Add your About Title ',
                                    'section'=> 'About Settings',
                                    'settings'=> 'the_right_image_title'
                                ));
         }


         add_action('customize_register', 'right_image_settings');



?>