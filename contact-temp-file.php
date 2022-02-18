<?php 
    /***
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * Template Name: contact files .php
     *  Description: Adding Customizer Settings to the projects field
     *  
     * 
     * 
     * 
     * 
     * 
     * 
     */

        //adding contact image
    function contact_customizer_settings($wp_customizer){


        $wp_customizer->add_section('Contact Settings', array(
            'title'=> __('Contact Settings', 'Portfolio'),
            'priority' =>15
        ));

        $wp_customizer->add_setting('contact_img_bg' , array(
            'capability' => 'edit_theme_options'
        ));

        $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'contact_img_bg', array(
            'label' => __(' Contact Image ', 'Portfolio'),
            'section' => 'Contact Settings'
        )));

                /*****
                 * 
                 * 
                 * 
                 * 
                 *  adding contact information
                 * 
                 * 
                 * 
                 * 
                 */
                               //  address
                               $wp_customizer->add_setting('get_address' , array(
                                'capability' => 'edit_theme_options',
                                'default'=> '123 Somewhere In Durham, NC. 27703'
                                            
                        
                            ));
                                    $wp_customizer->add_control('get_address_control', array(
                                        'label' =>__('Address', 'Portfolio'),
                                        'description'=> '',
                                        'section'=> 'Contact Settings',
                                        'settings'=> 'get_address'
                                    ));

                                    /****
                                     * 
                                     * 
                                     *  email 
                                     * 
                                     * 
                                     */

                                $wp_customizer->add_setting('get_email' , array(
                                    'capability' => 'edit_theme_options',
                                    'default'=> 'hellowebs@protonmail.com'
                                            
                        
                                         ));
                                    $wp_customizer->add_control('get_email_control', array(
                                        'label' =>__('Email', 'Portfolio'),
                                        'description'=> '',
                                        'section'=> 'Contact Settings',
                                        'settings'=> 'get_email'
                                              ));

                                        /****
                                         * 
                                         * 
                                         * 
                                         * 
                                         *  Phone 
                                         * 
                                         * 
                                         */
                                        $wp_customizer->add_setting('get_number' , array(
                                            'capability' => 'edit_theme_options',
                                            'default'=> '(919) 695-5820'
                                                    
                                
                                                 ));
                                            $wp_customizer->add_control('get_number_control', array(
                                                'label' =>__('Phone Number', 'Portfolio'),
                                                'description'=> '',
                                                'section'=> 'Contact Settings',
                                                'settings'=> 'get_number'
                                                      ));
                                                            /*****
                                                             * 
                                                             * 
                                                             * 
                                                             * 
                                                             *  links
                                                             * 
                                                             * 
                                                             */     
                                                                    //git
                                                           $wp_customizer->add_setting('get_git' , array(
                                                             'capability' => 'edit_theme_options',
                                                                'default'=> 'Git '
                                                           ));
                                                    
                                
                                                            $wp_customizer->add_control('get_git_control', array(
                                                                 'label' =>__('Links', 'Portfolio'),
                                                                    'description'=> '',
                                                                    'section'=> 'Contact Settings',
                                                                    'settings'=> 'get_git'
                                                                        ));
                                                                        /***
                                                                         * 
                                                                         *  Bēhance
                                                                         * 
                                                                         */
                                                                        
                                                           $wp_customizer->add_setting('get_behance' , array(
                                                            'capability' => 'edit_theme_options',
                                                               'default'=> 'Bēhance'
                                                          ));
                                                   
                               
                                                           $wp_customizer->add_control('get_behance_control', array(
                                                                'label' =>__('', 'Portfolio'),
                                                                   'description'=> '',
                                                                   'section'=> 'Contact Settings',
                                                                   'settings'=> 'get_behance'
                                                                       ));
                                                                        /****
                                                                         * 
                                                                         *  
                                                                         *  dribble
                                                                         * 
                                                                         */
                                                            $wp_customizer->add_setting('get_dribble' , array(
                                                                'capability' => 'edit_theme_options',
                                                                    'default'=> 'Dribble'
                                                                          ));
                                                                   
                                               
                                                            $wp_customizer->add_control('get_dribble_control', array(
                                                                'label' =>__('', 'Portfolio'),
                                                                    'description'=> '',
                                                                        'section'=> 'Contact Settings',
                                                                        'settings'=> 'get_dribble'
                                                                        ));
                                                                        
                                                                        //adding options to the contact info
                                                                        //setting private page
                                                                        //setting un private event


        

    }


        add_action('customize_register', 'contact_customizer_settings');












?>