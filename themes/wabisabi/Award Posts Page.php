<?php 
/**
 *  Template Name: Award Posts Page
 *
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>




<div class="firstsec">
  <h2><?php echo get_the_title(); ?></h2> 

  <?php $query = new WP_Query( array( 'post_type' => 'award', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

  <?php while($query->have_posts()): $query->the_post();?>
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
</div>
<?php endwhile; ?>

</div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>