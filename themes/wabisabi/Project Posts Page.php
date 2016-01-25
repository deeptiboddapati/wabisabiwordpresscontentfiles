<?php 
/**
 *  Template Name: Project Posts Page
 *
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>


<div class="firstsec">
<h2><?php echo get_the_title(); ?></h2>

<?php $query = new WP_Query( array( 'post_type' => 'project', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while($query->have_posts()): $query->the_post();?>
  <div>
    <h3> <?php the_title(); ?> </h3>
    <?php 
    $frameworks_technology = get_field('frameworks_technology');
    $project_image = get_field('project_image');
    $project_short_description = get_field('project_short_description');
    $project_full_description = get_field('project_full_description');

    ?>
    <p><?php echo $frameworks_technology ?></p>
  </div>



  <div class="projects">
    <div class="row">
      <div  class="col-md-4">
        <!-- if image exists -->
        <?php if(!empty($project_image)) : ?>
        <a href="http://www.billtracker.org"> 
         <image src=' <?php echo $project_image['url'] ?>' />
         </a>
       <?php endif; ?>
     </div>
     <div class="col-md-8">
      <p>
        <?php echo $project_short_description ?>
      </p>
      <p>
        <?php echo $project_full_description ?> 
      </p>
    </div>
  </div>
  

<?php endwhile; ?>


<?php get_footer(); // This fxn gets the footer.php file and renders it ?>