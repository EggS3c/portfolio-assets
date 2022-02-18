
<?php get_header();

  /*  Template Name: Main Page*/

?>



     <!-----------


                              *** home section ****

              --------------->


<ul class="l-main-content main-content">
          <li class="l-section section section--is-active">
            <div class="intro">
              <div class="intro--banner">
             <!--<h1>Your next<br>interactive<br>experience</h1>-->
             <?php 
                    if(get_theme_mod('title_text_field')):?>
                        <h1><?php echo get_theme_mod('title_text_field')?></h1>
                    <?php endif;?>
                <button class="cta"><?php echo get_theme_mod('sub-title_text_field')?>
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                  <span class="btn-background"></span>
                </button>
                <!--<img src="assets/img/introduction-visual.png" alt="Welcome">-->
                  <?php 
                    if(get_theme_mod('header_image')):?>
                        <img src="<?php echo esc_url(get_theme_mod('header_image'));?>"
                         alt="img">
                    <?php endif;?>
                  
              </div>
              <div class="intro--options">
                <a href="#0">
                  <h3><?php
                    /** left service title in desktop*/
                     if(get_theme_mod('service-left')):?>
                        <h1><?php echo get_theme_mod('service-left')?></h1>
                    <?php endif;?></h3>
                               <?php if (get_theme_mod('service-left-description')):?>
                                    <?php echo get_theme_mod('service-left-description')?>
                                <?php endif;?>
                         </a>
                <a href="#0">
                  <h3><?php
                    /** middle service title in desktop*/
                    if (get_theme_mod('service-middle')):?>
                      <h1><?php echo get_theme_mod('service-middle')?></h1>
                      <?php endif;?></h3>
                             <?php if (get_theme_mod('service-middle-description')):?>
                                  <?php echo get_theme_mod('service-middle-description')?>
                          <?php endif;?>
                        </a>
                <a href="#0">
                  <h3>
                  <h1><?php if( get_theme_mod('service-right')):?>
                        <?php echo get_theme_mod('service-right');?></h1>
                        <?php endif;?></h3>
                            <?php if (get_theme_mod('service-right-description')):?>
                                  <?php echo get_theme_mod('service-right-description')?>
                        <?php endif;?>
                       </a>
                </div>
            </div>
          </li>
              <!-----------


                              *** about section ****

              --------------->
                            
        
                            <!--about section-->
                <li class="l-section section">
            <div class="about">
              <div class="about--banner">
               <!-- <h2>We<br>believe in<br>passionate<br>people</h2>-->
                      <?php if (get_theme_mod('get_about_title')):?>
                        <h2><?php echo get_theme_mod('get_about_title');?></h2>
                          <?php endif;?>
                <a href="#0">
                        <?php if (get_theme_mod('the_cta')):?>
                          <?php echo get_theme_mod('the_cta');?>
                        <?php endif;?>
                  <span>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                    </g>
                    </svg>
                  </span>
                </a>
                          <!--about main image-->
               <!-- <img src="assets/img/about-visual.png" alt="About Us">-->
                   <?php if (get_theme_mod('the_image')):?>
                      <img src="<?php echo get_theme_mod('the_image');?>" alt="About Image">
                   <?php endif;?>
              </div>
              <div class="about--options">
                <a  href="#0">  <!--left image-->
              <!--  <img src="assets/img/work-alex-nowak.jpg" alt="img">-->
                    <?php if (get_theme_mod('get_image_left')):?>
                      <img src="<?php echo get_theme_mod('get_image_left');?>" alt="img" id='direction'>
                        <?php endif;?>
                 <!-- <h3>Winners</h3>-->
                      <?php if (get_theme_mod('get_image_left_title')):?>
                        <h3><?php echo get_theme_mod('get_image_left_title');?></h3>
                      <?php endif;?>      
                </a>
                <a href="#0"> <!--middle image-->
                     <!--  <img src="assets/img/work-alex-nowak.jpg" alt="img">-->
                            <?php if (get_theme_mod('the_middle_image')):?>
                              <img src="<?php echo get_theme_mod('the_middle_image');?>" alt="img" id='direction'>
                          <?php endif;?>
                  <!--<h3>Philosophy</h3>--><!--left image title-->
                              <?php if(get_theme_mod('get_image_middle_title')):?>
                                <h3><?php echo get_theme_mod('get_image_middle_title');?></h3>
                            <?php endif;?>
                </a>
                <a href="#0">
          <!-- <img src="assets/img/work-alex-nowak.jpg" alt="img">-->
                                <?php if (get_theme_mod('the_right_image')):?>
                                  <img src="<?php echo get_theme_mod('the_right_image');?>" alt="img" id='direction'>
                              <?php endif;?>
                                  <!--right image title--><!--history-->
                 <!-- <h3>History</h3>-->
                          <?php if (get_theme_mod('the_right_image_title')):?>
                              <h3><?php echo get_theme_mod('the_right_image_title');?></h3>
                        <?php endif;?>
                </a>
              </div>
            </div>
          </li>
              <!-----------


                              *** skill section ****

              --------------->
              <li class="l-section section">
            <div class="work">
              <!--<h2>Selected work</h2>-->
                <?php if (get_theme_mod('page_title')):?>
                    <h2><?php echo get_theme_mod('page_title');?></h2>
                  <?php endif;?>
              <div class="work--lockup">
                <ul class="slider">
                  <!--

                  html logo

                -->
                  <li class="slider--item slider--item-left">
                    <a href="#0">
                      <div class="slider--item-image">
                       <!-- <img src="assets/img/html-logo.jpg" alt="img">-->
                       <?php 
                             if(get_theme_mod('get_img1')):?>
                                 <img src="<?php echo esc_url(get_theme_mod('get_img1'))?>"
                                alt="img">
                            <?php endif;?>
                      </div>
                      <p class="slider--item-title"><!--dynamic title-->
                            <?php if(get_theme_mod('img_title_field')):?>
                                     <?php echo get_theme_mod('img_title_field');?>
                              <?php endif;?>
                         </p>
                      <p class="slider--item-description"><!--dynamic description-->
                               <?php if (get_theme_mod('img_title_description')):?>
                                    <?php echo get_theme_mod('img_title_description');?>
                                 <?php endif;?> 
                        </p>
                    </a>
                  </li>
                    <!--

                      Css logo

                    -->

                  <li class="slider--item slider--item-center">
                    <a href="#0">
                      <div class="slider--item-image">
                     <!--<img src="assets/img/css.jpg" alt="css">-->
                     <?php 
                             if(get_theme_mod('get_img2')):?>
                                 <img src="<?php echo esc_url(get_theme_mod('get_img2'))?>"
                                alt="img">
                            <?php endif;?>
                      </div>
                      <p class="slider--item-title">
                      <?php if(get_theme_mod('second_image_title')):?>
                                     <?php echo get_theme_mod('second_image_title');?>
                              <?php endif;?>

                      </p>
                      <p class="slider--item-description">
                             <?php if(get_theme_mod('second_image_description')):?>
                                     <?php echo get_theme_mod('second_image_description');?>
                            <?php endif;?>   
                      </p>
                    </a>
                  </li>
                  <!--
                    
                  javascript logo

                  -->

                  <li class="slider--item slider--item-right">
                    <a href="#0">
                      <div class="slider--item-image">
                       <!-- <img src="assets/img/javascript.jpg" alt="img">-->
                       <?php 
                             if(get_theme_mod('get_img3')):?>
                                 <img src="<?php echo esc_url(get_theme_mod('get_img3'))?>"
                                alt="img">
                            <?php endif;?>
                      </div>
                      <p class="slider--item-title">
                          <?php 
                                if(get_theme_mod('third_image_title')):?>
                                     <?php echo get_theme_mod('third_image_title');?>
                              <?php endif;?>
                      </p>
                      <p class="slider--item-description">
                      <?php 
                          if(get_theme_mod('second_image_description')):?>
                                     <?php echo get_theme_mod('second_image_description');?>
                              <?php endif;?>
                      </p>
                    </a>
                  </li>


                 <!--
                   
                 
                  php logo
                
                -->
                 <li class="slider--item slider--item-right-right">
                    <a href="#0">
                      <div class="slider--item-image">
                       <!-- <img src="assets/img/php-logo.jpg" alt="php">-->
                       <?php 
                             if(get_theme_mod('get_img4')):?>
                                 <img src="<?php echo esc_url(get_theme_mod('get_img4'))?>"
                                alt="img">
                            <?php endif;?>
                      </div>
                    <p class="slider--item-title"><!--dynamic title-->
                            <?php if(get_theme_mod('php_img_title')):?>
                                     <?php echo get_theme_mod('php_img_title');?>
                              <?php endif;?>
                         </p>
                      <p class="slider--item-description"><!--dynamic description-->
                               <?php if (get_theme_mod('php_img_title_description')):?>
                                    <?php echo get_theme_mod('php_img_title_description');?>
                                 <?php endif;?> 
                        </p>
                    </a>
                  </li>

                       <!--
                       
                        wordpress logo image
                      
                      -->
                 <li class="slider--item slider--item-right-left">
                    <a href="#0">
                      <div class="slider--item-image">
                       <!-- <img src="assets/img/wordpress-logo.jpg" alt="php">-->
                       <?php 
                             if(get_theme_mod('get_img5')):?>
                                 <img src="<?php echo esc_url(get_theme_mod('get_img5'))?>"
                                alt="img">
                            <?php endif;?>
                      </div>
                    <p class="slider--item-title"><!--dynamic title-->
                            <?php if(get_theme_mod('wordpress_img_title')):?>
                                     <?php echo get_theme_mod('wordpress_img_title');?>
                              <?php endif;?>
                         </p>
                      <p class="slider--item-description"><!--dynamic description-->
                               <?php if (get_theme_mod('woredpress_img_title_description')):?>
                                    <?php echo get_theme_mod('wordpress_img_title_description');?>
                                 <?php endif;?> 
                        </p>
                    </a>
                </ul>
                <div class="slider--prev">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                    c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                    c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z"/>
                  </g>
                  </svg>
                </div>
                <div class="slider--next">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                </div>
              </div>
            </div>
          </li>
               <!-----------


                              *** contact section ****

              --------------->
          <li class="l-section section">
            <!--<img src="static-images-folder/contact-visual.png" alt="contact image">-->
                <?php if (get_theme_mod('contact_img_bg')):?>
                    <img src="<?php echo get_theme_mod('contact_img_bg');?>" alt="contact image">  
                  <?php endif;?>  
            <div class="contact">
              <div class="contact--lockup">
                <div class="modal">
                  <div class="modal--information">
                    <!--<p>your addess</p>-->
                    <?php if (get_theme_mod('get_address')):?>
                        <?php echo get_theme_mod('get_address');?>
                      <?php endif;?>  
                     <!--<p>your email</p>--><br>              
                     <?php if (get_theme_mod('get_email')):?>
                        <a href=""><?php echo get_theme_mod('get_email');?></a>   
                        <?php endif;?>
                   
                      <?php if (get_theme_mod('get_number')):?>
                        <a href="#"><?php echo get_theme_mod('get_number');?></a>
                        <?php endif;?>
                   
                  </div>
                  <ul class="modal--options">
                   <!-- <li><a href="#0">git</a></li>-->
                        <?php if (get_theme_mod('get_git')):?>
                          <li><a href="#0"><?php echo get_theme_mod('get_git');?></a></li>
                        <?php endif;?>
                   <!-- <li><a href="#0">Bēhance</a></li>-->
                   <?php if (get_theme_mod('get_behance')):?>
                          <li><a href="#0"><?php echo get_theme_mod('get_behance');?></a></li>
                        <?php endif;?>
                     <!--<li><a href="#">dribble Us</a></li>-->
                     <?php if (get_theme_mod('get_dribble')):?>
                          <li><a href="#0"><?php echo get_theme_mod('get_dribble');?></a></li> 
                        <?php endif;?>
                  </ul>
                </div>
              </div>
            </div>
          </li>
               <!-----------


                              *** services section ****

              --------------->
          <li class="l-section section">
            <div class="hire">
             <!--<h2> what can I help you with </h2>-->
                      <?php if (get_theme_mod('footer_title')):?>
                          <h2><?php echo get_theme_mod('footer_title');?></h2>
                        <?php endif;?>
              <!-- checkout formspree.io for easy form setup -->
              <form class="work-request">
                <div class="work-request--options">
                  <span class="options-a">
                    <input id="opt-1" type="checkbox" value="app design">
                    <label for="opt-1">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                     <!-- App Design-->   
                                                <?php if (get_theme_mod('setting_design')):?>
                                                    <?php echo get_theme_mod('setting_design');?>
                                                  <?php endif;?>
                    </label>
                    <input id="opt-2" type="checkbox" value="graphic design">
                    <label for="opt-2">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                     <!-- Graphic Design-->
                                                 <?php if (get_theme_mod('setting_graphic')):?>
                                                    <?php echo get_theme_mod('setting_graphic');?>
                                                  <?php endif;?>
                    </label>
                    <input id="opt-3" type="checkbox" value="motion design">
                    <label for="opt-3">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                     <!-- Motion Design-->
                                                  <?php if (get_theme_mod('setting_motion')):?>
                                                    <?php echo get_theme_mod('setting_motion');?>
                                                  <?php endif;?>
                    </label>
                  </span>
                  <span class="options-b">
                    <input id="opt-4" type="checkbox" value="ux design">
                    <label for="opt-4">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                     <!-- UX Design-->
                                                  <?php if (get_theme_mod('setting_uxui')):?>
                                                    <?php echo get_theme_mod('setting_uxui');?>
                                                  <?php endif;?>
                    </label>
                    <input id="opt-5" type="checkbox" value="webdesign">
                    <label for="opt-5">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                     <!-- Webdesign-->
                                                  <?php if (get_theme_mod('setting_web')):?>
                                                    <?php echo get_theme_mod('setting_web');?>
                                                  <?php endif;?>
                    </label>
                    <input id="opt-6" type="checkbox" value="marketing">
                    <label for="opt-6">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                    <!-- Marketing-->
                                                   <?php if (get_theme_mod('setting_marketing')):?>
                                                    <?php echo get_theme_mod('setting_marketing');?>
                                                  <?php endif;?>
                    </label>
                  </span>
                </div>
                  <!--<h3> didn't see what you're lookign for? or simply have an idea! </h3>-->
                  <?php if (get_theme_mod('footer_sub_title')):?>
                          <h4><?php echo get_theme_mod('footer_sub_title');?></h4>
                        <?php endif;?>
                <div class="work-request--information">
                  <div class="information-name">
                    <input id="name" type="text" spellcheck="false">
                     <!-- <label for="name">Email</label>-->
                     <?php if (get_theme_mod('send_name')):?>
                        <label for="name"><?php echo get_theme_mod('send_name');?></label>
                     <?php endif;?>
                  </div>
                  <div class="information-email">
                    <input id="email" type="email" spellcheck="false">
                   <!-- <label for="email">Email</label>-->
                      <?php if (get_theme_mod('send_email')):?>
                        <label for="email"><?php echo get_theme_mod('send_email');?></label>
                     <?php endif;?>                         
                  </div>
                </div>
                <input type="submit" value="Send Request">
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <ul class="outer-nav">
    <li class="is-active">
        <?php if (get_theme_mod('outer_home')):?>
      <?php echo get_theme_mod('outer_home');?>
        <?php endif;?></li>
    <li> <?php if (get_theme_mod('outer_works')):?>
      <?php echo get_theme_mod('outer_works');?>
        <?php endif;?></li>
    <li> <?php if (get_theme_mod('outer_about')):?>
      <?php echo get_theme_mod('outer_about');?>
        <?php endif;?></li>
    <li> <?php if (get_theme_mod('outer_contact')):?>
      <?php echo get_theme_mod('outer_contact');?>
        <?php endif;?></li>
    <li><?php if (get_theme_mod('outer_services')):?>
      <?php echo get_theme_mod('outer_services');?>
        <?php endif;?></li>
  </ul>
</div>




    <?php get_footer();?>