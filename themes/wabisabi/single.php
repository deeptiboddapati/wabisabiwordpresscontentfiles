<?php
/**
 * The template for displaying any single post.
 *
 */
get_header(); // This fxn gets the header.php file and renders it ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			?>

			<?php while ( have_posts() ) : the_post(); 
				// If we have a post to show, start a loop that will display it
			?>


			<div class="row">
				<div class="col-md-12">
					<h2>
						<?php the_title(); // Display the title of the post ?>
					</h2>
					<div class="post-meta">
					<?php the_time('m.d.Y'); // Display the time it was published ?>
					<?php // the_author(); Uncomment this and it will display the post author ?>

				</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-4">
					<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
				</div>
				<div class="col-md-8">
					<h3 class="text-left">
						h3. Lorem ipsum dolor sit amet.
					</h3>
					<p>
						<?php the_content(); 
							// This call the main content of the post, the stuff in the main text box while composing.
							// This will wrap everything in p tags
						?>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3>
						h3. Lorem ipsum dolor sit amet.
					</h3>
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
					<h3>
						h3. Lorem ipsum dolor sit amet.
					</h3>
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
					<h3>
						h3. Lorem ipsum dolor sit amet.
					</h3>
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
					<div class="row">
						<div class="col-md-12">
							<?php echo get_the_category_list("|") ?>
							<br />
							<?php echo get_the_tag_list("", "|") ?>
							
						</div>
					</div>

							<?php
					// If comments are open or we have at least one comment, load up the default comment template provided by Wordpress
							if ( comments_open() || '0' != get_comments_number() )
								comments_template( '/comments.php', true );
							?>
					
				</div>
			</div>

		<?php endwhile; // OK, let's stop the post loop once we've displayed it ?>
	</div>
</div>
</div>




<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>

	<article class="post error">
		<h1 class="404">Nothing has been posted like that yet</h1>
	</article>

<?php endif; // OK, I think that takes care of both scenarios (having a post or not having a post to show) ?>

</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>