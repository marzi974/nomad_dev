<?php

get_header();


?>


<section  id="service">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

        <div class="container">

            <h1 class="titre"><?php the_title(); ?></h1>

            <div class="row ">
                <?php
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),"full" );
                $url = $thumb['0'];
                ?>
                <div class="large-6 medium-12 columns image " style="background-image: url(<?=$url?>); ">


                </div>

                <div class="large-6 medium-12 columns caracteristique">

                    <?php the_content(); ?>

                </div>


            </div>

        </div>

    <?php endwhile; endif; ?>

</section>


<?php get_footer(); ?>