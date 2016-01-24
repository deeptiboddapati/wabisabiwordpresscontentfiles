<?php
/**
 * Template Name: Post Page
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>

<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
?>

<?php while ( have_posts() ) : the_post(); 
				// If we have a post to show, start a loop that will display it
?>

<div>
	<h3> <?php the_title(); ?> </h3>
	<?php 
	$award_name = get_field('award_name');
	$award_picture = get_field('award_picture');
	$award_description = get_field('award_description');
	?>

</div>
<div class="projects">
	<div class="row">
		<div  class="col-md-4">
			<!-- if image exists -->
			<?php if(!empty($award_picture)) : ?>
			<a href="#"> 
				<image src=' <?php echo $award_picture['url'] ?>' />
				</a>
			<?php endif; ?>
		</div>
		<div class="col-md-8">
			<p>
				<?php echo $award_description ?>
			</p>
		</div>
	</div>
	<div class="meta clearfix">
	<div class="category"><?php echo get_the_category_list(); // Display the categories this post belongs to, as links ?></div>
	<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
</div><!-- Meta -->
</div>		


</article>

<?php endwhile; // OK, let's stop the post loop once we've displayed it ?>

<?php
					// If comments are open or we have at least one comment, load up the default comment template provided by Wordpress
if ( comments_open() || '0' != get_comments_number() )
	comments_template( '', true );
?>


<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>

	<article class="post error">
		<h1 class="404">Nothing has been posted like that yet</h1>
	</article>

<?php endif; // OK, I think that takes care of both scenarios (having a post or not having a post to show) ?>


<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
