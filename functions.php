<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
		Required external files
	   ======================================================================================================================== */

		require_once( 'external/starkers-utilities.php' );


	
	/* ========================================================================================================================
		Theme specific settings
	   ======================================================================================================================== */

		add_theme_support('post-thumbnails');


		/**
	      * Register custom menu areas
	      *
	      * @return void
	      * @author Dan Collins
	     */

	     function register_my_menus() {
		     register_nav_menus(
			     array(
			     'header-menu' => __( 'Header Menu' ),
			     'footer-links'=> __( ' Footer Links')
			     )
		     );
	     }

	    
	/* ========================================================================================================================
		Admin Theme Overrides
	   ======================================================================================================================== */


	     /**
	      * change admin footer link
	      *
	      * @return void
	      * @author Dan Collins
	      */

	     function remove_footer_admin () {
	            $year = date('Y');
	           echo '&copy; '.$year.' - Cube3 Digital';
	     }
	    

	     /**
	      * remove unnecessary dashboard widgets
	      *
	      * @return void
	      * @author Dan Collins
	      */

			function wpc_dashboard_widgets() {
			      global $wp_meta_boxes;
			      // Today widget
			      unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
			      // Last comments
			      unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
			      // Incoming links
			      unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
			      // Plugins
			      unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
			       // Wordpress Blog
			      unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
			       // Other News
			      unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
			}



	/* ========================================================================================================================
		Actions and Filters
	   ======================================================================================================================== */

		add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );
    	add_action( 'init', 'register_my_menus' );
    	add_action('wp_dashboard_setup', 'wpc_dashboard_widgets');

		
		add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );
		add_filter('admin_footer_text', 'remove_footer_admin');


	/* ========================================================================================================================
		Scripts
	   ======================================================================================================================== */



	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Dan Collins
	 */

	function starkers_script_enqueuer() {

		wp_register_script( 'plugins', get_template_directory_uri().'/dist/js/plugins.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'plugins' );

		wp_register_script( 'app', get_template_directory_uri().'/dist/js/app.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'app' );

        wp_register_style( 'app', get_stylesheet_directory_uri().'/dist/css/app.min.css', '', '', 'screen' );
        wp_enqueue_style( 'app' );
	}	




	/* ========================================================================================================================
		Comments
	   ======================================================================================================================== */



	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}