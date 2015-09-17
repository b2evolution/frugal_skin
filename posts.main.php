<?php
/**
 * This is the main/default page template.
 *
 * For a quick explanation of b2evo 2.0 skins, please start here:
 * {@link http://manual.b2evolution.net/Skins_2.0}
 *
 * The main page template is used to display the blog when no specific page template is available
 * to handle the request (based on $disp).
 *
 * @version $Id: $
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

if( version_compare( $app_version, '2.4.1' ) < 0 )
{ // Older 2.x skins work on newer 2.x b2evo versions, but newer 2.x skins may not work on older 2.x b2evo versions.
	die( 'This skin is designed for b2evolution 2.4.1 and above. Please <a href="http://b2evolution.net/downloads/index.html">upgrade your b2evolution</a>.' );
}

// This is the main template; it may be used to display very different things.
// Do inits depending on current $disp:
skin_init( $disp );


// -------------------------- HTML HEADER INCLUDED HERE --------------------------
skin_include( '_html_header.inc.php' );
// Note: You can customize the default HTML header by copying the generic
// /skins/_html_header.inc.php file into the current skin folder.
// -------------------------------- END OF HEADER --------------------------------
?>


<?php
// ------------------------- BODY HEADER INCLUDED HERE --------------------------
skin_include( '_body_header.inc.php' );
// Note: You can customize the default BODY heder by copying the generic
// /skins/_body_header.inc.php file into the current skin folder.
// ------------------------------- END OF FOOTER --------------------------------
?>

<div id="content">

	<div id="contentmain">
    	
		<div class="postarea">		
			
			<?php
				// ------------------------- MESSAGES GENERATED FROM ACTIONS -------------------------
				messages( array(
						'block_start' => '<div class="action_messages">',
						'block_end'   => '</div>',
					) );
				// --------------------------------- END OF MESSAGES ---------------------------------
			?>

			<?php
				// ------------------------- TITLE FOR THE CURRENT REQUEST -------------------------
				request_title( array(
						'title_before'=> '<h2>',
						'title_after' => '</h2>',
						'title_none'  => '',
						'glue'        => ' - ',
						'title_single_disp' => true,
						'format'      => 'htmlbody',
					) );
				// ------------------------------ END OF REQUEST TITLE -----------------------------
			?>
			<?php
			// Display message if no post:
			display_if_empty();

			while( $Item = & mainlist_get_item() )
			{	// For each blog post, do everything below up to the closing curly brace "}"
			?>

					<?php
						$Item->locale_temp_switch(); // Temporarily switch to post locale (useful for multilingual blogs)
						$Item->anchor(); // Anchor for permalinks to refer to.
					?>


					<h1><?php $Item->title(); ?></h1>
					<div class="date">
						
						<div class="dateleft">
							<p><?php
							$Item->author( array(
									'before'    => T_('by').' <strong>',
									'after'     => '</strong>',
								) );
								?> on <span class="time"><?php
							$Item->issue_time( array(
									'time_format' => 'F jS, Y',
								) );
							?>
							</span> 
							<?php $Item->edit_link( array( // Link to backoffice for editing
											'before'    => ' &bull; ',
											'after'     => '',
										) );
									?>
							 <br />in <?php
								$Item->categories( array(
									'before'          => '',
									'after'           => ' ',
									'include_main'    => true,
									'include_other'   => true,
									'include_external'=> true,
									'link_categories' => true,
								) );
								?>
							</p> 
						</div>
							
						<div class="dateright">
							<p><span class="icomment"><?php // Link to comments, trackbacks, etc.:
								$Item->feedback_link( array(
												'link_before' => '',
												'link_after' => '',
												'link_text_zero' => '#',
												'link_text_one' => '#',
												'link_text_more' => '#',
												'link_title' => '#',
												'use_popup' => false,
											) ); ?></span></p> 
						</div>
							
					</div>

					<?php
						// ---------------------- POST CONTENT INCLUDED HERE ----------------------
						skin_include( '_item_content.inc.php', array(
								'image_size'	=>	'fit-400x320',
							) );
						// Note: You can customize the default item feedback by copying the generic
						// /skins/_item_feedback.inc.php file into the current skin folder.
						// -------------------------- END OF POST CONTENT -------------------------
					?>
				
					<div style="clear:both;"></div>

					<div class="postmeta">
						<p><span class="tags"><?php // List all tags attached to this post:
								$Item->tags( array(
										'before' =>         T_('Tags').': ',
										'after' =>          '',
										'separator' =>      ', ',
									) ); ?></span></p>
					</div>


				<?php
				locale_restore_previous();	// Restore previous locale (Blog locale)
			}
			?>

			<?php
				// -------------------- PREV/NEXT PAGE LINKS (POST LIST MODE) --------------------
				mainlist_page_links( array(
						'block_start' => '<p class="center"><strong>',
						'block_end' => '</strong></p>',
					'prev_text' => '&lt;&lt; Previous Page',
					'next_text' => 'Next Page &gt;&gt;',
					) );
				// ------------------------- END OF PREV/NEXT PAGE LINKS -------------------------
			?>

		</div>
		
		
				
	</div>


<?php
// ------------------------- SIDEBAR INCLUDED HERE --------------------------
skin_include( '_sidebar.inc.php' );
// Note: You can customize the default BODY footer by copying the
// _body_footer.inc.php file into the current skin folder.
// ----------------------------- END OF SIDEBAR -----------------------------
?>

</div><!-- End Main  -->

<?php
// ------------------------- BODY FOOTER INCLUDED HERE --------------------------
skin_include( '_body_footer.inc.php' );
// Note: You can customize the default BODY footer by copying the
// _body_footer.inc.php file into the current skin folder.
// ------------------------------- END OF FOOTER --------------------------------
?>

<?php
// ------------------------- HTML FOOTER INCLUDED HERE --------------------------
skin_include( '_html_footer.inc.php' );
// Note: You can customize the default HTML footer by copying the
// _html_footer.inc.php file into the current skin folder.
// ------------------------------- END OF FOOTER --------------------------------
?>
