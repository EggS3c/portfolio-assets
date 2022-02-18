<?php 

/***
 * 
 * 
 * 
 * 
 * 
 * 
 *  Template Name: footer template php
 *  Description: Adding customizer settings
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */


        //Adding footer section and page title
        function get_footer_title($wp_customizer){

            $wp_customizer->add_section('footer', array(
                'title'=> __('Footer Settings', 'Portfolio'),
                'priority' =>16
            ));

            $wp_customizer->add_setting('footer_title' , array(
                'capability' => 'edit_theme_options',
                'default'=> 'What can I help you with?'
        
            ));
                    $wp_customizer->add_control('footer_title_control', array(
                        'label' =>__('Page Title', 'Portfolio'),
                        'description'=> '',
                        'section'=> 'footer',
                        'settings'=> 'footer_title'
                    ));

        /***
         * 
         * 
         * 
         *  sub title field
         * 
         * 
         * 
         */
            $wp_customizer->add_setting('footer_sub_title' , array(
                 'capability' => 'edit_theme_options',
                    'default'=> 'Didnt see what youre looking for?
                                    or simply have an idea on a project
                                    and dont know where to start'
    
                ));

                    $wp_customizer->add_control('sub_footer_title_control', array(
                        'label' =>__('Sub Title', 'Portfolio'),
                        'description'=> '',
                        'section'=> 'footer',
                        'settings'=> 'footer_sub_title'
                     ));

                            /****
                             * 
                             * 
                             *  app design
                             * 
                             * 
                             */
                            $wp_customizer->add_setting('setting_design' , array(
                                'capability' => 'edit_theme_options',
                                'default'=> 'App Design'
                        
                            ));
                                    $wp_customizer->add_control('setting_design_control', array(
                                        'label' =>__('Services', 'Portfolio'),
                                        'description'=> 'enter your services',
                                        'section'=> 'footer',
                                        'settings'=> 'setting_design'
                                    ));
                              /****
                             * 
                             * 
                             *  graphic design
                             * 
                             * 
                             */
                            $wp_customizer->add_setting('setting_graphic' , array(
                                'capability' => 'edit_theme_options',
                                'default'=> 'Graphic Design'
                        
                            ));
                                    $wp_customizer->add_control('setting_graphic_control', array(
                                        'label' =>__('', 'Portfolio'),
                                        'description'=> '',
                                        'section'=> 'footer',
                                        'settings'=> 'setting_graphic'
                                    ));
                              /****
                             * 
                             * 
                             *  motion design
                             * 
                             * 
                             */
                            $wp_customizer->add_setting('setting_motion' , array(
                                'capability' => 'edit_theme_options',
                                'default'=> 'Motion Design'
                        
                            ));
                                    $wp_customizer->add_control('setting_motion_control', array(
                                        'label' =>__('', 'Portfolio'),
                                        'description'=> '',
                                        'section'=> 'footer',
                                        'settings'=> 'setting_motion'
                                    ));
                              /****
                             * 
                             * 
                             *  UX/UI design
                             * 
                             * 
                             */
                            $wp_customizer->add_setting('setting_uxui' , array(
                                'capability' => 'edit_theme_options',
                                'default'=> 'UX/UI Design'
                        
                            ));
                                    $wp_customizer->add_control('setting_uxui_control', array(
                                        'label' =>__('', 'Portfolio'),
                                        'description'=> '',
                                        'section'=> 'footer',
                                        'settings'=> 'setting_uxui'
                                    ));
                              /****
                             * 
                             * 
                             *  web design
                             * 
                             * 
                             */
                            $wp_customizer->add_setting('setting_web' , array(
                                'capability' => 'edit_theme_options',
                                'default'=> 'Web Design'
                        
                            ));
                                    $wp_customizer->add_control('setting_web_control', array(
                                        'label' =>__('', 'Portfolio'),
                                        'description'=> '',
                                        'section'=> 'footer',
                                        'settings'=> 'setting_web'
                                    ));
                              /****
                             * 
                             * 
                             *  Marketing design
                             * 
                             * 
                             */
                            $wp_customizer->add_setting('setting_marketing' , array(
                                'capability' => 'edit_theme_options',
                                'default'=> 'Marketing'
                        
                            ));
                                    $wp_customizer->add_control('setting_marketing_control', array(
                                        'label' =>__('', 'Portfolio'),
                                        'description'=> '',
                                        'section'=> 'footer',
                                        'settings'=> 'setting_marketing'
                                    ));

                                                    /******
                                                     * 
                                                     * 
                                                     * 
                                                     *  send request 
                                                     * 
                                                     * 
                                                     * 
                                                     */ 
                                                            //name
                                                    $wp_customizer->add_setting('send_name' , array(
                                                        'capability' => 'edit_theme_options',
                                                        'default'=> 'Name'
                                                
                                                    ));
                                                            $wp_customizer->add_control('send_name_control', array(
                                                                'label' =>__('Request Form', 'Portfolio'),
                                                                'description'=> 'name and email is required',
                                                                'section'=> 'footer',
                                                                'settings'=> 'send_name'
                                                            ));
                                                            /***
                                                             * 
                                                             * 
                                                             * 
                                                             * 
                                                             */
                                                                    //email
                                                    $wp_customizer->add_setting('send_email' , array(
                                                        'capability' => 'edit_theme_options',
                                                        'default'=> 'Email'
                                                
                                                    ));
                                                            $wp_customizer->add_control('send_email_control', array(
                                                                'label' =>__('', 'Portfolio'),
                                                                'description'=> '',
                                                                'section'=> 'footer',
                                                                'settings'=> 'send_email'
                                                            ));




                


        }
   
        add_action('customize_register', 'get_footer_title');











?>