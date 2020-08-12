<!DOCTYPE html>
<html lang="en">
  <head <?php do_action( 'add_head_attributes' ); ?>>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Primary Meta Tags -->
    <meta name="title" content="codeloggers – recording knowledges">
    <meta name="description" content="This is my personal blog. I'd like to share with you all that I'm learning about software development.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://codeloggers.com/">
    <meta property="og:title" content="codeloggers – recording knowledges">
    <meta property="og:description" content="This is my personal blog. I'd like to share with you all that I'm learning about software development.">
    <meta property="og:image" content="<?php echo bloginfo('template_url') . '/assets/images/about-me.jpg' ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://codeloggers.com/">
    <meta property="twitter:title" content="codeloggers – recording knowledges">
    <meta property="twitter:description" content="This is my personal blog. I'd like to share with you all that I'm learning about software development.">
    <meta property="twitter:image" content="<?php echo bloginfo('template_url') . '/assets/images/about-me.jpg' ?>">
    <?php wp_head(); ?>
    <title><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></title>
  </head>
  <body <?php body_class(); ?>>
    <div class="container">

      <header id="app-header">
        <section id="brand-navigator">
          <header id="brand">
            <h2 class="d-inline"><a class="text-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></a></h2>
            <span class="text-light">&mdash; <span><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></span>
          </header>
          <nav id="menu-header">
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
          </nav>
        </section>
        <section id="author">
          <header id="photo">
            <?php 
              // grab admin email and their photo
              $admin_email = get_option('admin_email');
              echo get_avatar( $admin_email, 100 ); 
            ?>
          </header>

          <?php
            if (has_nav_menu('mobile-menu')){
              wp_nav_menu( array( 
                  'theme_location' => 'social-menu', 
                  'container_id' => 'social-media',
                  'container' => 'nav',
                  'fallback_cb' => false
                ) 
              ); 
            }
          ?>
          
        </section>
      </header>