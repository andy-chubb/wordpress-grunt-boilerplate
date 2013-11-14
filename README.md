# Intro

A barebones wordpress boilerplate which is an extension of the renowned [starkers][1] theme, full of front-end best practices and goodness. 

The aim of this theme is to get your wordpress site up and running as quickly as possible whilst still accounting for cross browser issues and best practices. In theory it should shave 2-3 hours of your initial site setup time and ensure it's equipped for the rocky road ahead!


# Key Features / Whats Included


## Concepts / Coding Patterns

- Modular [SASS][14] Structure => Individual files for typography, buttons, variables, mixins, forms, and grid system

- [Compass][5] => Experience cleaner markup without presentational classes. It’s chock full of the web’s best reusable patterns.

- Mobile Ready => Built around the [skeleton][7] grid system to help fire you out of the starting blocks when building a responsive site

- [Internet Explorer Targeting through Body Classes][8]

- [Namespaced JS][2] => Avoids global variable conflicts with other plugins

- [Modular JS][] => Makes it easier to understand and test scripts

- HTML5 placeholder input support for IE7




## External Libraries

- [Selectivizr][4] => A utility that emulates CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8

- [CSS3PIE][6] => makes Internet Explorer 6-9 capable of rendering several of the most useful CSS3 decoration features

- [Modernizr][13] => HTML5 and CSS3 feature detection, allowing you to write conditional JavaScript and CSS to handle each situation, whether a browser supports a feature or not.


## Wordpress magic

- Admin Customisation => change login css(logo, buttons, colours etc), remove unwanted dashboard widgets, style/scripts loader, custom post type registration, nav menu sections, custom theme screenshot
s
![Nav Menu Areas Screenshot][9]

![Theme Badge Screenshot][10]

![Login Screenshot][12]



# Installation 

Simply drop this folder into your theme folder and your away... 

Please note: you will need to have SASS/Compass installed on your system with it set to watch the project folder so that it pre-compiles the SASS



# Planned Features

This is a very early release, lots more cool features to be implemented so watch this space...



## libraries

- [IE9.js][11] => A JavaScript library to make Microsoft Internet Explorer behave like a standards-compliant browser, fixing many HTML and CSS issues


## features

- Responsive navigation => Either a) convert a menu to a select/dropdown at a certain px breakpoint or b) implement the ['off canvas'][15] pattern


# Contribute

Feel free to fork the code and add new features which you think should be included to make it 'THE' theme!
 

# Suggested wordpress plugins

  - [Advanced Custom Fields][16] => Make Wordpress your Mistress!!
  - [Yoast SEO][17] => THE wordpress SEO plugin
  - [Admin Menu Editor][18] => Lets you edit the WordPress admin menu. You can re-order, hide or rename menus, add custom menus and more.
 
 
# External Links + Resources
  - [http://viewportindustries.com/products/starkers/][1]
  - [http://www.codeproject.com/Articles/320764/Quick-Tip-JavaScript-Namespaces][2]
  - [http://css-tricks.com/how-do-you-structure-javascript-the-module-pattern-edition][3]
  - [http://selectivizr.com][4]
  - [http://compass-style.org][5]
  - [http://css3pie.com][6]
  - [http://www.getskeleton.com][7]
  - [http://misteroneill.com/journal/improved-internet-explorer-targeting-through-body-classes][8]
 
[1]: http://viewportindustries.com/products/starkers/
[2]: http://www.codeproject.com/Articles/320764/Quick-Tip-JavaScript-Namespaces
[3]: http://css-tricks.com/how-do-you-structure-javascript-the-module-pattern-edition/
[4]: http://selectivizr.com/
[5]: http://compass-style.org/
[6]: http://css3pie.com/
[7]: http://www.getskeleton.com/
[8]: http://misteroneill.com/journal/improved-internet-explorer-targeting-through-body-classes/
[9]: https://bitbucket.org/dancube3/wordpress-boilerplate/downloads/Screen%20Shot%202013-05-22%20at%2010.17.50.png
[10]: https://bitbucket.org/dancube3/wordpress-boilerplate/downloads/Screen%20Shot%202013-05-22%20at%2010.17.21.png
[11]: https://code.google.com/p/ie7-js/
[12]: https://bitbucket.org/dancube3/wordpress-boilerplate/downloads/Screen%20Shot%202013-05-22%20at%2012.31.17.png
[13]: http://modernizr.com/
[14]: http://sass-lang.com/
[15]: http://jasonweaver.name/lab/offcanvas/
[16]: http://www.advancedcustomfields.com/
[17]: http://yoast.com/wordpress/seo/
[18]: http://wordpress.org/plugins/admin-menu-editor/