<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?> 


<!-- START HERO SECTION -->

    <section id="hero" class="header">
        <div class="container">
            <div class="row">
                <h1> <? bloginfo(); ?></h1>
            </div>
            <!--video-->
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
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="<? echo $image ?>" alt="" class="about__img">
                </div>
                <div class="col-lg-7">
                    <? echo $content ?>
                </div>
            </div>
        </div>
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

        <section class="video-work">
        <div class="container">
            <div class="row">
            <video class="video">
            <source src="<? echo $video ?> " type="video/mp4" />
         </video>
        <button class="playpause">BNSD MOVE > </button>
            </div>
        </div>
    </section>

        <? else: // do nothing        
    endif;?> 

<!-- END VIDEO SECTION --> 

<!-- START GRAPHIC SECTION --> 

    <? 
        $graphicwork = new WP_Query(array(
            'post_type' => 'work'
        )); ?> 

<section class="graphic">
        <div class="container">
            <h2>Graphic work</h2>
            <div class="row">
                <div class="graphic__wrapper">
            
            <? while($graphicwork->have_posts()){
                $graphicwork->the_post(); 
                ?>
                
                <a href="#" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="graphic__work" style="background-image:url('<? the_post_thumbnail_url() ?>') ">  </div>
                <? the_title(); ?>
                </a>
                                    <!-- Modal -->
                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="<? the_post_thumbnail_url() ?>" alt="artwork" class="modal__img">
                                </div>
                                <div class="col-lg-6">
                                    <div class="art__info">
                                        <? the_content() ?> 
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                            

            <? }  ?> 
            </div>
            </div>
        </div>
        </section>

        
<!-- END GRAPHIC SECTION --> 

<!-- START MUSIC SECTION + RESET --> 
<?php get_header(); 
    while(have_posts()){
        the_post();
  }
?> 

<? $str = get_field('stream'); 
 
 if($str) : ?> 

<section class="music">
        <div class="container">
            <div class="row">
            <? echo $str ?> 
            </div>
        </div>
    </section>


<? else: // do nothing        
    endif;?> 


<!-- END MUSIC SECTION --> 











    <? wp_footer(); ?> 
