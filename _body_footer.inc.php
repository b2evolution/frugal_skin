<!-- begin footer -->

<div style="clear:both;"></div>

<div id="footer">

	<p>
		<?php
		// Display a link to contact the owner of this blog (if owner accepts messages):
		$Blog->contact_link( array(
				'before'      => '',
				'after'       => '. ',
				'text'   => T_('Contact'),
				'title'  => T_('Send a message to the owner of this blog...'),
			) );
		?>

		<?php
		// Display footer text (text can be edited in Blog Settings):
		$Blog->footer_text( array(
				'before'      => '',
				'after'       => '. ',
			) );
		?>

		<?php
		// Display additional credits:
		// If you can add your own credits without removing the defaults, you'll be very cool :))
		// Please leave this at the bottom of the page to make sure your blog gets listed on b2evolution.net
		credits( array(
				'list_start'  => ' ',
				'list_end'    => '.<br />',
				'separator'   => ' / ',
				'item_start'  => '',
				'item_end'    => '',
			) );
		?>

		 &bull; <a href="http://frugaltheme.com/" >Frugal Theme</a> by <a href="http://erichamm.net" >Eric Hamm</a> &bull; Converted to <a href="http://www.b2evolution.net/">b2evolution</a> by <a href="http://www.leeturner.org/">Lee Turner</a>

	</p>


</div>

</div> <!-- Closes Wrap -->

