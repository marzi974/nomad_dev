<?php

get_header(); ?>


    <section  id="news">



        <div class="row ">
            <div class="large-8 medium-8 columns article">



                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();


                    ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <a href="#" onclick="history.back(-1)" class="bouton_bleu" ><img src="<?php bloginfo('template_url'); ?>/img/arrow_l_bleu.svg" alt=""/>Retour</a>
                        <?php next_post_link( '%link', 'Nouvelle suivante', TRUE ); ?>

                        <div class="images" style="background-image: url(''); ">
                            <img src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt=""/>
                        </div>
                        <p class="contenu_article"> <?php the_content(); ?></p>
                        <div class="clearfix bas_article"></div>


                    </article>
                    <a href="#" onclick="history.back(-1)" class="bouton_bleu" ><img src="<?php bloginfo('template_url'); ?>/img/arrow_l_bleu.svg" alt=""/>Retour</a>
                    <?php next_post_link( '%link', 'Nouvelle suivante', TRUE ); ?>
                    <?php setPostViews(get_the_ID());?>
                <?php endwhile; endif; ?>

            </div>
            <div class="infos">
                <div>
                    <div class="sociaux">
                        <a href="http://www.facebook.com/share.php?u=<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>" target="_blank"><img class="facebook" src="<?php bloginfo('template_url'); ?>/img/facebook_bleu.svg" width="25" alt=""/></a>
                        <a href="https://plus.google.com/share?url=<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>" target="_blank"><img  class="google" src="<?php bloginfo('template_url'); ?>/img/google_bleu.svg" width="25" alt=""/></a>
                        <a href="https://plus.google.com/share?url=<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>" target="_blank"><img  class="google" src="<?php bloginfo('template_url'); ?>/img/linkedin_bleu.svg" width="25" alt=""/></a>
                    </div>
                    <div class="bouton bleu_fonce"><?php echo get_the_date('j M Y');?></div>
                    <div class="bouton bleu_clair"><?php echo getPostViews(get_the_ID());?> vue<?php echo (getPostViews(get_the_ID())> 1) ? "s":"";?></div>
                </div>
                <div class="vide"></div>
                <div>
                    <a href="http://www.facebook.com/share.php?u=<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>" target="_blank"><img class="facebook" src="<?php bloginfo('template_url'); ?>/img/facebook_bleu.svg" width="25" alt=""/></a>
                    <a href="https://plus.google.com/share?url=<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>" target="_blank"><img  class="google" src="<?php bloginfo('template_url'); ?>/img/google_bleu.svg" width="25" alt=""/></a>
                    <a href="https://plus.google.com/share?url=<?php echo "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI']; ?>" target="_blank"><img  class="google" src="<?php bloginfo('template_url'); ?>/img/linkedin_bleu.svg" width="25" alt=""/></a>
                </div>
            </div>

            <div class="large-4 medium-4 columns cat">

                <div>
                    <h2>Catégories</h2>
                    <?php
                    $args = array(
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'hide_empty' => '1'
                    );
                    $categories = get_categories($args);

                    foreach($categories as $category) {
                        echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Voir tous les articles dans %s" ), $category->name ) . '" ' . '>' . $category->name.'</a>';
                    }
                    ?>
                </div>

            </div>



        </div>

        <div class="menu_nouvelles">

        </div>

    </section>



<?php get_footer(); ?>