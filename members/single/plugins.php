<?php
/**
 * BuddyPress - Users Plugins Template
 *
 * 3rd-party plugins should use this template to easily add template
 * support to their plugins for the members component.
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */
?>

		<?php do_action( 'bp_before_member_plugin_template' ); ?>

		<h3><?php do_action( 'bp_template_title' ); ?></h3>

		<?php do_action( 'bp_template_content' ); ?>

		<?php do_action( 'bp_after_member_plugin_template' ); ?>
