<div id="wrap">

<div id="header">

	<div class="headerleft">
		<?php
			// ------------------------- "Header" CONTAINER EMBEDDED HERE --------------------------
			// Display container and contents:
			skin_container( NT_('Header'), array(
					// The following params will be used as defaults for widgets included in this container:
					'block_start' => '<div class="$wi_class$">',
					'block_end' => '</div>',
					'block_title_start' => '<h1>',
					'block_title_end' => '</h1>',
				) );
			// ----------------------------- END OF "Header" CONTAINER -----------------------------
		?>
	</div>
		
	<div class="headerright">
				<?php if ( true /* change to false to hide the blog list */ ) { ?>
				<div class="blog_list">
				<?php
				  // START OF BLOG LIST
				  skin_widget( array(
						'widget' => 'colls_list_public',
						'block_start' => '',
						'block_end' => '',
						'block_display_title' => false,
						'list_start' => '',
						'list_end' => '',
						'item_start' => '',
						'item_end' => '',
						'item_selected_start' => '<span class="selected">',
						'item_selected_end' => '</span>',
					  ) );
				?>
				</div>
				<?php } ?>
        <ul id="headerwidgeted">
       		<?php
			// Display container and contents:
			skin_container( NT_('Page Top'), array(
					// The following params will be used as defaults for widgets included in this container:
					'block_start' => '',
					'block_end' => '',
					'block_display_title' => false,
					'list_start' => '',
					'list_end' => '',
					'item_start' => '<li>',
					'item_end' => '</li>',
				) );
		?>

        </ul>
	</div>

</div>

<div id="navbar">

	<div id="navbarleft">
	
	<ul id="nav">
		<?php
			// Display container and contents:
			skin_container( NT_('Menu'), array(
					// The following params will be used as defaults for widgets included in this container:
					'block_start' => '',
					'block_end' => '',
					'block_display_title' => false,
					'list_start' => '',
					'list_end' => '',
					'item_start' => '<li class="$wi_class$ page_item">',
					'item_selected_start' => '<li class="$wi_class$ page_item current_page_item">',
					'item_selected_end' => '</li>',
					'link_selected_class' => 'current_page_item',
					'item_end' => '</li>',
				) );
		?>
	</ul>
	
	</div>
	
	<div id="navbarright">
	<?php
	if( $Blog->get_setting( 'feed_content' ) != 'none' )
	{ // auto-discovery urls
	?>
		<img src="img/rss.gif" alt="Subscribe to this blog" title="Subscribe to this blog"/> <strong>Subscribe:</strong> <a href="<?php $Blog->disp( 'rss2_url', 'raw' ) ?>">RSS</a> | <a href="<?php $Blog->disp( 'atom_url', 'raw' ) ?>">Atom</a>
		<?php
	}
	?>

		</div>
	
</div>

<div style="clear:both;"></div>
