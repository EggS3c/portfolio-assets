<?php 

/******
 * 
 * 
 * 
 *  Template Name: menu php
 *  Description: adding desktop, responsive menu
 *  
 * 
 */
                //notification for small devices
            function notification_small_devices_customizer_settings($wp_customizer){


                $wp_customizer->add_section('menu', array(
                    'title'=> __('Menu Settings', 'Portfolio'),
                    'priority' =>1
                ));
    
                $wp_customizer->add_setting('notification_img' , array(
                    'capability' => 'edit_theme_options'
                ));
    
                $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'notification_img', array(
                    'label' => __(' Small Divice Image ', 'Portfolio'),
                    'section' => 'menu'
                )));




                        /*****
                         * 
                         * 
                         * 
                         *  notification paragrapt
                         * 
                         * 
                         * 
                         */
                        $wp_customizer->add_setting('notification_paragrapth', array(
                            'capability'=> 'edit_theme_options',
                            'default'=> 'Global has so much to
                                         offer that we must request
                                         you orient your device to portrait 
                                         or find a larger screen. You wont
                                             be disappointed.'
                   ));
                        $wp_customizer->add_control('notification_paragrapth_control', array(
                           'label'=> __('', 'Portfolio'),
                           'description'=> 'notification text',      
                           'section'=> 'menu',
                           'settings'=> 'notification_paragrapth'
                       ));

        

         }

                add_action('customize_register', 'notification_small_devices_customizer_settings');
               
              // nav menu for desktop & outer menu
            function desktop_customizer_settings($wp_customizer){

                $wp_customizer->add_section('menu', array(
                    'title'=> __('Menu Settings', 'Portfolio'),
                    'priority' =>1
                ));
        
                $wp_customizer->add_setting('dsk_menu' , array(
                    'capability' => 'edit_theme_options',
                    'default'=> ''
                )); 
                
                /****
                 * 
                 * 
                 * 
                 *  website title
                 * 
                 * 
                 */
                $wp_customizer->add_setting('title' , array(
                    'capability' => 'edit_theme_options',
                    'default'=> 'hellowebs'
                ));   
                                
                $wp_customizer->add_control('title_control', array(
                    'label'=>__('Website Title', 'Portfolio'),
                    'description' => 'website title',
                    'section' => 'menu',
                    'settings'=>'title'
                ));
                
                                /*****
                                     * 
                                     * 
                                     * 
                                     *  desktop menu
                                     * 
                                     * 
                                     * 
                                     * 
                                     */     
                                                          // inner home
                                     $wp_customizer->add_setting('inner_home' , array(
                                        'capability' => 'edit_theme_options',
                                        'default'=> 'Home'
                                                    
                                
                                         ));
                                            $wp_customizer->add_control('inner_home_control', array(
                                                'label' =>__('Desktop Menu ', 'Portfolio'),
                                                'description'=> 'Desktop Menu 01 is active',
                                                'section'=> 'menu',
                                                'settings'=> 'inner_home'
                                            ));
                                    
                                                        // inner about
                                     $wp_customizer->add_setting('inner_about' , array(
                                        'capability' => 'edit_theme_options',
                                        'default'=> 'About'
                                                    
                                
                                         ));
                                            $wp_customizer->add_control('inner_about_control', array(
                                                'label' =>__(' 02', 'Portfolio'),
                                                'description'=> '',
                                                'section'=> 'menu',
                                                'settings'=> 'inner_about'
                                            ));
                                                                // inner recent
                                     $wp_customizer->add_setting('inner_recent' , array(
                                        'capability' => 'edit_theme_options',
                                        'default'=> 'Recent'
                                                    
                                
                                         ));
                                            $wp_customizer->add_control('inner_inner_control', array(
                                                'label' =>__(' 03', 'Portfolio'),
                                                'description'=> '',
                                                'section'=> 'menu',
                                                'settings'=> 'inner_recent'
                                            ));
                                                            // inner contact
                                     $wp_customizer->add_setting('inner_contact' , array(
                                        'capability' => 'edit_theme_options',
                                        'default'=> 'Contact'
                                                    
                                
                                         ));
                                            $wp_customizer->add_control('inner_contact_control', array(
                                                'label' =>__(' 04', 'Portfolio'),
                                                'description'=> '',
                                                'section'=> 'menu',
                                                'settings'=> 'inner_contact'
                                            ));
                                                            // inner services
                                     $wp_customizer->add_setting('inner_services' , array(
                                        'capability' => 'edit_theme_options',
                                        'default'=> 'Services'
                                                    
                                
                                         ));
                                            $wp_customizer->add_control('inner_services_control', array(
                                                'label' =>__(' 05', 'Portfolio'),
                                                'description'=> '',
                                                'section'=> 'menu',
                                                'settings'=> 'inner_services'
                                            ));


                                                    /***
                                                     * 
                                                     * 
                                                     * 
                                                     *  end of desktop & responsive menu
                                                     * 
                                                     * 
                                                     *
                                                     */ 
                                            /***               
                                             * 
                                             * 
                                             * 
                                             * 
                                             * 
                                             * 
                                             * 
                                             */
                                            /**
                                             * 
                                             * 
                                             * 
                                             *  outer nan menu
                                             * 
                                             * 
                                             * 
                                             * 
                                             */

                                            

        
          
                       
                                          //outer home
                               $wp_customizer->add_setting('outer_home' , array(
                                'capability' => 'edit_theme_options',
                                'default'=> 'Home'
                                 ));           
                        
                            
                                    $wp_customizer->add_control('outer_home_control', array(
                                        'label' =>__('Outer Menu ', 'Portfolio'),
                                        'description'=> 'When click on menu bars',
                                        'section'=> 'menu',
                                        'settings'=> 'outer_home'
                                    ));
                                    /**
                                     * outer recent
                                     *  
                                     */
                                    $wp_customizer->add_setting('outer_works' , array(
                                        'capability' => 'edit_theme_options',
                                        'default'=> 'Works'
                                                    
                                
                                    ));
                                            $wp_customizer->add_control('outer_works_control', array(
                                                'label' =>__('', 'Portfolio'),
                                                'description'=> '',
                                                'section'=> 'menu',
                                                'settings'=> 'outer_works'
                                            ));
                                            /****
                                             * 
                                             * 
                                             *   outer About
                                             * 
                                             */
                                            $wp_customizer->add_setting('outer_about' , array(
                                                'capability' => 'edit_theme_options',
                                                'default'=> 'About'
                                                            
                                        
                                            ));
                                                    $wp_customizer->add_control('outer_about_control', array(
                                                        'label' =>__('', 'Portfolio'),
                                                        'description'=> '',
                                                        'section'=> 'menu',
                                                        'settings'=> 'outer_about'
                                                    ));
                                                        /****
                                                         * 
                                                         * 
                                                         *  outer Contact
                                                         * 
                                                         */
                                                        $wp_customizer->add_setting('outer_contact' , array(
                                                            'capability' => 'edit_theme_options',
                                                            'default'=> 'Contact'
                                                                        
                                                    
                                                        ));
                                                                $wp_customizer->add_control('outer_contact_control', array(
                                                                    'label' =>__('', 'Portfolio'),
                                                                    'description'=> '',
                                                                    'section'=> 'menu',
                                                                    'settings'=> 'outer_contact'
                                                                ));

                                                                    /*****
                                                                     * 
                                                                     * 
                                                                     *  outer Services
                                                                     * 
                                                                     */
                                                                    $wp_customizer->add_setting('outer_services' , array(
                                                                        'capability' => 'edit_theme_options',
                                                                        'default'=> 'Services'
                                                                                    
                                                                
                                                                    ));
                                                                            $wp_customizer->add_control('outer_services_control', array(
                                                                                'label' =>__('', 'Portfolio'),
                                                                                'description'=> '',
                                                                                'section'=> 'menu',
                                                                                'settings'=> 'outer_services'
                                                                            ));

                                                                    /*****
                                                                     * 
                                                                     * 
                                                                     * 
                                                                     *  end of outer nan menu
                                                                     * 
                                                                     * 
                                                                     * 
                                                                     *  */     
                                                                   
               


            }
        
            add_action('customize_register', 'desktop_customizer_settings');

?>