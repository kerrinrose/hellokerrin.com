<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
    $title = get_the_title();
    $date = get_the_date();
    $thumbnail = get_the_post_thumbnail_url();
 $cat = has_category("writing");
  ?>

<?php if($thumbnail) { ?><img class=" w-full" src="<?php echo $thumbnail ?>"><?php } ?><br>

<h1 class="fade-1 sm:m-1 md:m-6 sm:text-3xl md:text-4xl leading-tight font-munro"><?php echo $title ?></h1>

<div class="fade-1 content">
  <?php
  the_content(); // displays whatever you wrote in the wordpress editor
  endwhile; endif; //ends the loop
 ?>


<?php if ($cat) { ?>
<div id="disqus_thread" class="p-6"></div>
	
	  <?php }; ?>   

	</div>

<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://kerrinmclaughlin.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
	

<?php

get_footer(); ?>