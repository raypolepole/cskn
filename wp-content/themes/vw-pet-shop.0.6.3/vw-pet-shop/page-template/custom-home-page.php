<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'vw_pet_shop_before_slider' ); ?>

  <?php if( get_theme_mod( 'vw_pet_shop_slider_hide_show') != '') { ?>
    <section class="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <?php $vw_pet_shop_slider_page = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'vw_pet_shop_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $vw_pet_shop_slider_page[] = $mod;
            }
          }
          if( !empty($vw_pet_shop_slider_page) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $vw_pet_shop_slider_page,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <h1><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_pet_shop_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_pet_shop_slider_excerpt_number','30')))); ?></p>
                  <div class="more-btn">
                    <a class="view-more" href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html_e( 'Shop More', 'vw-pet-shop' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Shop More','vw-pet-shop' );?></span></a>
                  </div>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','vw-pet-shop' );?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','vw-pet-shop' );?></span>
        </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php } ?>

  <?php do_action( 'vw_pet_shop_after_slider' ); ?>

  <?php if( get_theme_mod( 'vw_pet_shop_maintitle') != '') { ?>
    <section id="our-products">
    	<div class="container">
  	    <div class="">
	        <?php if( get_theme_mod('vw_pet_shop_maintitle') != ''){ ?>    
	         <h2><?php echo esc_html(get_theme_mod('vw_pet_shop_maintitle','')); ?></h2>
	        <?php }?>
  	    </div>
    		<?php $vw_pet_shop_product_page = array();
    		for ( $count = 0; $count <= 0; $count++ ) {
    			$mod = absint( get_theme_mod( 'vw_pet_shop_page' . $count ));
    			if ( 'page-none-selected' != $mod ) {
    			  $vw_pet_shop_product_page[] = $mod;
    			}
    		}
    		if( !empty($vw_pet_shop_product_page) ) :
    		  $args = array(
    		    'post_type' => 'page',
    		    'post__in' => $vw_pet_shop_product_page,
    		    'orderby' => 'post__in'
    		  );
    		  $query = new WP_Query( $args );
    		  if ( $query->have_posts() ) :
    		    $count = 0;
    				while ( $query->have_posts() ) : $query->the_post(); ?>
    				    <div class="row box-image text-center m-0">
    				        <p><?php the_content(); ?></p>
    				        <div class="clearfix"></div>
    				    </div>
    				<?php $count++; endwhile; ?>
    		  <?php else : ?>
    		      <div class="no-postfound"></div>
    		  <?php endif;
    		endif;
    		wp_reset_postdata()?>
    	    <div class="clearfix"></div> 
    	</div>
    </section>
  <?php } ?>

  <?php do_action( 'vw_pet_shop_after_products' ); ?>

  <div class="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>