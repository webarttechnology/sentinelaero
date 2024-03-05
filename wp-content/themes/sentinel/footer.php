<footer>
  <?php   
$page_slug = 'site-general-settings';
  $generalsettingsid = get_id_by_slug($page_slug); ?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-4">
                    <span><a href="#"><img src="<?php echo get_field('logo',$generalsettingsid);  ?>" alt="" class="img-fluid mb-5"></a></span>
                    <ul class="infos">
                        <li><a href="tel:<?php echo get_field('phone',$generalsettingsid);  ?>"><i class="fa-solid fa-phone"></i> <?php echo get_field('phone',$generalsettingsid);  ?></a></li>
                     <li><a href="<?php echo get_field('email',$generalsettingsid);  ?>"><i class="fa-solid fa-envelope"></i> <?php echo get_field('email',$generalsettingsid);  ?></a></li>
                        <li><i class="fa-solid fa-location-dot"></i> <?php echo get_field('address',$generalsettingsid);  ?></li>
                    </ul>
                    <ul class="followus justify-content-start mt-5">
                        <li><a href="<?php echo get_field('facebook',$generalsettingsid);  ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="<?php echo get_field('twitter',$generalsettingsid);  ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="<?php echo get_field('linkedin',$generalsettingsid);  ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h4 class="mb-3"><?php echo get_field('footer_services_title',$generalsettingsid); ?></h4>
                    <?php $allserv = new WP_Query(array('post_type'=>'our-service','post_status'=>'publish','posts_per_page'=>-1)); ?>
                    <ul class="flinks">
                        <?php while($allserv->have_posts()):$allserv->the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                       
                    <?php endwhile; ?>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h4><?php echo get_field('footer_newsletter_title',$generalsettingsid); ?></h4>
                    <div class="mb-2 mt-2 relative">
                        <input type="email" class="form-control" id="" placeholder="Enter your email." name="">
                        <button type="button" class="btn btn-warning"><i class="fa-solid fa-paper-plane"></i></button>
                    </div>
                </div>
                <div class="col-12 text-center copyright">
                    <hr>
                    <small>© <?php echo date('Y'); ?> Sentinel Aerospace. All rights reserved.</small>
                </div>
            </div>
        </div>
    </footer>


    <!-- jquery -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/stellarnav.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
          jQuery('.stellarnav').stellarNav({
            breakpoint: 1024,
            position: 'right',
          });
        });
      </script>
    
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
</body>
</html>