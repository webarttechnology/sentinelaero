<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
global $post;
$currentserviceID = $post->ID;
$page_slug = 'site-general-settings';
$generalpageid = get_id_by_slug($page_slug);
// images/topbanner.jpg

 while(have_posts()):the_post(); 

if(get_field('inner_banner')){
?>


   <section class="banner innerBanner" style="background: url(<?php echo get_field('inner_banner'); ?>) no-repeat top left;">
   <?php }
   else{
    ?>
    <section class="banner innerBanner" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/topbanner.jpg) no-repeat top left;">
    <?php } ?>
        <div class="container">
            <div class="row relative">
                <div class="col-sm-12 col-md-8">
                    <h1 class="banner_heading mb-4"><?php the_title(); ?>
                     <span class="aeroplane"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/3.png" alt="" class="img-fluid"></span>
                    </h1>    
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

   <section class="aircraftparts p-v-200" style="background: url(<?php echo get_stylesheet_directory_uri().'/images/aircraftpartsbg.jpg'; ?>) no-repeat top left; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row mt-5">
                <?php
                    if(get_the_post_thumbnail_url(get_the_ID()))
                    {
                    ?>
                <div class="col-md-6">
                <div class="relative aircraftpartsImg">
                   <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="w-100">
                  </div>
                </div>
                <div class="col-md-6">
                 <?php the_content(); ?>  
                        
                </div>

            <?php }
            else
            {
                ?>
                 <div class="col-md-12">
                 <?php the_content(); ?>  
                        
                </div>

                <?php 

            }

        endwhile; ?>
            </div>
        </div>
    </section>
    <!-- End Contact Info Section -->
      <?php 

get_footer();
