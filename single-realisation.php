<?php

get_header();


?>


<section  id="expert_content">

    <div id="leftHalf"></div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

        <div class="container">


            <div class="row ">
                <?php
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),"full" );
                $url = $thumb['0'];
                ?>
                <div class="large-6 medium-12 columns image " style="background-image: url(<?=$url?>); ">


                </div>

                <div class="large-6 medium-12 columns desc_expert">

                    <?php the_content(); ?>

                </div>


            </div>

        </div>

    <?php endwhile; endif; ?>

</section>

<section id="bandeau_contact">

    <div>
        <p class="titre">Demande de soumission</p>
        <p>Contactez-nous et vous recevrez une soumission sous 48h</p>
        <span class="fleche_blanche"><img src="<?php echo get_template_directory_uri();?>/img/fleche_blanche.svg" alt=""/></span>
    </div>

</section>


<section id="realisation" >
    <div class="text-center">
        <h2>Quelques une de nos expertises</h2>
    </div>
    <div class="container clearfix">
    <?php
    $args = array(
        'post_type' => 'expertise',
        'posts_per_page' => 4,
        'order'   => 'DESC'

    );
    $loop = new WP_Query( $args );
    $i=1;
    while ( $loop->have_posts() ) : $loop->the_post();
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full' );
        $url = $thumb['0'];
        ?>

        <div class="realisation-item">
            <a  href=" <?php the_permalink() ?>">
                <div class="expert_img" style="background-image: url(<?=$url?>); ">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/img_real_<?php echo $i; ?>.png" alt=""/>

                </div>
            </a>
        </div>

    <?php $i++ ;endwhile; ?>

        <div>
            <div class="box ">
                <div class="content">
                    <p>Voir toutes les réalisations</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>