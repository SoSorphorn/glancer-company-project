<?php 
        
        /*
          Template Name: Home
        */
          
get_header(); ?>
  <?php 
    if( have_posts() ):
      while( have_posts() ): the_post(); ?>
        <header class="masthead text-center text-white d-flex" id="home">
          <div class="container my-auto">
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <?php echo get_post_meta($post->ID, 'key', true); ?>
                <h3><?php echo get_post_meta($post->ID, 'BannerHeader', true); ?></h3>
                <h1 class="text-uppercase">
                  <?php echo get_post_meta($post->ID, 'key', true); ?>
                  <strong><?php echo get_post_meta($post->ID, 'BannerTitle', true); ?></strong>
                </h1>
              <hr>
              </div>
              <div class="col-lg-8 mx-auto">
                <?php echo get_post_meta($post->ID, 'key', true); ?>
                <p class="text-faded mb-5"><?php echo get_post_meta($post->ID, 'BannerDescription', true); ?></p>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Get started</a>
                  </div>
                </div>
              </div>
            </div>
          </header>
      <!-- Service -->
      <div class="row">
        <div class = "col-md-2"></div>
        <div class="col-md-8">
          <section id="services">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h1 class="section-heading">Service</h1>
                </div>
              </div>
            </div>
          </section>
            <?php 
              $serviceTitles = get_post_meta($post->ID, 'ServiceTitle', false);
              $serviceDescriptions = get_post_meta($post->ID, 'ServiceDescription', false);
              //get custom field titled "Post Image"
              $alternative_post_image = get_post_meta($post->ID, 'ServiceImage',false);
              if( (count( $serviceTitles ) != 0) && (count($serviceDescriptions)!= 0) &&  (count($alternative_post_image)!= 0)) { ?>
                <div class="row">
                  <?php  foreach($serviceTitles as $key=>$serviceTitle) {
                    echo '<div class="col-lg-4 col-md-4 text-center">
                          <div class="service-box mt-5 mx-auto">
                            <img src="'.$alternative_post_image[$key].'" alt="test" title="test" style="width: 30%"/>
                            <h3 class="mb-3">'.$serviceTitle.'</h3>
                            <p class="text-muted mb-0">'.$serviceDescriptions[$key].
                            '<p>
                          </div>
                        </div>';
                    }
                  
                  ?>
                </div>
              <?php 
              } else { 
              // do nothing; 
              }
            ?>  
            <?php endwhile;
          endif;  
        ?>
        </div>
        <!-- End Container-->
      </div> 
      <!-- Blog -->
      <div class="row">
        <div class = "col-md-2"></div>
        <div class="col-md-8">
          <section >
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h1 class="section-heading">Blog</h1>
                </div>
              </div>
            </div>
          </section>
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                  <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
                  <h3 class="mb-3">Sturdy Templates</h3>
                  <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                  <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
                  <h3 class="mb-3">Ready to Ship</h3>
                  <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                  <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
                  <h3 class="mb-3">Up to Date</h3>
                  <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                  <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                  <h3 class="mb-3">Made with Love</h3>
                  <p class="text-muted mb-0">You have to make your websites with love these days!</p>
                </div>
              </div>
              <!-- End row -->
            </div>
            <!-- End Container -->
          </div>
        </div>
      </div> 
          
   
<?php get_footer(); ?>
    

