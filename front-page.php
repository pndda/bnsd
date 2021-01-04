<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?> 


<!-- START HERO SECTION -->

    <section id="hero" class="hero">
        <div class="hero__logo">
        <? bloginfo(); ?>
        </div>
    </section>

<!-- END HERO SECTION --> 

<!-- START ABOUT SECTION --> 

    <?  $about = get_field('about'); 
        if($about) : 
            $image = $about['img'];
            $content = $about['content'];
    ?> 
        <section id="about" class="about">
                use $image, $content

        </section>

        <? else: // do nothing        
    endif;?> 

<!-- END ABOUT SECTION -->

<!-- START VIDEO SECTION --> 

    <? $video = get_field('video'); 
        if($video) : 
    ?> 
        <section id="move">
        <video class="video">
            <source src="<? echo $video ?> " type="video/mp4" />
         </video>
        <button class="playpause">Play movie > </button>
        </section>

        <? else: // do nothing        
    endif;?> 

<!-- END VIDEO SECTION --> 

<!-- START GRAPHIC SECTION --> 

    <? 
        $graphicwork = new WP_Query(array(
            'post_type' => 'work'
        )); ?> 

        <section>
            
            <? while($graphicwork->have_posts()){
                $graphicwork->the_post(); 
                ?>
                <li><? the_title() ?></li>

            <? }  ?> 

        </section>
        
<!-- END GRAPHIC SECTION --> 

<!-- START MUSIC SECTION + RESET --> 
<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?> 

<? $str = get_field('stream'); 
 ?> 
<? echo $str ?> 


<!-- END MUSIC SECTION --> 











    <? wp_footer(); ?> 
