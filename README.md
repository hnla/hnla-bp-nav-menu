hnla-bp-nav-menu
================

Please Note: This represents a proof of concept rather than fully realised stable work.

The purpose of the files in this repo are to implement the new BuddyPress bp_nav_menu() function that was rolled out with BP 1.7. The template files re-factor the members/single/ templates to remove the older navigational functions and introduce the new function in home.php. Along with the templates are a set of styles designed to provide minimal styling and mimic the look of the old menus viewed under TwentyTwelve. Styles are enqueued via a set of functions which require dropping into the themes functions.php file.

Installation:

If you wish to test the new menu you will need to extract from the zip  or cloned repo the
folder and all contents therein named:
/members/single/

the folder & it's file:
/css/bp-new-nav-menu-user.css

In your theme you will need to create a top level directory named 'community' or 'buddypress'

Into your new top level  you will copy the extracted /members/single/*.* files  ( it's vital to have this folder structure!)
plus the /css/ folder mentioned above

The final step is to open the file enqueue-styles.php in your fav editor copy it's contents and paste into a suitable position in your themes functions.php file.
