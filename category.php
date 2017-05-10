<?php
/** Template Name: blog
 */

get_header();
$categories = get_the_category();
foreach( $categories as $category ) {
}
?>





    <section id="actu" class="container">


    <div class="flex">


            <?php
            global $post;


            $args = array( 'post_type' => 'post','category_name' => $category->slug, 'posts_per_page' => -1 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();

                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                $post_categories = get_the_category();

                foreach($post_categories as $cat){} ?>


                <div class="news">
                    <span class="cat <?php echo $cat->slug;?>"></span>
                    <?php the_post_thumbnail('large') ;?>
                    <div>
                        <p><?php the_title() ?></p>
                        <span class="date"><?php echo get_the_date('j M');?></span>
                        <p><?php echo get_excerpt(150) ?></p>
                    </div>
                </div>

            <?php endwhile; ?>



        </div>

    </section>

<?php include "bandeau.php" ?>

<?php get_footer();


