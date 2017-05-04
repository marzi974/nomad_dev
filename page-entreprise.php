<?php

/** Template Name: entreprise
 */

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

                    <img src="<?php echo get_template_directory_uri();?>/img/fleche_blanche.svg" alt=""/>
                </div>

                <div class="large-6 medium-12 columns ">

                    <h3>À propos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet diam et congue laoreet. Mauris justo neque, porttitor eu sollicitudin aliquam, vehicula a sem. Integer sit amet urna sit amet tellus blandit cursus. Integer in neque tristique, pellentesque mauris sed, lacinia nibh. Morbi eleifend lorem quis libero finibus, ac lobortis.. Lorem ipsum dolor sit amet consectetur adispiscing elit</p>
                    <h3>Lorem ipsum dolor sit amet,</h3>
                    <p>consectetur adipiscing elit. In tristique at quam a convallis. Nunc non porttitor nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras gravida ligula sed eros elementum venenatis. Integer eget condimentum nisl. Nullam faucibus dignissim sem, in convallis velit euismod tempus.Orci varius natoque penatibus et magnis dis elit a aliquam. Curabitur in eleifend mi. Duis luctus purus vel magna sollicitudin, mollis bibendum dolor dignissim.</p>
                    <ul>
                        <li>Nunc non porttitor nulla,</li>
                        <li>Orci varius natoque penatibus et magnis dis</li>
                        <li>Orci varius natoque penatibus et magnis dis</li>
                    </ul>

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