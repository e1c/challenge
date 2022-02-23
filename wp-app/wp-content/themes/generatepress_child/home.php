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
             <div class="six-columns">
<?      
                $footer_img_1 = get_field('footer_img',$post_id,true);
                $footer_img_2 = get_field('footer_img_2',$post_id,true);
                $footer_img_3 = get_field('footer_img_3',$post_id,true);
?>
               <div class="one-sixth ice-cream cream-1 pink"> <img src="<?php echo esc_url( $footer_img_1['url'] ); ?>" alt="<?php echo esc_attr( $footer_img_1['alt'] ); ?>" /> </div>
               <div class="one-sixth ice-cream cream-2 yellow"> <img src="<?php echo esc_url( $footer_img_2['url'] ); ?>" alt="<?php echo esc_attr( $footer_img_2['alt'] ); ?>" /> </div>
               <div class="one-sixth ice-cream cream-3 blue"> <img src="<?php echo esc_url( $footer_img_3['url'] ); ?>" alt="<?php echo esc_attr( $footer_img_3['alt'] ); ?>" /> </div>
                
               <div class="one-sixth ice-cream cream-4 pink"> <img src="<?php echo esc_url( $footer_img_1['url'] ); ?>" alt="<?php echo esc_attr( $footer_img_1['alt'] ); ?>" /> </div>
               <div class="one-sixth ice-cream cream-5 yellow"> <img src="<?php echo esc_url( $footer_img_2['url'] ); ?>" alt="<?php echo esc_attr( $footer_img_2['alt'] ); ?>" /> </div>
               <div class="one-sixth ice-cream cream-6 blue"> <img src="<?php echo esc_url( $footer_img_3['url'] ); ?>" alt="<?php echo esc_attr( $footer_img_3['alt'] ); ?>" /> </div>

            </div>
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
