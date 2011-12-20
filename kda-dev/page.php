<?php
/*
Template Name: page
*/
?>
<?php get_header(); ?>
		<div id="content">
                    <div class="page_content">
				<a name="top"></a>
					<?php if (have_posts()) : ?>
						
						<?php while (have_posts()) : the_post(); ?>
						
						<div class="page">
						<h2 class="pageTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<div class="pagfeContent contentBox"><?php the_content('(Read the rest of this entry...)'); ?></div>
						</div> <!-- Closes Post -->
						
						<?php endwhile; ?>
						
						<?php else : ?>
						
						<div class="post">
						<h2 class="center">Not Found</h2>
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<div class="search">
						<?php include (TEMPLATEPATH . "/searchform.php"); ?>
						</div> <!-- Closes Search -->
						</div> <!-- Closes Post -->
						
						<?php endif; ?>
                      
                    </div>
                    <div class="page-sidebar">
           				<?php if (function_exists('dynamic_sidebar')) {dynamic_sidebar('page-sidebar');} ?>
                    </div>
                    
		
		
		</div>
		
		<?php get_footer(); ?>
