<?php
/**
 * The Template for displaying all single posts.
 *
 * @package VW Pet Shop
 */
 
 get_header(); ?>

<div class="title-box">
  <div class="container">
    <h1><?php the_title();?></h1>
  </div>
</div>

<main id="maincontent" role="main">
  <div class="middle-align container">
    <?php
      $vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_theme_options','Right Sidebar');
      if($vw_pet_shop_theme_lay == 'Left Sidebar'){ ?>
      <div class="row">
        <div class="col-lg-4 col-md-4 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout' ); 
            endwhile;

            else :
              get_template_part( 'no-results', 'archive' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'vw-pet-shop' ),
                'next_text'          => __( 'Next page', 'vw-pet-shop' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-pet-shop' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    <?php }else if($vw_pet_shop_theme_lay == 'Right Sidebar'){ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout' ); 
            endwhile;

            else :
              get_template_part( 'no-results', 'archive' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'vw-pet-shop' ),
                'next_text'          => __( 'Next page', 'vw-pet-shop' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-pet-shop' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php }else if($vw_pet_shop_theme_lay == 'Right Sidebar'){ ?>
      <div id="our-services" class="services">                    
        <?php if ( have_posts() ) :
          /* Start the Loop */
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/single-post-layout' ); 
          endwhile;

          else :
            get_template_part( 'no-results', 'archive' ); 
          endif; 
        ?>
        <div class="navigation">
          <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
              'prev_text'          => __( 'Previous page', 'vw-pet-shop' ),
              'next_text'          => __( 'Next page', 'vw-pet-shop' ),
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-pet-shop' ) . ' </span>',
            ) );
          ?>
            <div class="clearfix"></div>
        </div>
      </div>
    <?php }else if($vw_pet_shop_theme_lay == 'Three Columns'){ ?>
      <div class="row">
        <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-6 col-md-6">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout' ); 
            endwhile;

            else :
              get_template_part( 'no-results', 'archive' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'vw-pet-shop' ),
                'next_text'          => __( 'Next page', 'vw-pet-shop' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-pet-shop' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
      </div>
    <?php }else if($vw_pet_shop_theme_lay == 'Four Columns'){ ?>
      <div class="row">
        <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-3 col-md-3">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout' ); 
            endwhile;

            else :
              get_template_part( 'no-results', 'archive' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'vw-pet-shop' ),
                'next_text'          => __( 'Next page', 'vw-pet-shop' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-pet-shop' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
        <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-3');?></div>
      </div>
    <?php }else if($vw_pet_shop_theme_lay == 'Grid Layout'){ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-9 col-md-9">  
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout' ); 
            endwhile;

            else :
              get_template_part( 'no-results', 'archive' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'vw-pet-shop' ),
                'next_text'          => __( 'Next page', 'vw-pet-shop' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-pet-shop' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php } else { ?>
      <div id="our-services" class="services">                    
        <?php if ( have_posts() ) :
          /* Start the Loop */
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/single-post-layout' ); 
          endwhile;

          else :
            get_template_part( 'no-results', 'archive' ); 
          endif; 
        ?>
        <div class="navigation">
          <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
              'prev_text'          => __( 'Previous page', 'vw-pet-shop' ),
              'next_text'          => __( 'Next page', 'vw-pet-shop' ),
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-pet-shop' ) . ' </span>',
            ) );
          ?>
            <div class="clearfix"></div>
        </div>
      </div>
    <?php } ?>
    <div class="clearfix"></div>
  </div>
</main>

<?php get_footer(); ?>