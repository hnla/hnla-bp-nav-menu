hnla-bp-nav-menu
================

Please Note: This represents a proof of concept rather than fully realised stable work.
and are designed to work for BP in theme compatibility mode only.

The purpose of the files in this repo are to implement the new BuddyPress bp_nav_menu() function that was rolled out with BP 1.7. The template files re-factor the members/single/ templates to remove the older navigational functions and introduce the new function in home.php. Along with the templates are a set of styles designed to provide minimal styling and mimic the look of the old menus viewed under TwentyTwelve. Styles are enqueued via a set of functions which require dropping into the themes functions.php file.

The principle for this is to overload the bp-legacy templates to your theme so that BP recognizes those files and uses them in preference to it's own copies.

Styles are provided that mimic the look seen in twentyTwelve  and endevour to keep strictly to absolute necessary styles devoid of themeing aspects.

The styles are enqueued to a position which is my preference i.e keeping the folder 'css' nested in the 'buddypress' or 'community' top level folders in your theme.

Installation:

If you wish to test the new menu you will need to extract from the zip  or cloned repo the
folder and all contents therein named:

/members/single/

Extract the folder & it's file:

/css/bp-new-nav-menu-user.css

In your theme you will need to create a top level directory named 'community' or 'buddypress'

Into your new top level  you will copy the extracted /members/single/*.* files  ( it's vital to have this folder structure!)
plus the /css/ folder mentioned above

The final step is to open the file enqueue-styles.php in your fav editor copy it's contents and paste into a suitable position in your themes functions.php file.
or in branch dev-1.1 add these lines to functions.php to rquire the enqueue-styles.php file ( after branch merge to master  this is the easier approach?

$bp_dir = is_dir('buddypress') ? 'buddypress' : 'community';
locate_template( array( $bp_dir . '/enqueue-styles.php' ), true, true );
