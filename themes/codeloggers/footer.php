      <footer id="app-footer">
        <span class="line-separator"></span>
        <small>Since of 2020 &copy;codeloggers</small>
      </footer>
    </div>

    <?php
      if (has_nav_menu('mobile-menu')):
        wp_nav_menu( array( 
            'theme_location' => 'mobile-menu', 
            'container_id' => 'mobile-menu',
            'container' => 'nav',
          ) 
        ); 
    ?>
    <?php else: ?>
      <nav id="mobile-menu">
        <ul>
          <li><a href="<?php echo home_url(); ?>"><i class="home-ico text-dark"></i></a></li>
          <li><a href="<?php echo home_url() . '/about'; ?>"><i class="about-ico text-dark"></i></a></li>
          <li><a href="<?php echo home_url() . '/contact'; ?>"><i class="contact-ico text-dark"></i></a></li>
        </ul>
      </nav>
    <?php endif; ?>

    <script src="<?php echo bloginfo('template_url') . '/assets/js/main.js' ?>"></script>
  </body>
  <?php wp_footer(); ?>
</html>