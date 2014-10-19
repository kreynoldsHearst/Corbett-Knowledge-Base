<?php
/**
 * @package WordPress
 * @subpackage corbett
 template name:home
 */
get_header(); ?>
<body>

	<div class="body">
    
    	<div class="header"><?php include 'includes/header.php'; ?></div>
        
        <div class="content">
        	
            <div class="text">
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php echo apply_filters('the_content', the_content()); ?>
                <?php endwhile; endif; ?>   
            </div>
            
            <?php
				// Banners ////////////////////////////////////////////////////
				$keepGoing = true;
				$bannerNum = 0;
				$banners = array();
				while($keepGoing)
				{
					$bannerNum++;
					if(get_post_meta($post->ID, 'banner'.$bannerNum.'Quote', true) == '')
					{
						$keepGoing = false;
					}
					else
					{
						$banners[] = array('image' => get_post_meta($post->ID, 'banner'.$bannerNum.'Image', true),
										  'quote' => get_post_meta($post->ID, 'banner'.$bannerNum.'Quote', true),
										  'attr' => get_post_meta($post->ID, 'banner'.$bannerNum.'Attr', true));
					}
				}
			?>
            
            <script type="text/javascript">
				var count = <?php echo sizeof($banners); ?>;
			</script>
            
            <div class="banner">
            	<div class="bannerControls">
                	<img class="controlPrev" src="<?php bloginfo('url');?>/wp-content/themes/corbett/images/control-prev.gif" />
                    <div class="bannerCount"></div>
                    <img class="controlNext" src="<?php bloginfo('url');?>/wp-content/themes/corbett/images/control-next.gif" />
                </div>
                <?php
					for($i=0; $i<sizeof($banners); $i++)
					{
						echo '<div class="bannerItem" id="banner'.($i+1).'">';
						echo '<div class="bannerQuote">'.$banners[$i]['quote'].'</div>';
						echo '<div class="bannerAttr">'.$banners[$i]['attr'].'</div>';
						echo '<div class="bannerImage"><img src="'.$banners[$i]['image'].'" width="385" height="379" /></div>';
                		echo '</div>';
					}
				?>
            </div>
            
        </div>
        
      

     <?php get_footer(); ?>