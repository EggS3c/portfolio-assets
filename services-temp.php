<?php


    /***
     * 
     * 
     *  Template Name: works.php  #4
     *  Description: Adding Customizer Settings to the projects field
     * 
     * 
     * 
     * 
     */

            //page tile
                function get_title_page($wp_customizer){

                    $wp_customizer->add_setting('page_title' , array(
                        'capability' => 'edit_theme_options',
                        'default'=> 'Feature Projects'
                
                    ));
                            $wp_customizer->add_control('page_title_control', array(
                                'label' =>__('Page Title', 'Portfolio'),
                                'description'=> 'Page Title',
                                'section'=> 'works',
                                'settings'=> 'page_title'
                            ));


                }
           
                add_action('customize_register', 'get_title_page');
/*****
 * 
 * 
 * 
 * //skill page
 * 
 * 
 * 
 * 
 */         //adding html logo
        function image_customizer_settings($wp_customizer){

            
            $wp_customizer->add_section('works', array(
                'title'=> __('Skills Settings', 'Portfolio'),
                'priority' =>4
            ));

            $wp_customizer->add_setting('get_img1' , array(
                'capability' => 'edit_theme_options'
            ));

            $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'get_img1', array(
                'label' => __(' Project Image ', 'Portfolio'),
                'section' => 'works'
            )));
               
                        /******
                         * 
                         * 
                         * 
                         *  html title
                         * 
                         * 
                         */ 
                            
                                  //adding dynamic title settings
                             $wp_customizer->add_setting('img_title_field' , array(
                            'capability' => 'edit_theme_options',
                            'default'=> 'Art Creatives'
                    
                        ));
                                $wp_customizer->add_control('img-title-control', array(
                                    'label' =>__('First Image TItle', 'Portfolio'),
                                    'description'=> '',
                                    'section'=> 'works',
                                    'settings'=> 'img_title_field'
                                ));


                         /******
                         * 
                         * 
                         * 
                         *  html description
                         * 
                         * 
                         */ 
                             $wp_customizer->add_setting('img_title_description', array(
                                 'capability'=> 'edit_theme_options',
                                 'default'=> 'A movement created for 100 uprising photographers.
                                                We build a digital gallery experience for the
                                                world to discover'
                        ));
                             $wp_customizer->add_control('img_title_control', array(
                                'label'=> __('Image Description', 'Portfolio'),
                                'description'=> '',      
                                'section'=> 'works',
                                'settings'=> 'img_title_description'
                            ));
                                    

        }

          add_action('customize_register', 'image_customizer_settings');
          
                /*****
                 * 
                 * 
                 * 
                 * 
                 *  css logo
                 * 
                 * 
                 * 
                 * 
                 * 
                 * 
                 */

                function image_2_customizer_settings($wp_customizer){
                     $wp_customizer->add_section('works', array(
                     'title'=> __('Skills Settings', 'Portfolio'),
                    'priority' =>4
                      ));
        
                    $wp_customizer->add_setting('get_img2' , array(
                        'capability' => 'edit_theme_options'
                    ));
        
                    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'get_img2', array(
                        'label' => __(' Project Image ', 'Portfolio'),
                        'section' => 'works'
                    )));

                            /******
                         * 
                         * 
                         * 
                         *  css logo title
                         * 
                         * 
                         */ 
                                //adding dynamic title settings
                            $wp_customizer->add_setting('second_image_title' , array(
                            'capability' => 'edit_theme_options',
                            'default'=> 'Add Title Here'
                        
                            ));
                            $wp_customizer->add_control('second_image_control', array(
                             'label' =>__('Second Title', 'Portfolio'),
                             'description'=> '',
                             'section'=> 'works',
                             'settings'=> 'second_image_title'
                                    ));
                        /******
                         * 
                         * 
                         * 
                         *  css logo description
                         * 
                         * 
                         */     
                           $wp_customizer->add_setting('second_image_description', array(
                                'capability'=> 'edit_theme_options',
                                'default'=> 'Add a decription here for your project'
                         ));
                            
                            $wp_customizer->add_control('second_image_description_control', array(
                                'label'=> __('Image Description', 'Portfolio'),
                               'description'=> '',      
                               'section'=> 'works',
                               'settings'=> 'second_image_description'
                        ));


                }

                add_action('customize_register', 'image_2_customizer_settings');


                /*****
                 * 
                 * 
                 * 
                 * 
                 *  javascript logo 
                 * 
                 * 
                 * 
                 * 
                 * 
                 * 
                 */
                        
                function image_3_customizer_settings($wp_customizer){
                    $wp_customizer->add_section('works', array(
                        'title'=> __('Skills Settings', 'Portfolio'),
                        'priority' =>4
                    ));
        
                    $wp_customizer->add_setting('get_img3' , array(
                        'capability' => 'edit_theme_options'
                    ));
        
                    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'get_img3', array(
                        'label' => __(' Project Image ', 'Portfolio'),
                        'section' => 'works'
                    )));

                            /******
                         * 
                         * 
                         * 
                         *  javascript logo description
                         * 
                         * 
                         */ 
                            //adding dynamic title settings
                            $wp_customizer->add_setting('third_image_title' , array(
                                'capability' => 'edit_theme_options',
                                'default'=> 'to be field'
                            
                                ));
                                $wp_customizer->add_control('third_image_control', array(
                                 'label' =>__('Third Title', 'Portfolio'),
                                 'description'=> '',
                                 'section'=> 'works',
                                 'settings'=> 'third_image_title'
                                 ));

                             /******
                         * 
                         * 
                         * 
                         *  javascript description
                         * 
                         * 
                         */
                        $wp_customizer->add_setting('third_image_description', array(
                            'capability'=> 'edit_theme_options',
                            'default'=> 'to be field'
                      ));
                        
                        $wp_customizer->add_control('third_image_description_control', array(
                            'label'=> __('Image Description', 'Portfolio'),
                           'description'=> '',      
                           'section'=> 'works',
                           'settings'=> 'third_image_description'
                     ));
                            
            
                }

                    add_action('customize_register', 'image_3_customizer_settings');

                /*****
                 * 
                 * 
                 * 
                 *      adding php logo settibgs
                 * 
                 * 
                 * 
                 * 
                 */

                function php_slide_customizer_setting($wp_customizer){
                    $wp_customizer->add_section('works', array(
                        'title'=> __('Skills Settings', 'Portfolio'),
                        'priority' =>4
                    ));
        
                    $wp_customizer->add_setting('get_img4' , array(
                        'capability' => 'edit_theme_options'
                    ));
        
                    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'get_img4', array(
                        'label' => __(' skill banner image ', 'Portfolio'),
                        'section' => 'works'
                    )));
                        /****
                         * 
                         * 
                         * 
                         *  php logo title
                         * 
                         * 
                         */
                                 $wp_customizer->add_setting('php_img_title', array(
                                     'capability'=> 'edit_theme_options',
                                        'default'=> 'php'
                              ));
                        
                                 $wp_customizer->add_control('php_img_title_control', array(
                                     'label'=> __('Image Description', 'Portfolio'),
                                     'description'=> '',      
                                     'section'=> 'works',
                                    'settings'=> 'php_img_title'
                                  ));
                                        /****
                                         * 
                                         * 
                                         *  php logo description
                                         * 
                                         * 
                                         */ 
                                        $wp_customizer->add_setting('php_img_title_description', array(
                                            'capability'=> 'edit_theme_options',
                                            'default'=> ''
                                      ));
                                        
                                        $wp_customizer->add_control('php_img_title_description_control', array(
                                            'label'=> __('Image Description', 'Portfolio'),
                                           'description'=> '',      
                                           'section'=> 'works',
                                           'settings'=> 'php_img_title_description'
                                     ));

                
                }

                add_action('customize_register','php_slide_customizer_setting');

                /****
                 * 
                 * 
                 * 
                 * 
                 *      wordpress logo settings
                 * 
                 *                  
                 */
                function wordpress_slide_customizer_setting($wp_customizer){
                    $wp_customizer->add_section('works', array(
                        'title'=> __('Skills Settings', 'Portfolio'),
                        'priority' =>4
                    ));
        
                    $wp_customizer->add_setting('get_img5' , array(
                        'capability' => 'edit_theme_options'
                    ));
        
                    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'get_img5', array(
                        'label' => __(' skill banner image ', 'Portfolio'),
                        'section' => 'works'
                    )));
                                        /****
                                         * 
                                         * 
                                         * 
                                         *  wordpress title
                                         * 
                                         * 
                                         */
                                        $wp_customizer->add_setting('wordpress_img_title', array(
                                            'capability'=> 'edit_theme_options',
                                               'default'=> 'WordPress'
                                     ));
                               
                                        $wp_customizer->add_control('wordpress_img_title_control', array(
                                            'label'=> __('Image Description', 'Portfolio'),
                                            'description'=> '',      
                                            'section'=> 'works',
                                           'settings'=> 'wordpress_img_title'
                                         ));
                                                    /****
                                                     * 
                                                     * 
                                                     *  wordpress description
                                                     * 
                                                     * 
                                                     */
                                                    $wp_customizer->add_setting('wordpress_img_title_description', array(
                                                        'capability'=> 'edit_theme_options',
                                                        'default'=> ''
                                                  ));
                                                    
                                                    $wp_customizer->add_control('wordpress_img_title_description_control', array(
                                                        'label'=> __('Image Description', 'Portfolio'),
                                                       'description'=> '',      
                                                       'section'=> 'works',
                                                       'settings'=> 'wordpress_img_title_description'
                                                 ));

                                        

                }
                                   

                    add_action('customize_register', 'wordpress_slide_customizer_setting');
 ?>
 

 
