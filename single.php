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
        	
            <?php
			if (in_category('11'))
				include (TEMPLATEPATH . '/single-knowledge.php');
			else
				include (TEMPLATEPATH . '/single-article.php');
			?>

      

     <?php get_footer(); ?>