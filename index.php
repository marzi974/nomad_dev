<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section id="presentation">

    <div class="row flex">
        <div class=" medium-5 columns cadre" >
            <p class="titre">Nomad construction</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>

        <div class=" medium-7 columns" >
            <p class="contenu">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa nihil quam voluptatibus. Ad architecto asperiores assumenda atque debitis dicta Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa nihil quam voluptatibus. Ad architecto asperiores assumenda atque debitis dicta Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa nihil quam voluptatibus. Ad architecto asperiores assumenda atque debitis dicta</p>
        </div>
        <a href="/" ><span><img src="<?php echo get_template_directory_uri();?>/img/fleche.svg" alt=""/></span></a>
    </div>
</section>


<section id="expertise" >

	<div class="container row ">
        <div class="text-center">
            <h2>Notre expertise</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, consequatur dicta ea eveniet fugit ipsum maiores modi.</p>

        </div>

        <div id="expert">
            <?php
            $args = array(
                'post_type' => 'expertise',
                'posts_per_page' => 7,
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


    <section id="actu">

        <div class="container">
            <div class="text-center">
                <h2>Conseils & actualités</h2>
            </div>

        <div class="flex">

        <?php
        global $post;
        $args = array( 'post_type' => 'post', 'posts_per_page' => 2 );
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

            <div class="demande">
                <div>
                    <p>Demande de soumission</p>
                    <p>Contactez nous et vous recevrez une sousmission en 48h</p>
                </div>
                <a href="/soumission"><span class="fleche_blanche"><img src="<?php echo get_template_directory_uri();?>/img/fleche_blanche.svg" alt=""/></span></a>
            </div>
        </div>
        </div>
    </section>

<?php get_footer();


