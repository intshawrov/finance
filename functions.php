
<?php

add_action('wp_enqueue_scripts', 'neuron_theme_files');

function neuron_theme_files() {

    //  CSS Files
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('finance-style', get_stylesheet_uri());

    //  Load jQuery 
    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);

    wp_enqueue_script('bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array('jquery'), null, true);

    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);

    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true);

    wp_enqueue_script('ajaxchimp', get_template_directory_uri() . '/assets/js/ajaxchimp.js', array('jquery'), null, true);

    wp_enqueue_script('ajaxchimp-config', get_template_directory_uri() . '/assets/js/ajaxchimp-config.js', array('jquery'), null, true);

    wp_enqueue_script('neuron-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}


add_action('after_setup_theme' , 'neuron_theme_support');

function neuron_theme_support(){

    // Loading Theme Textdomain
    load_theme_textdomain('neuron-finance',get_template_directory().'/languages' );

    //Generate automatic feed links on head
    add_theme_support('automatic-feed-links');

    //Adding support for automatic title-tag
    add_theme_support('title-tag');

    //Enabling post thumbnails support
    add_theme_support('post-thumbnails');

    add_image_size('finance-blog-thumb',400, 300, true );

    // This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'neuron-finance' ),
            'menu-2' => esc_html__( 'Footer', 'neuron-finance' ),
		)
	);


    add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    //Custom logo support
    add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

}


add_filter('widget_text' , 'do_shortcode');

    //Regesting custom post


        add_action('init' , 'neuron_theme_custom_posts');

        function neuron_theme_custom_posts(){

        register_post_type('slide',
        array(
            'labels'    => array(
                'name'  => __( 'Slides' ),
                'singular_name' => __( 'Slides' )
            ),
            'supports'  => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'pulic'     => false,
            'show_ui'     => true,
        ));


        register_post_type('feature',
        array(
            'labels'    => array(
                'name'  => __( 'Features' ),
                'singular_name' => __( 'Features' )
            ),
            'supports'  => array('title', 'editor',  'thumbnail', 'page-attributes'),
            'pulic'     => false,
            'show_ui'     => true,
        ));

        register_post_type('service',
        array(
            'labels'    => array(
                'name'  => __( 'Services' ),
                'singular_name' => __( 'Services' )
            ),
            'supports'  => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'pulic'     => false,
            'show_ui'     => true,
        ));

        register_post_type('work',
        array(
            'labels'    => array(
                'name'  => __( 'Works' ),
                'singular_name' => __( 'Work' )
            ),
            'supports'  => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public'     => true,
            'show_ui'     => true,
            
        ));





 
}

// Register wiget

function finance_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer one', 'finance' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add footer one widgets here.', 'finance' ),
			'before_widget' => '<div id="%1$s" class="widget" %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer two', 'finance' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add footer two widgets here.', 'finance' ),
			'before_widget' => '<div id="%1$s" class="widget" %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer three', 'finance' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add footer three widgets here.', 'finance' ),
			'before_widget' => '<div id="%1$s" class="widget" %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer four', 'finance' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add footer four widgets here.', 'finance' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}




add_action( 'widgets_init', 'finance_widgets_init' );


function thumbpost_list_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        
        'count'   => 3,
    ), $atts );

    $q = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => $atts['count'], // Corrected this line
    ));

    $list = '<ul>'; // Fixed variable name from $lilst to $list

    while ( $q->have_posts() ) : $q->the_post();
        $idd = get_the_ID();
        $list .= '<li>
            ' . get_the_post_thumbnail($idd, 'thumbnail') . '
            <p><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></p>
            <span>' . get_the_date('d F Y', $idd) . '</span>
        </li>';
    endwhile;

    $list .= '</ul>';

    wp_reset_postdata(); // better than wp_reset_query()
    return $list;
}
add_shortcode( 'thumb_post', 'thumbpost_list_shortcode' );


// Including CS framework
require_once get_template_directory() . '/inc/cs-framework/codestar-framework.php';


// Check and define finance_categorized_blog
if ( ! function_exists( 'finance_categorized_blog' ) ) :
function finance_categorized_blog() {
    if ( false === ( $all_cats = get_transient( 'finance_categories' ) ) ) {
        $all_cats = get_categories( array(
            'fields'     => 'ids',
            'hide_empty' => 1,
            'number'     => 2,
        ) );
        $all_cats = count( $all_cats );
        set_transient( 'finance_categories', $all_cats );
    }
    return $all_cats > 1;
}
endif;




// Check and define finance_entry_footer
if ( ! function_exists( 'finance_entry_footer' ) ) :
function finance_entry_footer() {
    $separate_meta = wp_get_list_item_separator();
    $categories_list = get_the_category_list( $separate_meta );
    $edit_link = get_edit_post_link();

    if ( ( $categories_list && finance_categorized_blog() ) || $edit_link ) {
        echo '<footer class="entry-footer">';

        if ( 'post' === get_post_type() ) {
            if ( $categories_list && finance_categorized_blog() ) {
                echo '<span class="cat-links">';
                echo '<strong>Categories:</strong> ' . $categories_list;
                echo '</span>';
            }
        }

        

        echo '</footer><!-- .entry-footer -->';
    }
}
endif;

