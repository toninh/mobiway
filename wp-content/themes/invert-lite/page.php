<?php 
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 */
get_header(); ?>
<?php global $invert_shortname; ?>

<div class="main-wrapper-item"> 
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>

	<div class="bread-title-holder">
		<div class="bread-title-bg-image full-bg-breadimage-fixed"></div>
		<div class="container">
			<div class="row-fluid">
				<div class="container_inner clearfix">
					<h1 class="title">
						<?php the_title(); ?>
					</h1>
					<?php
						if(sketch_get_option($invert_shortname."_hide_bread") == 'true') {
							if ((class_exists('invert_breadcrumb_class'))) {$invert_breadcumb->custom_breadcrumb();}
					    }
					?>
				</div>
			</div>
		</div>
	</div>
		
	<div class="page-content">
		<div class="container post-wrap">
			<div class="row-fluid">
				<div id="content" class="span8">
					<div class="post" id="post-<?php the_ID(); ?>">
						<div class="skepost">
							<?php the_content(); ?>
							<?php wp_link_pages(__('<p><strong>Pages:</strong> ','invert'), '</p>', __('number','invert')); ?>
						</div>
						<!-- skepost --> 
					</div>
					
					<!-- post -->
					<div class="clearfix"></div>
					<div class="comments-template">
						<?php comments_template( '', true ); ?>
					</div>
					<?php endwhile; ?>
					<?php else :  ?>
					<div class="post">
						<h2><?php _e('Page Does Not Exist','invert'); ?></h2>
					</div>
					<?php endif; ?>
					<div class="clearfix"></div>
				</div>
				<!-- content -->
			
				<!-- Sidebar -->
				<div id="sidebar" class="span3">
					<?php get_sidebar(); ?>
				</div>
				<div class="clearfix"></div>
				<!-- Sidebar --> 
			</div>
		</div>
	</div>
	
</div>
<?php get_footer(); ?>