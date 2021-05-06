<?php get_header(); ?>
<h1 class="fade-1 w-full  pt-6 sm:text-4xl md:text-4xl tracking-wide font-munro load-hidden">all <?php single_cat_title();?></h1>
<ul class=" fade-1 list-reset">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
  
  $title = get_the_title();
  $date = get_the_date();
  $thumbnail = get_the_post_thumbnail_url();
  $cat = single_cat_title(" ", false);
  $external = get_post_meta($post->ID, "external_link", true);
  $object_pos = get_post_meta($post->ID, "object_pos", true);

  ?>

<li class=" py-4">
<?php if($thumbnail) { ?><img class="h-48 xl:h-64 w-full <?php echo $object_pos ?>" src="<?php echo $thumbnail ?>"><?php } ?><br>

<?php if ($cat == " writing") { ?>

<a href="<?php the_permalink(); ?>"><?php echo $title . $cat ?></a> <time class="pl-4 font-normal"> <?php echo  $date  ?> </time> 
<?php }; ?>

<?php if ($cat == " work") { ?>

  <h3 class="font-normal leading-normal pb-3"><?php echo get_post_meta($post->ID, "skills", true); ?> for <a href="<?php if($external) { echo $external;} else { the_permalink();} ?>"><?php echo $title ?></a></h3>

  <?php }; ?>


<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</li>
 <?php endwhile; endif; //ends the loop
 ?>
 </ul>
<?php get_footer(); ?>