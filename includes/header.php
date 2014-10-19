<div class="logo">
	<a href="<?php bloginfo('url');?>" title="Go to Homepage"><img src="<?php bloginfo('url');?>/wp-content/themes/corbett/images/corbett-and-co.gif" width="225" height="72" alt="Corbett & Co." /></a>
</div>

<div class="intro">
	Corbett &amp; Co International Construction Lawyers Ltd
</div>

<?php
	$pages = get_pages('parent=0&post_type=page&sort_column=menu_order&exclude=24,624,741&sort_order=ASC');
	$numPages = sizeof($pages);
	if($numPages > 0)
	{
		echo '<div class="navi">';
		$count = 0;
		for($i=0; $i<sizeof($pages); $i++)
		{
			$count++;
			echo '<div class="naviItem"><a href="'.get_page_link($pages[$i]->ID).'" title="Go to '.$pages[$i]->post_title.'"';
			if($count == $numPages)
				echo ' style="border:0px"';
			echo '>';
			echo ucfirst($pages[$i]->post_title).'</a>';
			$subpages = get_pages('child_of='.$pages[$i]->ID.'&post_type=page&sort_column=menu_order&sort_order=ASC');
			if(sizeof($subpages) > 0)
			{
				echo '<div class="dropDown'.(($pages[$i]->ID == 12) ? ' ddSmall' : ' ddLarge').'">';
				for($s=0; $s<sizeof($subpages); $s++)
				{
					echo '<div class="dropDownItem">';
					echo '<a href="'.get_page_link($subpages[$s]->ID).'" title="Go to '.$subpages[$s]->post_title.'"';
					if($count == $numPages)
						echo ' style="border:0px"';
					echo '>';
					echo ucfirst($subpages[$s]->post_title).'</a>';
					echo '</div>';
				}
				echo '</div>';
			}
			echo '</div>';
		}
		echo '</div>';
		echo '<div class="clear_both"></div>';
	}
?>