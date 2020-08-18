<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package VW Pet Shop
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) 
  {
    wp_body_open();
  }else{
    do_action('wp_body_open');
  } 
?>
  
<header role="banner">
  <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'vw-pet-shop' ); ?></a>

  <?php if( get_theme_mod('vw_pet_shop_topbar_hide_show',true) != ''){ ?>
    <div class="top_bar">
      <div class="container">
        <div class="contact_details">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <ul class="left-side-content">
                <?php if( get_theme_mod('vw_pet_shop_topbar_search',true) != ''){ ?>
                  <li class="search-box">
                    <button type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></button>
                  </li>
                <?php } ?>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-body">
                      <div class="serach_inner">
                        <?php get_search_form(); ?>
                      </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
              </div>
                <?php if(get_theme_mod('vw_pet_shop_header_callnumber','') != ''){ ?>
                  <li>
                    <span class="hi_normal"><i class="<?php echo esc_attr(get_theme_mod('vw_pet_shop_call_icon','fas fa-phone-volume')); ?>"></i><?php echo esc_html(get_theme_mod('vw_pet_shop_header_callnumber',''));?></span>
                  </li>
                <?php } ?>
                <?php if(get_theme_mod('vw_pet_shop_header_email_address','') != ''){ ?>
                  <li>
                    <span class="hi_normal"><i class="<?php echo esc_attr(get_theme_mod('vw_pet_shop_email_icon','far fa-envelope-open')); ?>"></i><?php echo esc_html(get_theme_mod('vw_pet_shop_header_email_address',''));?></span>
                  </li>
                <?php } ?>
                
              </ul>
            </div>
            <div class="col-lg-6 col-md-6">
              <ul class="right-side-content">
                <?php if(get_theme_mod('vw_pet_shop_header_time','') != ''){ ?>
                  <li>
                    <span class="hi_normal"><i class="<?php echo esc_attr(get_theme_mod('vw_pet_shop_timing_icon','far fa-clock')); ?>"></i><?php echo esc_html(get_theme_mod('vw_pet_shop_header_time',''));?></span>
                  </li>
                <?php } ?>
                <?php if(get_theme_mod('vw_pet_shop_header_myaccount_url','') != ''){ ?>
                  <li>
                    <span class="hi_normal"><i class="<?php echo esc_attr(get_theme_mod('vw_pet_shop_myaccount_icon','fas fa-download')); ?>"></i><a href="<?php echo esc_url( get_theme_mod( 'vw_pet_shop_header_myaccount_url','' ) ); ?>"><?php echo esc_html(get_theme_mod('vw_pet_shop_header_myaccount',__('My Account','vw-pet-shop')));?></a></span>
                  </li>
                <?php } ?>
                <li class="cart_box">
                  <span class="hi_normal"><i class="<?php echo esc_attr(get_theme_mod('vw_pet_shop_cart_icon','fas fa-cart-arrow-down')); ?>"></i>
                  <div class="top-cart-content">
                    <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  <?php } ?>
  <div class="logo-responsive">
    <?php if ( has_custom_logo() ) : ?>
      <div class="site-logo"><?php the_custom_logo(); ?></div>
    <?php endif; ?>
    <?php $blog_info = get_bloginfo( 'name' ); ?>
      <?php if ( ! empty( $blog_info ) ) : ?>
        <?php if ( is_front_page() && is_home() ) : ?>
          <?php if( get_theme_mod('vw_pet_shop_logo_title_hide_show',true) != ''){ ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php } ?>
        <?php else : ?>
          <?php if( get_theme_mod('vw_pet_shop_logo_title_hide_show',true) != ''){ ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
          <?php } ?>
        <?php endif; ?>
      <?php endif; ?>
      <?php
        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) :
      ?>
      <?php if( get_theme_mod('vw_pet_shop_tagline_hide_show',true) != ''){ ?>
        <p class="site-description">
          <?php echo $description; ?>
        </p>
      <?php } ?>
    <?php endif; ?>
  </div>
  <div id="header">
    <div class="header-menu <?php if( get_theme_mod( 'vw_pet_shop_sticky_header') != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="toggle-nav mobile-menu">
              <button onclick="vw_pet_shop_menu_open_nav()"><i class="<?php echo esc_attr(get_theme_mod('vw_pet_shop_res_open_menu_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','vw-pet-shop'); ?></span></button>
            </div>
            <div id="mySidenav" class="nav sidenav">
              <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'vw-pet-shop' ); ?>">
                <?php 
                  wp_nav_menu( array( 
                    'theme_location' => 'left-primary',
                    'container_class' => 'main-menu clearfix' ,
                    'menu_class' => 'clearfix',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                    'fallback_cb' => 'wp_page_menu',
                  ) ); 
                ?>
                <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="vw_pet_shop_menu_close_nav()"><i class="<?php echo esc_attr(get_theme_mod('vw_pet_shop_res_menu_close_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','vw-pet-shop'); ?></span></a>
              </nav>
            </div>
          </div>
          <div class="col-lg-4 logo_static">
            <div class="logo_outer_box">
              <div class="logo_outer">
                <div class="logo">
                  <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                  <?php endif; ?>
                  <?php $blog_info = get_bloginfo( 'name' ); ?>
                    <?php if ( ! empty( $blog_info ) ) : ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <?php if( get_theme_mod('vw_pet_shop_logo_title_hide_show',true) != ''){ ?>
                          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php } ?>
                      <?php else : ?>
                        <?php if( get_theme_mod('vw_pet_shop_logo_title_hide_show',true) != ''){ ?>
                          <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php } ?>
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php
                      $description = get_bloginfo( 'description', 'display' );
                      if ( $description || is_customize_preview() ) :
                    ?>
                    <?php if( get_theme_mod('vw_pet_shop_tagline_hide_show',true) != ''){ ?>
                      <p class="site-description">
                        <?php echo $description; ?>
                      </p>
                    <?php } ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div id="mySidenav" class="nav sidenav">
              <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'vw-pet-shop' ); ?>">
                <?php 
                  wp_nav_menu( array( 
                    'theme_location' => 'right-primary',
                    'container_class' => 'main-menu clearfix' ,
                    'menu_class' => 'clearfix',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                    'fallback_cb' => 'wp_page_menu',
                  ) ); 
                ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</header>

<?php if(get_theme_mod('vw_pet_shop_loader_enable',true)==1){ ?>
  <div id="preloader">
    <div id="status">
      <?php $vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_loader_icon','Two Way');
        if($vw_pet_shop_theme_lay == 'Two Way'){ ?>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/two-way.gif" alt="" role="img"/>
      <?php }else if($vw_pet_shop_theme_lay == 'Dots'){ ?>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/dots.gif" alt="" role="img"/>
      <?php }else if($vw_pet_shop_theme_lay == 'Rotate'){ ?>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rotate.gif" alt="" role="img"/>          
      <?php } ?>
    </div>
  </div>
<?php } ?>