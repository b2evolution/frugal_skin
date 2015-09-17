<!-- begin sidebar -->

<div id="sidebar">

	<ul id="sidebarwidgeted">

	<?php
		// ------------------------- "Sidebar" CONTAINER EMBEDDED HERE --------------------------
		// Display container contents:
		skin_container( NT_('Sidebar'), array(
				// The following (optional) params will be used as defaults for widgets included in this container:
				// This will enclose each widget in a block:
				'block_start' => '<li class="$wi_class$">',
				'block_end' => '</li>',
				// This will enclose the title of each widget:
				'block_title_start' => '<h2 class="sidebartitle">',
				'block_title_end' => '</h2>',
				'block_display_title' => true,
				// If a widget displays a list, this will enclose that list:
				'list_start' => '<ul>',
				'list_end' => '</ul>',
				// This will enclose each item in a list:
				'item_start' => '<li>',
				'item_end' => '</li>',
				// This will enclose sub-lists in a list:
				'group_start' => '<ul>',
				'group_end' => '</ul>',
				// This will enclose (foot)notes:
				'notes_start' => '<div class="notes">',
				'notes_end' => '</div>',
				// Search block:
				'disp_search_options' => false,
			) );
		// ----------------------------- END OF "Sidebar" CONTAINER -----------------------------
	?>

	</ul>
			
</div>

<!-- end sidebar -->
