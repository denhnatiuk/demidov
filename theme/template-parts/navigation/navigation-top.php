

        <nav id="site-navigation" class="main-navigation navbar" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
          <script>
            let sandwich = document.getElementById("site-navigation");
            let menu = document.getElementsByClassName('menu-top-navigation-container');
            let viewport = window.innerWidth;
            if (viewport < 768) {
              sandwich.className += " navbar-default navbar-fixed-top";
              }
            menu.className += " navbar-collapse";
          </script>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse">
            <?php wp_nav_menu( array(
            		'theme_location' => 'top',
            		'menu_id'        => 'bs-navbar-collapse',
            ) ); ?>
                      </div>
        </nav><!-- #site-navigation -->