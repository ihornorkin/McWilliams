    <footer class="l-footer">
      <div class="l-footer__socail">
        <div class="m-footer-logo-list">
          <div class="m-footer-logo-list__list">
          <?php $facebook = get_theme_mod('facebook_link'); ?>         
            <div class="m-footer-logo-list__item"><a href="<?php echo esc_html($facebook); ?>"><i class="i-icon-facebook"></i></a>
            </div>
          <?php $insta = get_theme_mod('insta_link'); ?> 
            <div class="m-footer-logo-list__item"><a href="<?php echo esc_html($insta); ?>"><i class="i-icon-instagram"></i></a>
            </div>
          <?php $twitter = get_theme_mod('tw_link'); ?> 
            <div class="m-footer-logo-list__item"><a href="<?php echo esc_html($twitter); ?>"><i class="i-icon-twitter"></i></a>
            </div>
          <?php $youtube = get_theme_mod('youtube_link'); ?>
            <div class="m-footer-logo-list__item"><a href="<?php echo esc_html($youtube); ?>"><i class="i-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="l-footer__privacy">
        <div class="m-privacy-list">
          <div class="m-privacy-list__list">
            <div class="m-privacy-list__item"><a href="#">CONTACT US</a>
            </div>
            <div class="m-privacy-list__item"><a href="#">TERMS &amp; CONDITIONS</a>
            </div>
            <div class="m-privacy-list__item"><a href="#">PRIVACY POLICY</a>
            </div>
          </div>
        </div>
      </div>
      <div class="l-footer__menu">
        <div class="m-dropdown-menu">
          <div class="m-dropdown-menu__menu"><a href="#" class="m-dropdown-menu__item">INTERNATIONAL WEBSITES<i class="i-icon-arrowdown"></i></a>
            <div class="m-dropdown-menu__sub-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-l-menu', 'container' => '', 'menu_id' => '', 'menu_class' => 'm-dropdown-menu__sub-list' ) );?>
            </div>
          </div>
        </div>
        <div class="m-dropdown-menu">
          <div class="m-dropdown-menu__menu"><a href="#" class="m-dropdown-menu__item">OUR WINE BRANDS<i class="i-icon-arrowdown"></i></a>
            <div class="m-dropdown-menu__sub-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-c-menu', 'container' => '', 'menu_id' => '', 'menu_class' => 'm-dropdown-menu__sub-list' ) );?>
            </div>
          </div>
        </div>
        <div class="m-dropdown-menu">
          <div class="m-dropdown-menu__menu"><a href="#" class="m-dropdown-menu__item">CORPORATE<i class="i-icon-arrowdown"></i></a>
            <div class="m-dropdown-menu__sub-menu">
             <?php wp_nav_menu( array( 'theme_location' => 'footer-r-menu', 'container' => '', 'menu_id' => '', 'menu_class' => 'm-dropdown-menu__sub-list' ) );?>
            </div>
          </div>
        </div>
      </div>
      <div class="l-footer__logos">
        <div class="m-footer-logos">
          <ul class="m-footer-logos__list">
            <li class="m-footer-logos__item m-footer-logos__item--first"><img src="<?php echo get_template_directory_uri(); ?>/img/mcwilliams_wordmark.png" alt="">
            </li>
            <li class="m-footer-logos__item m-footer-logos__item--second"><img src="<?php echo get_template_directory_uri(); ?>/img/affw_horiz_lg_bw.png" alt="">
            </li>
            <li class="m-footer-logos__item m-footer-logos__item--third"><img src="<?php echo get_template_directory_uri(); ?>/img/drinkwise_logo.png" alt="">
            </li>
          </ul>
        </div>
      </div>
      <div class="l-footer__copyright">
        <div class="m-copyright">
          <?php $footer_c = get_theme_mod('footer_copyright'); ?>
          <p><?php echo esc_html($footer_c); ?></p>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
    <!-- Load Scripts-->
    <script>
      var scr = {
        "scripts": [{
          "src": "http://code.jquery.com/jquery-1.11.0.min.js",
          "async": false
        }, {
          "src": "js/common.js",
          "async": false
        }]
      };
      !function (t, n, r) {
        "use strict";
        var c = function (t) {
          if ("[object Array]" !== Object.prototype.toString.call(t)) return !1;
          for (var r = 0; r < t.length; r++) {
            var c = n.createElement("script"),
                    e = t[r];
            c.src = e.src, c.async = e.async, n.body.appendChild(c)
          }
          return !0
        };
        t.addEventListener ? t.addEventListener("load", function () {
          c(r.scripts);
        }, !1) : t.attachEvent ? t.attachEvent("onload", function () {
          c(r.scripts)
        }) : t.onload = function () {
          c(r.scripts)
        }
      }(window, document, scr);
    </script>
  </body>
</html>