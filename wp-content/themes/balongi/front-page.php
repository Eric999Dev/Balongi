<?php

get_header();
?>

<section id="section-1">
    <div class="wrapper">
        <h2>Logo</h2>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eos quae explicabo non in autem, illum at minus quia veniam voluptatibus blanditiis distinctio expedita voluptatum, saepe nesciunt reprehenderit eaque! Minima.
    </div>

    <div class="video">


        <div id="video-gal">

            <a href="<?php echo the_field('video'); ?>" data-poster="dolphins-in-water-2922672.jpg">
                <img class="icon-player" src="<?php echo get_template_directory_uri(); ?>/img/icones/play-button.svg" alt="">
             
            </a>
        </div>
    </div>

</section>
<section id="section-2">

    <h2>Nos réalisations</h2>
    <article>

        <div id="video-gallery">
            <a href="https://sachinchoolur.github.io/lightGallery/static/videos/video2.mp4" data-poster="<?php echo get_template_directory_uri(); ?>/img/dolphins-in-water-2922672.jpg">
                <img class="icon-player" src="<?php echo get_template_directory_uri(); ?>/img/icones/play-button.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/dolphins-in-water-2922672.jpg" />
            </a>
            <a href="https://vimeo.com/1084537" data-poster="<?php echo get_template_directory_uri(); ?>/img/person-holding-ball-night-lamp-while-sitting-3043798.jpg">
                <img class="icon-player" src="<?php echo get_template_directory_uri(); ?>/img/icones/play-button.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/person-holding-ball-night-lamp-while-sitting-3043798.jpg" />
            </a>
            <a href="https://vimeo.com/1084537" data-poster="video-poster2.jpg">
                <img class="icon-player" src="<?php echo get_template_directory_uri(); ?>/img/icones/play-button.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/photo-of-person-s-open-hands-2258248.jpg" />
            </a>
            <a href="https://vimeo.com/1084537" data-poster="video-poster2.jpg">
                <img class="icon-player" src="<?php echo get_template_directory_uri(); ?>/img/icones/play-button.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/photo-of-person-using-computer-3183152.jpg" />
            </a>
            <a href="https://vimeo.com/1084537" data-poster="video-poster2.jpg">
                <img class="icon-player" src="<?php echo get_template_directory_uri(); ?>/img/icones/play-button.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/photo-of-woman-holding-book-3059655.jpg" />
            </a>
            <a href="https://vimeo.com/1084537" data-poster="video-poster2.jpg">
                <img class="icon-player" src="<?php echo get_template_directory_uri(); ?>/img/icones/play-button.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/smartphone-beside-watch-and-camera-3243090.jpg" />
            </a>

        </div>


    </article>


</section>
<section id="section-3">

    <h2>Nos clients</h2>
    <article></article>


</section>


<?php get_footer(); ?>