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

	</div>

</div>

<div class="row">

	<div class="grid centered">

		<div class="grid__item  lap--one-whole  desk--two-thirds">
        	<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    	</div>

		<div class="grid__item  lap--one-whole  desk--one-third">
			<h1 class="accent">Project Name</h1>
       		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    	</div>

	</div>

</div>
<!--end row-->

<div class="row">

	<div class="grid centered">

		<div class="grid__item  lap--one-whole  desk--one-third">
			<h1 class="accent">Project Name</h1>
       		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    	</div>

		<div class="grid__item  lap--one-whole  desk--two-thirds">
        	<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    	</div>

	</div>

</div>
<!--end row-->

<div class="row">

	<div class="grid centered">

		<div class="grid__item  lap--one-whole  desk--two-thirds">
        	<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    	</div>

		<div class="grid__item  lap--one-whole  desk--one-third">
			<h1 class="accent">Project Name</h1>
       		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    	</div>

	</div>

</div>
<!--end row-->

<div class="row row--alt">
	<div class="grid">

		<div class="grid__item desktop--one-third centered">

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

		<div class="grid__item desktop--one-third centered">

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

		<div class="grid__item desktop--one-third centered">

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