<?php

/**
 * BuddyPress - Users Messages
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

switch ( bp_current_action() ) :

	// Inbox/Sentbox
	case 'inbox'   :
	case 'sentbox' :
		do_action( 'bp_before_member_messages_content' ); ?>

		<div class="messages" role="main">
			<?php bp_get_template_part( 'members/single/messages/messages-loop' ); ?>
		</div><!-- .messages -->

		<?php do_action( 'bp_after_member_messages_content' );
		break;

	// Single Message View
	case 'view' :
		bp_get_template_part( 'members/single/messages/single' );
		break;

	// Compose
	case 'compose' :
		bp_get_template_part( 'members/single/messages/compose' );
		break;

	// Sitewide Notices
	case 'notices' :
		do_action( 'bp_before_member_messages_content' ); ?>

		<div class="messages" role="main">
			<?php bp_get_template_part( 'members/single/messages/notices-loop' );; ?>
		</div><!-- .messages -->

		<?php do_action( 'bp_after_member_messages_content' );
		break;

	// Any other
	default :
		bp_get_template_part( 'members/single/plugins' );
		break;
endswitch;