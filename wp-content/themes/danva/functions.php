<?php 

function danva_theme_gsap_script(){

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////// CHANGE LINKS BEFOR SEND TO PRODUCTION -- NOT ALLOWED CDN OR EXTERIOR LINKS!!! //////////////////////// 
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // The core GSAP library
    wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array('gsap-js'), false, true );
    // Lenis - Smotter Scroll Animation
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/assets/js/lenis.min.js', array('gsap-js'), false, true );
     // Custom JS 
    wp_enqueue_script( 'gsap-js3', get_template_directory_uri() . '/assets/js/app.js', array('gsap-js'), false, true );
    wp_enqueue_script( 'gsap-js3.5', get_template_directory_uri() . '/assets/js/mouse_tag.js', array('gsap-js'), false, true );    
    wp_enqueue_script( 'gsap-js4', get_template_directory_uri() . '/assets/js/horizontal.js', array('gsap-js'), false, true );
    wp_enqueue_script( 'gsap-js5', get_template_directory_uri() . '/assets/js/simple_effects.js', array('gsap-js'), false, true );
    wp_enqueue_script( 'gsap-js6', get_template_directory_uri() . '/assets/js/cursor.js', array('gsap-js'), false, true );
    wp_enqueue_script( 'gsap-js7', get_template_directory_uri() . '/assets/js/ad.js', array('gsap-js'), false, true );
}

add_action( 'wp_enqueue_scripts', 'danva_theme_gsap_script' );


// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
require get_template_directory() . '/inc/free-patterns.php';

// Add Customizer
require get_template_directory() . '/inc/customizer.php';


// Upsell in the customizer
if ( class_exists( 'WP_Customize_Section' ) ) {
	class Danva_Upsell_Section extends WP_Customize_Section {
		public $type = 'danva-upsell';
		public $button_text = '';
		public $url = '';
		public $background = '';
		public $text_color = '';
		protected function render() {
			$background = ! empty( $this->background ) ? esc_attr( $this->background ) : 'linear-gradient(90deg,rgb(0,0,0) 0%,rgb(0,0,0) 35%,rgb(0,0,0) 70%,rgb(0,0,0) 100%)
            ';
			$text_color       = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="danva_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title" style="border: 0; color:#fff; background:<?php echo esc_attr( $background ); ?>;">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}


// Add Get Started
require get_template_directory() . '/inc/get-started/get-started.php';


function danva_notice() {
    $user_id = get_current_user_id();
    if ( !get_user_meta( $user_id, 'danva_notice_dismissed' ) ) {
 
        ?>
        <div class="updated notice notice-success is-dismissible notice-get-started-class" data-notice="get-start" style="display: flex-inline;padding: 10px;">
        <h2 style="color: #FFC300"><?php echo esc_html('☆☆☆☆☆', 'danva'); ?><br></h2>
            <p><?php echo esc_html('This is just a sample of what the Danva Template can do, the Premium Version is waiting for you!', 'danva'); ?></p>
            <a style="margin-top: 18px;" class="button button-primary" target="_blank"
               href="<?php echo esc_url('https://realtimethemes.com/theme/Danva'); ?>"><?php esc_html_e('See Premium Version', 'danva') ?></a>
               <a href="?danva-dismissed" style="margin-top: 18px;" class="button button-secondary"><?php echo esc_html('Dismiss', 'danva'); ?></a>
        </div>
        <?php
        }
}
add_action( 'admin_notices', 'danva_notice' );
    
function danva_notice_dismissed() {
    $user_id = get_current_user_id();
    if ( isset( $_GET['danva-dismissed'] ) ) 
        add_user_meta( $user_id, 'danva_notice_dismissed', 'true', true );
}
add_action( 'admin_init', 'danva_notice_dismissed' );

/* Theme credit link */
define('DANVA_BUY_NOW',__('https://realtimethemes.com/theme/Danva','danva'));
define('DANVA_PRO_DEMO',__('https://preview.realtimethemes.com/danva/','danva'));
define('DANVA_REVIEW',__('https://realtimethemes.com/theme/Danva','danva'));
define('DANVA_SUPPORT',__('https://realtimethemes.com/','danva'));
?>


