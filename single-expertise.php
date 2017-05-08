<?php

get_header();


?>


<section  class="section_content">

    <div class="leftHalf"></div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

        <div class="container">


            <div class="row ">
                <?php
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),"full" );
                $url = $thumb['0'];
                ?>
                <div class="large-6 medium-12 columns image " style="background-image: url(<?=$url?>); ">


                </div>

                <div class="large-6 medium-12 columns desc_content">

                    <?php the_content(); ?>

                </div>


            </div>

        </div>

    <?php endwhile; endif; ?>

</section>

<?php include "bandeau.php" ?>

<section id="realisation" >
    <div class="text-center">
        <h2>Quelques une de nos réalisations</h2>
    </div>
    <div class="container clearfix">
    <?php
    $args = array(
        'post_type' => 'realisation',
        'posts_per_page' => 4,
        'order'   => 'ASC'

    );
    $loop = new WP_Query( $args );
    $i=1;
    while ( $loop->have_posts() ) : $loop->the_post();
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'service' );
        $url = $thumb['0'];
        ?>

        <div class="realisation-item">
            <!--a  href=" <?php the_permalink() ?>"-->
                <div class="expert_img" style="background-image: url(<?=$url?>); ">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/img_real_<?php echo $i; ?>.png" alt=""/>

                </div>
            <!--/a-->
        </div>

    <?php $i++ ;endwhile; ?>

        <div>
            <a href="/realisations">
            <div class="box ">
                <div class="content">
                    <p>Voir toutes les réalisations</p>
                </div>
                <div class="fleche_blanche"><img src="<?php echo get_template_directory_uri(); ?>/img/fleche_verte.svg" alt=""></div>
            </div>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>