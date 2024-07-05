<?php 


/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */

 function danva_wpdocs_block_pattern_category() {
	register_block_pattern_category( 'free-patterns', array(
		'label' => __( 'Free Paterns', 'danva' )
	) );
}

add_action( 'init', 'danva_wpdocs_block_pattern_category' );


 function danva_custom_register_block_patterns()
{
  

    register_block_pattern(
        'Articles', // Unique name for your pattern
        array(
            'title'       => __( 'Articles', 'danva' ), // Title displayed in the block editor
            'description' => 'Section showing the articles of the blog', // Description of your pattern

            'content'     => '<!-- wp:group {"metadata":{"name":"Our Articles"},"backgroundColor":"black","className":"our_articles","layout":{"type":"constrained","wideSize":"80%"}} -->
            <div class="wp-block-group our_articles has-black-background-color has-background"><!-- wp:spacer -->
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"7rem"}},"textColor":"white","fontFamily":"figtree"} -->
            <h2 class="wp-block-heading has-white-color has-text-color has-link-color has-figtree-font-family" style="font-size:7rem;font-style:normal;font-weight:600">Our Articles</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|Second"}}}},"textColor":"Second","fontSize":"x-small","fontFamily":"urbanist"} -->
            <p class="has-second-color has-text-color has-link-color has-urbanist-font-family has-x-small-font-size">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:spacer -->
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:latest-posts {"postsToShow":6,"displayPostContent":true,"excerptLength":10,"displayPostDate":true,"postLayout":"grid","displayFeaturedImage":true,"featuredImageSizeSlug":"large","featuredImageSizeWidth":500,"featuredImageSizeHeight":300,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"x-small","fontFamily":"urbanist"} /--></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Marquee', // Unique name for your pattern
        array(
            'title'       => __( 'Marquee', 'danva' ), // Title displayed in the block editor
            'description' => 'Section showing the marquee line using Gsap Animation', // Description of your pattern

            'content'     => '<!-- wp:group {"metadata":{"name":"Marquee"},"backgroundColor":"Second","className":"marquee","layout":{"type":"default"}} -->
            <div class="wp-block-group marquee has-second-background-color has-background"><!-- wp:group {"className":"marquee__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group marquee__inner"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"marquee__item ","fontSize":"x-large","fontFamily":"figtree"} -->
            <h3 class="wp-block-heading marquee__item has-white-color has-text-color has-link-color has-figtree-font-family has-x-large-font-size" style="font-style:normal;font-weight:500;text-transform:capitalize">Danva Corporate</h3>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"marquee__item","fontSize":"x-large","fontFamily":"figtree"} -->
            <h3 class="wp-block-heading marquee__item has-white-color has-text-color has-link-color has-figtree-font-family has-x-large-font-size" style="font-style:normal;font-weight:500;text-transform:capitalize">Block Theme</h3>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"marquee__item ","fontSize":"x-large","fontFamily":"figtree"} -->
            <h3 class="wp-block-heading marquee__item has-white-color has-text-color has-link-color has-figtree-font-family has-x-large-font-size" style="font-style:normal;font-weight:500;text-transform:capitalize">Website Design</h3>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"marquee__item ","fontSize":"x-large","fontFamily":"figtree"} -->
            <h3 class="wp-block-heading marquee__item has-white-color has-text-color has-link-color has-figtree-font-family has-x-large-font-size" style="font-style:normal;font-weight:500;text-transform:capitalize">Brand Strategy</h3>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"marquee__item ","fontSize":"x-large","fontFamily":"figtree"} -->
            <h3 class="wp-block-heading marquee__item has-white-color has-text-color has-link-color has-figtree-font-family has-x-large-font-size" style="font-style:normal;font-weight:500;text-transform:capitalize">Danva Corporate</h3>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"marquee__item","fontSize":"x-large","fontFamily":"figtree"} -->
            <h3 class="wp-block-heading marquee__item has-white-color has-text-color has-link-color has-figtree-font-family has-x-large-font-size" style="font-style:normal;font-weight:500;text-transform:capitalize">Block Theme</h3>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"marquee__item ","fontSize":"x-large","fontFamily":"figtree"} -->
            <h3 class="wp-block-heading marquee__item has-white-color has-text-color has-link-color has-figtree-font-family has-x-large-font-size" style="font-style:normal;font-weight:500;text-transform:capitalize">Website Design</h3>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"marquee__item ","fontSize":"x-large","fontFamily":"figtree"} -->
            <h3 class="wp-block-heading marquee__item has-white-color has-text-color has-link-color has-figtree-font-family has-x-large-font-size" style="font-style:normal;font-weight:500;text-transform:capitalize">Brand Strategy</h3>
            <!-- /wp:heading --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my'), // Keywords to help users find your pattern
        )
    );

    
    register_block_pattern(
        'About Us', // Unique name for your pattern
        array(
            'title'       => __( 'About Us', 'danva' ), // Title displayed in the block editor
            'description' => 'Section showing the About Us Section', // Description of your pattern

            'content'     => '<!-- wp:group {"metadata":{"name":"Call"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"black","className":"gap-o","layout":{"type":"constrained","wideSize":"80%"}} -->
            <div class="wp-block-group gap-o has-black-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:spacer {"className":"gap_o"} -->
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer gap_o"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","className":"about_free"} -->
            <div class="wp-block-column is-vertically-aligned-center about_free"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"7rem"}},"textColor":"white","fontFamily":"figtree"} -->
            <h2 class="wp-block-heading has-white-color has-text-color has-link-color has-figtree-font-family" style="font-size:7rem;font-style:normal;font-weight:600">About Us</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|Second"}}}},"textColor":"Second","fontSize":"x-small","fontFamily":"urbanist"} -->
            <p class="has-second-color has-text-color has-link-color has-urbanist-font-family has-x-small-font-size">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"border":{"radius":"50px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"botao_video","fontSize":"x-small","fontFamily":"urbanist"} -->
            <div class="wp-block-button has-custom-font-size botao_video has-urbanist-font-family has-x-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">Get in Touch</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":727,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( '/assets/images/about.png' ) ) . '" alt="" class="wp-image-727"/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            
            <!-- wp:spacer -->
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Video Background', // Unique name for your pattern
        array(
            'title'       => __( 'Video Background', 'danva' ), // Title displayed in the block editor
            'description' => 'Section with a Video Background', // Description of your pattern

            'content'     => '<!-- wp:group {"metadata":{"name":"Video BG"},"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"first","className":"video_group","layout":{"type":"default"}} -->
            <div class="wp-block-group video_group has-first-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:video {"className":"video_section"} -->
            <figure class="wp-block-video video_section"><video autoplay loop muted src="' . esc_url( get_theme_file_uri( '/assets/videos/background.mp4' ) ) . '"></video></figure>
            <!-- /wp:video -->
            
            <!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"7rem","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"video_text pt-30","fontFamily":"figtree"} -->
            <h2 class="wp-block-heading has-text-align-center video_text pt-30 has-white-color has-text-color has-link-color has-figtree-font-family" style="padding-top:0;padding-bottom:0;font-size:7rem;font-style:normal;font-weight:600;line-height:1">Be the Best</h2>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"7rem","lineHeight":"1"}},"textColor":"white","className":"video_text ","fontFamily":"figtree"} -->
            <h2 class="wp-block-heading has-text-align-center video_text has-white-color has-text-color has-figtree-font-family" style="padding-top:0;padding-bottom:0;font-size:7rem;font-style:normal;font-weight:600;line-height:1">With the Best</h2>
            <!-- /wp:heading -->
            
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|Second"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"Second","className":"video_text ","fontSize":"x-small","fontFamily":"urbanist"} -->
            <p class="has-text-align-center video_text has-second-color has-text-color has-link-color has-urbanist-font-family has-x-small-font-size" style="font-style:normal;font-weight:400">We pool our expertise to turn your wildest projects into singular experiences. Discover our diverse expertise, each one providing a unique dimension to your vision.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"className":"pb-30","layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons pb-30"><!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"border":{"radius":"50px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"botao_video","fontSize":"x-small","fontFamily":"urbanist"} -->
            <div class="wp-block-button has-custom-font-size botao_video has-urbanist-font-family has-x-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">Get in Touch</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Introduction Section', // Unique name for your pattern
        array(
            'title'       => __( 'Introduction Section', 'danva' ), // Title displayed in the block editor
            'description' => 'Introduction Section of the Page', // Description of your pattern

            'content'     => '<!-- wp:group {"metadata":{"name":"Hero"},"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"backgroundColor":"first","className":"hero_section","layout":{"type":"constrained","wideSize":"80%"}} -->
            <div class="wp-block-group hero_section has-first-background-color has-background" style="padding-right:0;padding-left:0"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"default"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1","fontSize":"7.7rem"},"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"figtree"} -->
            <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-figtree-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:7.7rem;font-style:normal;font-weight:600;line-height:1">Welcome to</h2>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","lineHeight":"1","fontSize":"7.7rem"},"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"textColor":"white","className":"h1_hero","fontFamily":"figtree"} -->
            <h2 class="wp-block-heading has-text-align-center h1_hero has-white-color has-text-color has-figtree-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:7.7rem;font-style:normal;font-weight:600;line-height:1;text-transform:capitalize"><span>Danva</span> Corporate</h2>
            <!-- /wp:heading --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"align":"wide","layout":{"type":"constrained","wideSize":"60%","justifyContent":"center"}} -->
            <div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|Second"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"Second","fontSize":"x-small","fontFamily":"urbanist"} -->
            <p class="has-text-align-center has-second-color has-text-color has-link-color has-urbanist-font-family has-x-small-font-size" style="font-style:normal;font-weight:400">We pool our expertise to turn your wildest projects into singular experiences. Discover our diverse expertise, each one providing a unique dimension to your vision.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"white","className":"social_midia_btn","fontSize":"x-small","fontFamily":"urbanist"} -->
            <h2 class="wp-block-heading has-text-align-center social_midia_btn has-white-color has-text-color has-link-color has-urbanist-font-family has-x-small-font-size" style="font-style:normal;font-weight:500">Follow us on Social Midia</h2>
            <!-- /wp:heading --></div>
            <!-- /wp:group -->
            
            <!-- wp:spacer {"height":"55px"} -->
            <div style="height:55px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":731,"sizeSlug":"large","linkDestination":"none","align":"left"} -->
            <figure class="wp-block-image alignleft size-large"><img src="' . esc_url( get_theme_file_uri( '/assets/images/banner_intro-1024x622.png' ) ) . '" alt="" class="wp-image-731"/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my'), // Keywords to help users find your pattern
        )
    );

    

}

add_action('init', 'danva_custom_register_block_patterns');

?>