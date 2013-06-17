<?php
/**
* Provides sorted search filter markup for members navigation 
* @package BuddyPress
* @version ...
*/

/**
* Check what component view we are showing to select matching search filter and
* display selected markup function.
*/

	if( !bp_is_user() )
		return;
	
	$bp_page_component = bp_current_component();
	$bp_page_action = bp_current_action();
	
	switch($bp_page_component){
		
		case 'activity' :
		
			echo tpl_member_activity_filter();
	
		break;
		
		case 'messages' :
		
			echo tpl_messages_search();
	
		break;
		
		case 'blogs' :
		
			echo tpl_blogs_sort();
		
		break;
		
		case 'forums' :
		
			echo tpl_forums_filter();
		
		break;

		case 'friends' :
		
			echo tpl_friends_filter();
			
		break;
			
		default:
			echo  '';
	}

/**
* Search boxes & filters markup
*/

// Activity nav filter
function tpl_member_activity_filter() {
?>
		<div id="activity-filter-select" class="last filter">
			<label for="activity-filter-by"><?php _e( 'Show:', 'buddypress' ); ?></label>
			<select id="activity-filter-by">
				<option value="-1"><?php _e( 'Everything', 'buddypress' ); ?></option>
				<option value="activity_update"><?php _e( 'Updates', 'buddypress' ); ?></option>

				<?php
				if ( !bp_is_current_action( 'groups' ) ) :
					if ( bp_is_active( 'blogs' ) ) : ?>

						<option value="new_blog_post"><?php _e( 'Posts', 'buddypress' ); ?></option>
						<option value="new_blog_comment"><?php _e( 'Comments', 'buddypress' ); ?></option>

					<?php
					endif;

					if ( bp_is_active( 'friends' ) ) : ?>

						<option value="friendship_accepted,friendship_created"><?php _e( 'Friendships', 'buddypress' ); ?></option>

					<?php endif;

				endif;

				if ( bp_is_active( 'forums' ) ) : ?>

					<option value="new_forum_topic"><?php _e( 'Forum Topics', 'buddypress' ); ?></option>
					<option value="new_forum_post"><?php _e( 'Forum Replies', 'buddypress' ); ?></option>

				<?php endif;

				if ( bp_is_active( 'groups' ) ) : ?>

					<option value="created_group"><?php _e( 'New Groups', 'buddypress' ); ?></option>
					<option value="joined_group"><?php _e( 'Group Memberships', 'buddypress' ); ?></option>

				<?php endif;

				do_action( 'bp_member_activity_filter_options' ); ?>

			</select>

</div><!-- .item-list-tabs -->
<?php
	return;
}
// Messages search
function tpl_messages_search() {
?>
	<?php if ( bp_is_messages_inbox() || bp_is_messages_sentbox() ) : ?>

		<div class="message-search filter"><?php bp_message_search_form(); ?></div>

	<?php endif; ?>
<?php
}
// Blogs sort by
function tpl_blogs_sort() {
?>

		<div id="blogs-order-select" class="last filter">

			<label for="blogs-all"><?php _e( 'Order By:', 'buddypress' ); ?></label>
			<select id="blogs-all">
				<option value="active"><?php _e( 'Last Active', 'buddypress' ); ?></option>
				<option value="newest"><?php _e( 'Newest', 'buddypress' ); ?></option>
				<option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ); ?></option>

				<?php do_action( 'bp_member_blog_order_options' ); ?>

			</select>
		</div>

<?php
}
// Forums filter
function tpl_forums_filter() {
?>
		<div id="forums-order-select" class="last filter">

			<label for="forums-order-by"><?php _e( 'Order By:', 'buddypress' ); ?></label>
			<select id="forums-order-by">
				<option value="active"><?php _e( 'Last Active', 'buddypress' ); ?></option>
				<option value="popular"><?php _e( 'Most Posts', 'buddypress' ); ?></option>
				<option value="unreplied"><?php _e( 'Unreplied', 'buddypress' ); ?></option>

				<?php do_action( 'bp_forums_directory_order_options' ); ?>

			</select>
		</div>
		
<?php
}
// friends filter
function tpl_friends_filter() {
?>		
		<?php if ( !bp_is_current_action( 'requests' ) ) : ?>

			<div id="members-order-select" class="last filter">

				<label for="members-friends"><?php _e( 'Order By:', 'buddypress' ); ?></label>
				<select id="members-friends">
					<option value="active"><?php _e( 'Last Active', 'buddypress' ); ?></option>
					<option value="newest"><?php _e( 'Newest Registered', 'buddypress' ); ?></option>
					<option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ); ?></option>

					<?php do_action( 'bp_member_blog_order_options' ); ?>

				</select>
			</div>

		<?php endif; ?>
<?php
}
//Groups filter
function tpl_groups_filter() {
?>

		<?php if ( !bp_is_current_action( 'invites' ) ) : ?>

			<div id="groups-order-select" class="last filter">

				<label for="groups-sort-by"><?php _e( 'Order By:', 'buddypress' ); ?></label>
				<select id="groups-sort-by">
					<option value="active"><?php _e( 'Last Active', 'buddypress' ); ?></option>
					<option value="popular"><?php _e( 'Most Members', 'buddypress' ); ?></option>
					<option value="newest"><?php _e( 'Newly Created', 'buddypress' ); ?></option>
					<option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ); ?></option>

					<?php do_action( 'bp_member_group_order_options' ); ?>

				</select>
			</div>

		<?php endif; ?>
<?php
}

?>