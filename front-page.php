<?php get_header(); ?>


<div class="mt-32 mb-24 flex flex-wrap leading-none items-center justify-left">
    <h1 class="fade-1 w-full  sm:text-4xl md:text-5xl tracking-wide font-munro load-hidden">hello world!</h1>
    <br>
    <h1 class="header-2 w-full  sm:text-4xl md:text-5xl tracking-wide font-munro load-hidden">i'm kerrin.</h1>
    <h2 class="header-3 h-48 load-hidden">i am <span id="type">a UX designer</span></h2>

</div>

<div id="about" class="about load-hidden fade-1 flex flex-wrap my-24 items-center">

    <section class="sm:w-full md:w-1/2">
        <p>


            I'm a User Experience Designer and Researcher, mainly, but I'm interested in all things related to digital
            design and code. I studied Interactive Multimedia, the perfect fusion
            of design and technology, and the program has left me with an unremitting desire to create. I've since
            returned to my alma mater as a professor of interaction design and web development. </p>

        <p> I'm a certified Web Accessibility Specialist with <a
                href="https://www.credly.com/badges/bbc87ad0-6faa-402d-8138-66c4c86ac345/linked_in?t=ry057s"
                target="_blank">IAAP</a>
            and UX Certified (Research
            Specialization) <a href="https://www.nngroup.com/ux-certification/people/" target="_blank">with Nielsen
                Norman Group</a>, both which represent my commitment to life long learning.
            I work full time in the digital agency world, but I'm available for select freelance projects or volunteer
            opportunities. I’m eager to make my small dent in the universe.


        </p>
    </section>
    <section class="sm:hidden md:block md:w-1/2 p-12"><img class="shadow-md" style="max-height:600px;"
            src="<?php echo get_template_directory_uri() ?>/assets/imgs/Kerrin.jpg"></section>
</div>

<div class="fade-1 flex flex-wrap my-24 ">


    <h2>work in the wild</h2>
    <p class="mb-10">An archive of many of the projects I've touched living out there on the internet. <a
            href="/contact/">Contact me</a> if you're interesting in more in-depth case studies.</p>
    <ul class="list-reset list-decimal">
        <?php
      $query = new WP_Query( array( 'category_name' => 'work', 'posts_per_page' => 4 ) );
      while ($query->have_posts() ) : $query -> the_post();
        $title = get_the_title();
        $thumbnail = get_the_post_thumbnail_url();
        $external = get_post_meta($post->ID, "external_link", true);
        ?><li class=" py-4">
            <h3 class="font-normal leading-normal pb-3"><?php echo get_post_meta($post->ID, "skills", true); ?> for <a
                    href="<?php if($external) { echo $external;} else { the_permalink();} ?>"
                    <?php if($external) { echo " target='_blank' ";}?>><?php echo $title ?></a>
            </h3>
        </li>

        <?php
        endwhile;
        wp_reset_postdata();
  ?>
    </ul>

</div>
<button class="text-center w-full"><a href="/category/work/">See More Work</a></button>
</div>

<div class="fade-1 my-24 ">
    <h2>writing</h2>
    <div class="flex flex-wrap py-4">
        <ul class="list-reset">
            <?php
      $query = new WP_Query( array( 'category_name' => 'writing', 'posts_per_page' => 4  ) );
      while ($query->have_posts() ) : $query -> the_post();
        $title = get_the_title();
        $date = get_the_date();
        $external = get_post_meta($post->ID, "external_link", true);

        ?>

            <h3 class="">
                <li class="py-4"><a href="<?php if($external) { echo $external;} else { the_permalink();} ?>">
                        <?php echo $title ?></a><time class="font-normal whitespace-no-wrap"> <?php echo $date ?>
                    </time>
                </li>
            </h3>


            <?php
        endwhile;
        wp_reset_postdata();
  ?>


        </ul>
    </div>

    <button class="text-center mt-4 w-full"><a href="/category/writing/">See More Writing</a></button>
</div>




</div>


<?php get_footer(); ?>