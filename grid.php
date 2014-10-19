<?php
/**
 * @package WordPress
 * @subpackage corbett
 template name:grid
 */
get_header(); ?>
<body>

	<div class="body">
    
    	<div class="header"><?php include 'includes/header.php'; ?></div>
            
		<script type="text/javascript">
            var count = 0;
        </script>
        
        <div class="content">
        	
            <div class="text" id="text"></div>
            
            <div class="gallery">
            	<?php
					$posts = get_posts('category=3&orderby=menu_order&order=ASC&numberposts=-1');
					
					$initial = $posts[0]->ID;
					for($i=0; $i<sizeof($posts); $i++)
					{
						if($initial == 0)
							$initial = $posts[$i]->ID;
						
						$photo = get_post_meta($posts[$i]->ID, 'photo', true);
						if(substr($photo, 0, 4) != 'http') $photo = '/'.$photo;
						$thumb = get_post_meta($posts[$i]->ID, 'thumb', true);
						if(substr($thumb, 0, 4) != 'http') $thumb = '/'.$thumb;
						$thumbActive = get_post_meta($posts[$i]->ID, 'thumb-active', true);
						if(substr($thumbActive, 0, 4) != 'http') $thumbActive = '/'.$thumbActive;
						echo '<div id="gridItem'.$posts[$i]->ID.'" class="gridItem'.((($i+1)%6 == 0) ? ' last' : '').'">';
						echo '<div class="gridItemName">'.$posts[$i]->post_title.'</div>';
						echo '<div class="gridItemPhoto">'.$photo.'</div>';
						echo '<div class="gridItemThumb">'.$thumb.'</div>';
						echo '<div class="gridItemThumbActive">'.$thumbActive.'</div>';
						echo '<div class="gridItemAttachment">'.wp_get_attachment_url(get_post_meta($posts[$i]->ID, 'upload_cv', true)).'</div>';
						echo '<div class="gridItemText">';
						echo apply_filters('the_content', $posts[$i]->post_content);
						echo '</div>';
						if($initial == $posts[$i]->ID)
							echo '<img class="gridItem" src="'.$thumbActive.'" width="61" height="61" />';
						else
							echo '<img class="gridItem" src="'.$thumb.'" width="61" height="61" />';
						echo '</div>';
					}
					$remain = 12 - $i;
					for($i=0; $i<$remain; $i++)
					{
						echo '<div class="gridItemEmpty'.((($i+1) == $remain) ? ' last' : '').'"></div>';
					}
				?>
                <div class="viewer">
                	<img id="viewer" src="<?php echo get_post_meta($initial, 'photo', true); ?>" width="377" height="333" />
                </div>
                
                <script type="text/javascript">
				var text = '<h1>'+$('#gridItem<?php echo $initial; ?> .gridItemName').html()+'</h1>';
				
				if($('#gridItem<?php echo $initial; ?> .gridItemAttachment').html() != '')
				{
					text += '<div class="rightButton">';
					text += '<a href="'+$('#gridItem<?php echo $initial; ?> .gridItemAttachment').html()+'" target="_blank">';
					text += '<img src="/wp-content/themes/corbett/images/button-downloadCV.gif" /></a></div>';
				}
				
				text += $('#gridItem<?php echo $initial; ?> .gridItemText').html();
				$('div.text').html(text);
				</script>
            </div>
            
        </div>
        

      

     <?php get_footer(); ?>