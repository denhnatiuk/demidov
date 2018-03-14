      <div class="row">
        <div class="container-fluid section contacts">
          <div class="row">
            <div id="map">
                <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=%D0%90%D0%B1%D0%B8%D0%BD%D1%81%D0%BA%2C%20%D1%83%D0%BB.%20%D0%9A%D1%80%D0%B0%D1%81%D0%BD%D1%8B%D1%85%20%D0%9F%D0%B0%D1%80%D1%82%D0%B8%D0%B7%D0%B0%D0%BD%2C%20136&key=AIzaSyD3G69mDMmAV5ki0EoLK4u2rU0OqWTgvb4" allowfullscreen></iframe>
            </div>
            <div class="contacts-label-block">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="contacts-label center-block"></a>
            </div>

   <?php get_template_part( 'template-parts/navigation/navigation', 'bottom' ); ?>

            <div class="container">
              <div class="row ">
                <div class="col-md-4 col-xs-10 col-xs-push-1">
                  <div class="well city">
                    <p class="lead gold">Абинск</p>
                    <p class="small white">фабрика, салон</p>
                    <ul>
                      <li class="address">
                        <a href="#map" onclick="alert("make onclick map event");">
                          <address>ул. Красных Партизан, 136</address>
                        </a>
                      </li>
                      <li class="email">
                        <a href="mailto:mebel.demidov@gmail.com?subject=feedback">mebel.demidov@gmail.com</a>
                      </li>
                      <li class="tel"><a href="tel:+7-989-289-09-09">+7-989-289-09-09</a></li>
                      <li class="schedule">Пн-Пт: 09:00-18:00</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-xs-10 col-xs-push-1">
                  <div class="well city">
                      <p class="lead gold">Санкт-Петербург</p>
                      <p class="small white">салон</p>
                      <ul>
                        <li class="address">
                          <a href="#map" onclick="alert("make onclick map event");">
                            <address>ул. Красных Партизан, 136</address>
                          </a>
                        </li>
                        <li class="email">
                          <a href="mailto:mebel.demidov@gmail.com?subject=feedback">mebel.demidov@gmail.com</a>
                        </li>
                        <li class="tel"><a href="tel:+7-989-289-09-09">+7-989-289-09-09</a></li>
                        <li class="schedule">Пн-Пт: 09:00-18:00</li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-4  col-xs-10 col-xs-push-1">
                  <div class="well city">
                      <p class="lead gold">Краснодар</p>
                      <p class="small white">салон</p>
                      <ul>
                        <li class="address">
                          <a href="#map" onclick="alert("make onclick map event");">
                            <address>ул. Красных Партизан, 136</address>
                          </a>
                        </li>
                        <li class="email">
                          <a href="mailto:mebel.demidov@gmail.com?subject=feedback">mebel.demidov@gmail.com</a>
                        </li>
                        <li class="tel"><a href="tel:+7-989-289-09-09">+7-989-289-09-09</a></li>
                        <li class="schedule">Пн-Пт: 09:00-18:00</li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="row visible-xs">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container footer-box">
        <div class="policy">
          <a href="#" class="privacy">Политика конфиденциальности</a>
        </div>
        <div class="social">
          <span>Мы в соцсетях:</span>
          <a href="#" class="vkontakte"></a>
          <a href="#" class="vk"></a>
          <a href="#" class="facebook"></a>
        </div>
      </div>
    </footer>
    <!--scripts-->
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/wp-content/themes/demidov/js/jquery.min.js"><\/script>');</script> 

    <?php
    /* 
    **** Load jQuery from Google CDN if available, local fallback if not ****
    ** Place in your theme's functions.php or relevant file. Edit local jQuery path if needed.
    ** Works as-is with WordPress Bones Theme v1.2 https://github.com/eddiemachado/bones (replace wp_enqueue_script( 'jquery' ); on line 142
    ** reference: http://wp.tutsplus.com/tutorials/load-jquery-from-google-cdn-with-local-fallback-for-wordpress/
    */
    $url = 'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'; // the URL to check against
    $test_url = @fopen($url,'r'); // test parameters
    if($test_url !== false) { // test if the URL exists
        function load_external_jQuery() { // load external file
            wp_deregister_script( 'jquery' ); // deregisters the default WordPress jQuery
            wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'); // register the external file
            wp_enqueue_script('jquery'); // enqueue the external file
        }
    	add_action('wp_enqueue_scripts', 'load_external_jQuery'); // initiate the function
    } else {
        function load_local_jQuery() {
            wp_enqueue_script('jquery'); // enqueue built in WordPress version
        }
    add_action('wp_enqueue_scripts', 'load_local_jQuery'); // initiate the function
    }
    ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>$.fn.modal || document.write('<script src="/wp-content/themes/demidov/js/bootstrap.min.js"><\/script>');</script> 

    <!--
    gooogle maps
     <script>
      function initMap() {
        var uluru = {lat: -45.051, lng: 38.953};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3G69mDMmAV5ki0EoLK4u2rU0OqWTgvb4&callback=initMap"></script>
     -->
  </body>
</html>