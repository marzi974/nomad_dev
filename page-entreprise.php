<?php

/** Template Name: entreprise
 */

get_header();


?>
<section id="nav_ent" class="text-center">
    <span>
        <a href="#apropos">À propos</a>
        <a href="#mission">Mission & valeurs</a>
        <a href="#etapes">Notre approche</a>
    </span>
</section>

<section class="section_content" id="apropos">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

        <div class="container">


            <div class="row ">
                <?php
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),"full" );
                $url = $thumb['0'];
                ?>
                <div class="large-6 medium-12 columns image " style="background-image: url(); ">

                    <img src="<?php echo get_template_directory_uri();?>/img/entreprise.jpg" alt=""/>
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


    <section  class="section_content" id="mission">

        <div class="leftHalf right"></div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

            <div class="container">


                <div class="row ">
                    <?php
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),"full" );
                    $url = $thumb['0'];
                    ?>


                    <div class="large-6 medium-12 columns ">

                        <h3>Notre mission</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet diam et congue laoreet. Mauris justo neque, porttitor eu sollicitudin aliquam, vehicula a sem. Integer sit amet urna sit amet tellus blandit cursus. Integer in neque tristique, pellentesque mauris sed, lacinia nibh. Morbi eleifend lorem quis libero finibus, ac lobortis.. Lorem ipsum dolor sit amet consectetur adispiscing elit</p>
                        <h3>Nos valeurs</h3>
                        <p class="titre_couleur">Valeur 1</p>
                        <p>consectetur adipiscing elit. In tristique at quam a convallis. Nunc non porttitor nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras gravida ligula sed eros elementum venenatis.   </p>
                        <p class="titre_couleur">Valeur 2</p>
                        <p>consectetur adipiscing elit. In tristique at quam a convallis. Nunc non porttitor nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras gravida ligula sed eros elementum venenatis. </p>
                        <p class="titre_couleur">Valeur 3</p>
                        <p>consectetur adipiscing elit. In tristique at quam a convallis. Nunc non porttitor nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras gravida ligula sed eros elementum venenatis.  </p>

                    </div>


                    <div class="large-6 medium-12 columns image " style="background-image: url(); ">

                        <img src="<?php echo get_template_directory_uri();?>/img/entreprise.jpg" alt=""/>
                    </div>


                </div>



            </div>

        <?php endwhile; endif; ?>

    </section>

    <section id="etapes" class="section_content">

        <div class="text-center">
            <h2>Notre approche</h2>
            <p>consectetur adipiscing elit. In tristique at quam a convallis. Nunc non porttitor nulla. Orci varius natoque penatibus et magnis </p>
        </div>

        <div class="container  flex etape">
            <div>
                <div>
                    <span>1</span>
                    <p>Rencontre préléminaire</p>
                    <ul>
                        <li>Énumération des besoins</li>
                        <li>Conception des plans - facultatif</li>
                        <li>Conseils & propositions</li>
                        <li>Remises des plan & devis</li>
                    </ul>
                </div>

            </div>
            <div>
                <div>
                    <span>2</span>
                    <p>Soumission & suivi</p>
                    <ul>
                        <li>Remise de l'offre de services</li>
                        <li>Révision de la soumission & modifications</li>
                        <li>Rencontre des sous-traitants</li>
                        <li>Choix des matériaux</li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <span>3</span>
                    <p>Signature du contrat</p>
                    <ul>
                        <li>Prise de connaisince du contrat</li>
                        <li>Remise de l'échancier</li>
                        <li>Présentation du contremaître chargé de projet au client</li>
                        <li>Planification d'une date de début des travaux</li>
                    </ul>
                </div>
            </div>
            <div >
                <div>
                    <span>4</span>
                    <p>Ouverture du chantier</p>
                    <ul>
                        <li>Préparation du terrain</li>
                        <li>Horaire des sous-traitants</li>
                        <li>Sécurisation du chantier</li>
                        <li>Affichage</li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <span>5</span>
                    <p>Assurance qualité</p>
                    <ul>
                        <li>Disponibilité du contremaitre</li>
                        <li>Disponibilité du responsable assurance-qualité</li>
                        <li>Revue hebdomadaire du chantier avec le client</li>
                        <li>Expression des goûts et préférences du client</li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <span>6</span>
                    <p>Fin des travaux</p>
                    <ul>
                        <li>Revue des travaux de sous-traitances</li>
                        <li>Revue finale du chantier avac le client</li>
                        <li>Ajustement et bonifications</li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <span>7</span>
                    <p>Fermeture du chantier</p>
                    <ul>
                        <li>Nettoyage complet par Nomad Construction</li>
                        <li>Ménage professionnel</li>
                        <li>Célébration</li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <span>8</span>
                    <p>Suivi post-travaux</p>
                    <ul>
                        <li>1 mois après la fin des travaux</li>
                        <li>1 après la fin des travaux</li>
                    </ul>
                </div>
            </div>
            <div>
                <p>Demande de soumission</p>
                <p>Contactez-nous et vous recevrez une soumision sous 48h</p>
                <a href="/soumission"><div class="fleche_blanche"><img src="http://nomad.option-design.ca/wp-content/themes/nomad/img/fleche_blanche.svg" alt=""></div></a>
            </div>
        </div>
        
    </section>




<?php get_footer(); ?>