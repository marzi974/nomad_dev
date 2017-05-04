<?php

/** Template Name: realisations
 */


get_header(); ?>



<section id="expertise" >

	<div class="container row ">


        <div id="expert">
            <?php
            $args = array(
                'post_type' => 'realisation',
                'posts_per_page' => 14,
	            'order'   => 'ASC'

            );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'service' );
                $url = $thumb['0'];
                ?>

                <div class="expertise-item">
                    <a  href=" <?php the_permalink() ?>">
                        <div class="expert_img" style="background-image: url(<?=$url?>); ">


                            <div class="box ">
                                <div class="content">
                                    <p><?php the_title() ?></p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

            <?php endwhile; ?>

        </div>

    </div>

 </section>



<?php get_footer();


