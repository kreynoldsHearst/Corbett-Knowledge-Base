<?php
/**
 * @package WordPress
 * @subpackage corbett
 */
get_header(); ?>
<body>

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
             </div>
            
            <div class="image">
            <?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  the_post_thumbnail();
} 
?>
            </div>
            
        </div>
     <?php endwhile; endif; ?>    

      

     <?php get_footer(); ?>