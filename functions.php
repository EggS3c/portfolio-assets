<?php 


    /****
     * 
     * 
     *     home customizer
     * 
     * 
     * 
     */
        require_once('customizer.php');

      /*******
       * 
       * 
       * 
       * 
       *  desktop & responsive menu
       * 
       * 
       * 
       */
        require_once('templates/menus.php');
    /******
     * 
     * 
     * 
     *      works customizer
     * 
     * 
     */
       require_once('templates/works-template-files.php');/**** with project one */

     /******
     * 
     * 
     * 
     *      
     * 
     * 
     */ 
        require_once('templates/about-template-files.php');

      /******
     * 
     * 
     * 
     *      
     * 
     * 
     */
        require_once('templates/contact-template-files.php');
    /*****
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     */
        require_once('templates/footer-template-files.php');


    //Enqueuing css
        function custom_css(){

             //adding bootstarp for wordpres
          //   wp_register_style('bootstrap', get_template_directory_uri() . '/helpers/css/bootstrap.css', [], 1, 'all');
          //  wp_enqueue_style('bootstrap');
                
            //adding custom css
           wp_register_style('custom-css', get_template_directory_uri() . '/helpers/css/custom.css', [], 1, 'all');
           wp_enqueue_style('custom-css');

             //adding images style for the about section (small img settings)
             wp_register_style('custom-img-set', get_template_directory_uri() . '/helpers/css/img-style.css', [], 1, 'all');
             wp_enqueue_style('custom-img-set');
        }
            add_action('wp_enqueue_scripts', 'custom_css');





         //Enqueuing custom javascript
         function custom_js(){

            //adding jquery
            wp_enqueue_script('jquery');

            //adding bootstrap js
            wp_register_script('bootstrap', get_template_directory_uri() . '/helpers/js/bootstrap.js', ['jquery'], 1, true);
            wp_enqueue_script('bootstrap');

            wp_register_script('custom-js', get_template_directory_uri() . '/helpers/js/custom.js', ['jquery'], 1, true);
            wp_enqueue_script('custom-js');

            //adding main js
            wp_register_script('main', get_template_directory_uri() . '/helpers/js/main.js', ['jquery'], 1, true);
            wp_enqueue_script('main');
        }
            add_action('wp_enqueue_scripts', 'custom_js');

           
           
         



?>


















