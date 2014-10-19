<?php
/**
 * @package WordPress
 * @subpackage corbett
 template name:knowledgebase
 */
get_header(); ?>
<body>
<!-- Knowledge Base -->

	<div class="body">
    
    	<div class="header"><?php include 'includes/header.php'; ?></div>
            
		<script type="text/javascript">
            var count = 0;
        </script>
        
        <div class="content">
        	
            <div class="text">
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
                
                <?php
                	$posts = get_posts('category=11&orderby=post_date&order=DESC&numberposts=-1');
					
					for($i=0; $i<sizeof($posts); $i++)
					{
						echo '<div class="knowledgePost">';
						echo '<h2><a href="'.get_permalink($posts[$i]->ID).'">'.$posts[$i]->post_title.'</a></h2>';
						$author = get_userdata($posts[$i]->post_author);
						echo '<p class="attr">Written by '.ucwords($author->first_name).' '.ucwords($author->last_name).' | ';
						echo date('d/m/Y', strtotime($posts[$i]->post_date)).'</p>';
						echo '<p>'.substr($posts[$i]->post_content, 0, 200).'...</p>';
						echo '<a class="button" href="'.get_permalink($posts[$i]->ID).'">Read Full Article</a>';
						echo '</div>';
                    }
                   ?>
             </div>
            
            <div class="image">
            
            	<div class="box boxGreen">
                	<h2>Sign up to our Newsletters</h2>
                    [[plugin goes here]]
                </div>
            
            	<div class="box">
                     <?php get_sidebar('Sidebar 1'); ?> 
                </div>
            
            	<div class="box">
                     <h2>Share this</h2>
                     [[plugin??]] 
                </div>
            
            </div>
            
        </div>
     <?php endwhile; endif; ?>    

      

     <?php get_footer(); ?>