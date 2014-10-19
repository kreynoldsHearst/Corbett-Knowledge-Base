<div class="text">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php
			echo '<p class="attr">Written by '.ucwords(get_the_author_meta('first_name')).' '.ucwords(get_the_author_meta('last_name')).' | ';
			echo date('d/m/Y', strtotime(get_the_date())).'</p>';
		?>
        <p><?php the_content(); ?></p>
	<?php endwhile; endif; ?>    
    
    <h2>Share this</h2>
	[[plugin??]]
</div>

<div class="image">

    <div class="box">
         <?php get_sidebar('Sidebar 1'); ?> 
    </div>

    <div class="box">
         <h2>Related Articles</h2>
         [[plugin to do this]] 
    </div>

</div>