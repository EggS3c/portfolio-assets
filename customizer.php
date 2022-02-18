<?php


    /***
     * 
     * 
     *  Template Name: Customizer.php 
     *  Description: Adding Customizer Setting to front-page and the logo
     * 
     * 
     * 
     * 
     */


        //adding dynamic logo
           function Portfolio_theme_supports(){

            add_theme_support('custom-logo');
        }

        add_action('after_setup_theme', 'Portfolio_theme_supports');

    








/*****
 * 
 * 
 * 
 * //Home page
 * 
 * 
 * 
 * 
 */         //adding dynamic hero settings
        function fn_customizer_settings($wp_customizer){

            //adding section
            $wp_customizer->add_section('header', array(
                'title'=> __('Home Settings', 'Portfolio'),
                'priority' =>2
            ));

            $wp_customizer->add_setting('header_image' , array(
                'capability' => 'edit_theme_options'
            ));

            $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'header_image', array(
                'label' => __('Add or Change the Hero Image', 'Portfolio'),
                'section' => 'header'
            )));

            /*
             * 
             * 
             * 
             * 
             */ 
                                /****
                                 * 
                                 * 
                                 * 
                                 *  cta header 'hire me'
                                 * 
                                 * 
                                 * 
                                 * 
                                 */
                                $wp_customizer->add_setting('cta_header' , array(
                                    'capability' => 'edit_theme_options',
                                    'default'=> 'Hire Me'
                                ));   
                        
                                $wp_customizer->add_control('hire_me_control', array(
                                    'label'=>__('Add title action', 'Portfolio'),
                                    'description' => 'this buttom will appear on the top center after scrolling',
                                    'section' => 'header',
                                    'settings'=>'cta_header'
                                ));
                                /***
                                 * 
                                 * 
                                 *  end of cta header 'hire me'
                                 * 
                                 * 
                                 */
                                                    

                //adding dynamic title settings
        $wp_customizer->add_setting('title_text_field' , array(
            'capability' => 'edit_theme_options',
            'default'=> 'An interactive experience'
        ));   

        $wp_customizer->add_control('header_text_control', array(
            'label'=>__('Page Title', 'Portfolio'),
            'description' => 'Title Text',
            'section' => 'header',
            'settings'=>'title_text_field'
        ));
            /*
             * 
             * 
             * 
             * 
             */
                //CTA Button
         $wp_customizer->add_setting('sub-title_text_field' , array(
            'capability' => 'edit_theme_options',
            'default'=> 'View More'
        ));   
        
        $wp_customizer->add_control('header_description_control', array(
            'label'=>__('CTA Botton', 'Portfolio'),
            'description' =>'Call to Action Button',
            'section' => 'header',
            'settings'=>'sub-title_text_field'
        ));
            /*
             * 
             * 
             * 
             * 
             */

              //adding dynamic left (desktop version)
        $wp_customizer->add_setting('service-left' , array(
            'capability' => 'edit_theme_options',
            'default'=> 'Website Design'
                        ));   
                        
        $wp_customizer->add_control('service_1_description_control', array(
            'label'=>__('Service Title Left', 'Portfolio'),
            'description' => 'Service Title',
            'section' => 'header',
            'settings'=>'service-left'
        ));

             //adding dynamic left descrition (desktop version)
                 $wp_customizer->add_setting('service-left-description' , array(
                'capability' => 'edit_theme_options',
                'default'=> ''
                        ));   
                        
                $wp_customizer->add_control('service_1_left_description_control', array(
                 'label'=> __('', 'Portfolio'),
                'description' => 'Service Description',
                'section' => 'header',
                'settings'=>'service-left-description'
        ));
            /*
             * 
             * 
             * 
             * 
             */

             //adding dynamic middle (desktop version)
         $wp_customizer->add_setting('service-middle' , array(
            'capability' => 'edit_theme_options',
            'default'=> 'UX/UI Design'
                        ));   
                        
        $wp_customizer->add_control('service_2_description_control', array(
            'label'=>__('Service Title Middle', 'Portfolio'),
            'description' => 'Service Title',
            'section' => 'header',
            'settings'=>'service-middle'
        ));   

             //adding dynamic middle description (desktop version)
             $wp_customizer->add_setting('service-middle-description' , array(
                'capability' => 'edit_theme_options',
                'default'=> ''
                            ));   
                            
            $wp_customizer->add_control('service_middle_description_control', array(
                'label'=>__('', 'Portfolio'),
                'description' => 'Service Description',
                'section' => 'header',
                'settings'=>'service-middle-description'
            )); 
            /*
             * 
             * 
             * 
             * 
             */
        
                //adding dynamic right (desktop version)
         $wp_customizer->add_setting('service-right' , array(
            'capability' => 'edit_theme_options',
            'default'=> 'Social'
                        ));   
                        
        $wp_customizer->add_control('service_3_description_control', array(
            'label'=>__('Service Title Right', 'Portfolio'),
            'description' => 'Service Title',
            'section' => 'header',
            'settings'=>'service-right'
        ));

                //adding dynamic right description (desktop version)
                $wp_customizer->add_setting('service-right-description' , array(
                    'capability' => 'edit_theme_options',
                    'default'=> ''
                                ));   
                                
                $wp_customizer->add_control('service_right_description_control', array(
                    'label'=>__('', 'Portfolio'),
                    'description' => 'Service Description',
                    'section' => 'header',
                    'settings'=>'service-right-description'
                ));
                  /*
             * 
             * 
             * 
             * 
             */
                


        }


    
        add_action('customize_register', 'fn_customizer_settings');


    
       

 ?>
 

 
 
 
 
 
 
 
 
 
 
 
