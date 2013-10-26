<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<div class="row" id="home-slides">

<div class="slide">

	<img src="<?php bloginfo('template_directory');?>/img/slideshows/home/home-banner-1.jpg"/>

	<div class="container grid">


	</div>

</div>

</div>

<div class="row" id="welcome-note">
	<div class="grid centered">

		<h1 class="accent">sfsd</h1>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin accumsan velit ut sollicitudin porttitor. Fusce elementum dapibus placerat. In pharetra lacus sit amet ante accumsan, ac tincidunt leo ornare. In hac habitasse platea dictumst. Nam leo est, tincidunt tempor aliquam ut, porttitor sed sem. In malesuada, erat pellentesque ornare vestibulum, dui nisl fringilla lorem, sit amet bibendum libero elit id dui.</p>
	</div>
</div>
<!--end row-->

<div class="row row--alt" id="internal-calltos">
	<div class="grid">

		<div class="grid__item desk--one-third centered">

			<h2>sffsfs<h2>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Proin accumsan velit ut sollicitudin porttitor. Fusce elementum dapibus placerat. 
				In pharetra lacus sit amet ante accumsan, ac tincidunt leo ornare. 
				In hac habitasse platea dictumst. Nam leo est, tincidunt tempor aliquam ut, porttitor sed sem. 
				In malesuada, erat pellentesque ornare vestibulum, dui nisl fringilla lorem, sit amet bibendum libero elit id dui.
				<a class="btn btn--accent-bg">More</a>
			</p>

		</div>
		<!--end one third-->

		<div class="grid__item desk--one-third centered">

			<h2>Psfsfs<h2>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Proin accumsan velit ut sollicitudin porttitor. Fusce elementum dapibus placerat. 
				In pharetra lacus sit amet ante accumsan, ac tincidunt leo ornare. 
				In hac habitasse platea dictumst. Nam leo est, tincidunt tempor aliquam ut, porttitor sed sem. 
				In malesuada, erat pellentesque ornare vestibulum, dui nisl fringilla lorem, sit amet bibendum libero elit id dui.
				<a class="btn btn--accent-bg">More</a>
			</p>
			
		</div>
		<!--end one third-->

		<div class="grid__item desk--one-third centered">

			<h2>fssfs<h2>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Proin accumsan velit ut sollicitudin porttitor. Fusce elementum dapibus placerat. 
				In pharetra lacus sit amet ante accumsan, ac tincidunt leo ornare. 
				In hac habitasse platea dictumst. Nam leo est, tincidunt tempor aliquam ut, porttitor sed sem. 
				In malesuada, erat pellentesque ornare vestibulum, dui nisl fringilla lorem, sit amet bibendum libero elit id dui.
				<a class="btn btn--accent-bg">More</a>
			</p>
			
		</div>
		<!--end one third-->

	</div>
</div>
<!--end row-->

<div class="row" id="our-clients">
	<div class="grid centered">

		<h3 class="h1 accent">erwrwes<h3>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing. </p>
	</div>
</div>
<!--end row-->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>