<div class="text">
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
             </div>
            
            <div class="image">
<img src="<?php $key="photo"; echo get_post_meta($post->ID, $key, true); ?>" alt="<?php the_title(); ?>" />
            </div>
            
        </div>
     <?php endwhile; endif; ?>    