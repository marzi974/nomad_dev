<?php

/*
Template Name: contact
*/

get_header(); ?>

<section id="joindre">

    <div class="container row">

        <div class="large-5 medium-5 columns coord" >

            <h2>Pour nous joindre</h2>
            <p>5500, avenue Vincen-Beaumont</p>
            <p>Québec (QC) G1H 4J8</p>

            <b class="bloc" ><a href="tel:14188778567">418 877-8567</a></b>
            <b><a href="mailto:info@nomadconcstruction.com">info@nomadconstruction.com</a></b>

            <p class="bloc">LUNDI AU AU VENDREDI</p>
            <p>7h à 18h</p>

            <div id="map"></div>

        </div>

        <div class="large-7 medium-7 columns contact" >

            <?php echo  do_shortcode('[contact-form-7 id="92" title="Formulaire de contact"]')  ?>

        </div>

    </div>

</section>




<?php include ('bandeau.php'); ?>



<?php get_footer(); ?>

