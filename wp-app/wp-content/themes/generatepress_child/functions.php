<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */


 /**
 * Enqueue a script with jQuery as a dependency.
 */
function wpdocs_scripts_method() {
    wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_scripts_method' );

add_shortcode( 'sign_up_form', 'func_newsletter_form' );

function func_newsletter_form(){
    $html = "";
    $html = '
      <!--  Newsletter Section -->
    <section id="newsletter">
        <div class="ns-container">
          <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="" method="">
                        <input id="newsletter-email" type="email" name="email" placeholder="E-mail"><input type="submit" value="Get Your Ice-cream">
                    </form>
                </div>
          </div>

        </div>
    </section><!-- End newsletter Section-->';
    return $html;
}

add_filter( 'generate_copyright','tu_custom_copyright' );
function tu_custom_copyright() {
    ?>
    <span class="copyright">Ice-cream All Rights Reserved! <?echo date('Y')?> </span>
    <?php
}