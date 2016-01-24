<?php 
/**
 *  Template Name: homeindex
 *
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>
<?php
$sectiononelabel = get_field('section_one_label');
$sectiontwolabel = get_field('section_two_label');
?>

<div>
        <h3><?php echo get_the_title(); ?></h3>
        <p> <?php echo get_post_field('post_content') ?> </p>
      </div>

<div class="firstsec"><h2><?php echo $sectiononelabel ?></h2> </div>


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
</div>
<?php endwhile; ?>



<div class="firstsec">
  <h2><?php echo $sectiontwolabel ?></h2> </div>
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


<?php get_footer(); // This fxn gets the footer.php file and renders it ?>