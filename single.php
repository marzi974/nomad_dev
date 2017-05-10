<?php

get_header(); ?>


    <section  id="news">



        <div class="row ">
            <div class="large-8 medium-8 columns article">



                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                    $post_categories = get_the_category();

                    foreach($post_categories as $cat){} ?>
                    <div class="flex">
                        <a href="#" onclick="history.back(-1)" class="bouton_bleu" ><img class="back" width="8" src="<?php bloginfo('template_url'); ?>/img/right-arrow_black.svg" alt=""/>Retour</a>
                        <?php previous_post_link( '%link', 'Nouvelle précédente', TRUE ); ?>
                        <?php next_post_link( '%link', 'Nouvelle suivante', TRUE ); ?>
                        <a href="http://www.facebook.com/share.php?u=<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>" target="_blank">Partager </a>
                    </div>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <span class="cat <?php echo $cat->slug;?>"> <?php echo $cat->name;?> </span>
                        <div><?php the_post_thumbnail('large') ;?></div>
                        <h3 class="contenu_article"> <?php the_title(); ?></h3>
                        <span class="date"><?php echo get_the_date('j M');?></span
                        <p class="contenu_article"> <?php the_content(); ?></p>
                        <div class="clearfix bas_article"></div>


                    </article>
                    <div class="flex">
                        <a href="#" onclick="history.back(-1)" class="bouton_bleu" ><img class="back" width="8" src="<?php bloginfo('template_url'); ?>/img/right-arrow_black.svg" alt=""/>Retour</a>
                        <?php previous_post_link( '%link', 'Nouvelle précédente', TRUE ); ?>
                        <?php next_post_link( '%link', 'Nouvelle suivante', TRUE ); ?>
                        <a class="face_share" href="http://www.facebook.com/share.php?u=<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>" target="_blank">Partager</a>
                    </div>
                <?php endwhile; endif; ?>

            </div>

            <div class="large-4 medium-4 columns select_cat">

                <div>
                    <h3>Dernières nouvelles</h3>
                    <?php
                    $args = array(
                        'order' => 'ASC',
                        'post_type' => 'post',
                        'posts_per_page' => 2
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <a  href=" <?php the_permalink() ?>"><p> <?php the_title(); ?></p></a>
                    <?php endwhile; ?>

                </div>

                <div>
                    <h3>Catégories</h3>
                    <?php
                    $args = array(
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'hide_empty' => '1'
                    );
                    $categories = get_categories($args);

                    foreach($categories as $category) {
                        echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Voir tous les articles dans %s" ), $category->name ) . '" ' . '><p>' . $category->name.'</p></a>';
                    }
                    ?>
                </div>

            </div>



        </div>


    </section>

<?php include "bandeau.php" ?>

<?php get_footer(); ?>