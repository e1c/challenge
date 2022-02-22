<?php

/* Template Name: Home */ 
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div <?php generate_do_attr( 'content' ); ?>>
		<main <?php generate_do_attr( 'main' ); ?>>


			<?php
			/**
			 * generate_before_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_before_main_content' );

?>
	<section class="grid-section" id="ice-main-slider">
                <div class="grid-container">

    <?$post_id = get_the_ID();
                    $banner_editor = get_field('main_banner_editor',$post_id,true);
                    $banner_img = get_field('main_banner_img',$post_id,true);
                    

?>
            <div class="two-columns">
                <div class="left-col">
                    <?echo $banner_editor;?>
                </div>

                <div class="right-col">
                <img src=" <?echo $banner_img['url'];?>" />

                </div>
            
            </div>
        </div>
<div style="overflow: hidden;padding-bottom:60px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="100%" height="200" preserveAspectRatio="none" viewBox="0 0 1440 200">
    <g mask="url(&quot;#SvgjsMask1063&quot;)" fill="none">
        <path d="M1464 200L0 200 L0 121.86Q53.21 55.08, 120 108.29Q167.41 35.7, 240 83.11Q293.85 64.96, 312 118.81Q379.42 66.23, 432 133.65Q478.4 60.05, 552 106.45Q596.52 78.97, 624 123.49Q645.54 73.03, 696 94.58Q762.28 40.86, 816 107.14Q840 59.14, 888 83.14Q966.93 42.08, 1008 121.01Q1050.76 91.77, 1080 134.53Q1124.44 58.97, 1200 103.41Q1228.16 59.57, 1272 87.74Q1354.2 49.94, 1392 132.14Q1412.58 80.72, 1464 101.3z" fill="#fff"></path>
        <path d=" 200L0 200 L0 139.13Q47.33 114.46, 72 161.79Q113.53 83.32, 192 124.85Q241.31 102.16, 264 151.47Q310.97 126.44, 336 173.41Q370.47 87.88, 456 122.34Q500.64 94.98, 528 139.62Q600.26 91.88, 648 164.14Q713.16 109.31, 768 174.47Q810.14 96.62, 888 138.76Q940.45 71.21, 1008 123.66Q1088.72 84.38, 1128 165.11Q1173.92 91.04, 1248 136.96Q1301.13 70.09, 1368 123.21Q1428.38 111.59, 1440 171.98Q1494.37 106.35, 1560 160.71z" fill="#fff"></path>
        <path d="M1512 200L0 200 L0 186.91Q35.89 150.8, 72 186.69Q122.55 117.24, 192 167.79Q248.78 152.57, 264 209.35Q309.2 134.55, 384 179.75Q428.31 152.06, 456 196.38Q498.18 166.56, 528 208.74Q552.69 161.43, 600 186.11Q641.14 155.25, 672 196.4Q716.32 168.72, 744 213.03Q756.78 153.81, 816 166.59Q859.8 138.39, 888 182.2Q939.59 161.79, 960 213.38Q997.22 130.6, 1080 167.82Q1128.63 144.45, 1152 193.08Q1219.14 140.22, 1272 207.36Q1309.15 124.52, 1392 161.67Q1463.58 113.25, 1512 184.82z" fill="white"></path>
    </g>
    <defs>
        <mask id="SvgjsMask1063">
            <rect width="100%" height="400" fill="#ffffff"></rect>
        </mask>
    </defs>
</svg></div>
        </section>

	<section class="grid-section" id="ice-launch">
        <div class="grid-container">
<?
$ice_cream_columns = get_field('ice_cream_columns');
if( $ice_cream_columns ): ?>
    <div id="ice_cream_columns" class="three-col">
        <div class="left-col ice-col">
            <img src="<?php echo esc_url( $ice_cream_columns['img_1']['url'] ); ?>" alt="<?php echo esc_attr( $ice_cream_columns['img_1']['alt'] ); ?>" />
            <div class="content">
                <?php echo $ice_cream_columns['text_1']; ?>
            </div>
        </div>
        <div class="middle-col ice-col">
            <img src="<?php echo esc_url( $ice_cream_columns['img_2']['url'] ); ?>" alt="<?php echo esc_attr( $ice_cream_columns['img_2']['alt'] ); ?>" />
            <div class="content">
                <?php echo $ice_cream_columns['text_2']; ?>
            </div>
        </div>
        <div class="right-col ice-col">
            <img src="<?php echo esc_url( $ice_cream_columns['img_3']['url'] ); ?>" alt="<?php echo esc_attr( $ice_cream_columns['img_3']['alt'] ); ?>" />
            <div class="content">
                <?php echo $ice_cream_columns['text_3']; ?>
            </div>
        </div>
    </div>

<?php endif; 
                   // $ice_cream_columns = get_field('ice_cream_columns',$post_id,true);
                    //echo $ice_cream_columns;
?>
        </div>
    </section>

	<section class="grid-section" id="ice-survey">
        <div class="grid-container">
<?
                    $form_launcher = get_field('form_launcher',$post_id,true);
                    $form_code = get_field('form_code',$post_id,true);
?>
         <div class="two-columns">
                <div class="left-col">
                    <?echo $form_launcher;?>
                </div>

                <div class="right-col">
                 <?echo $form_code;?>

                </div>
            
            </div>
        </div>
    </section>

	<section class="grid-section" id="ice-footer">
        <div class="grid-container">
<?      
                    $footer_img = get_field('footer_img',$post_id,true);
                    //echo $footer_img;
?>
        <img src="<?php echo esc_url( $footer_img['url'] ); ?>" alt="<?php echo esc_attr( $footer_img['alt'] ); ?>" />
        </div>
    </section>
<?
			/**
			 * generate_after_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_after_main_content' );
			?>
		</main>
	</div>

	<?php
	/**
	 * generate_after_primary_content_area hook.
	 *
	 * @since 2.0
	 */
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

	get_footer();
