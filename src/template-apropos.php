<?php
/* Template Name: Template À propos */
?>

<!--------------------------------------HEADER------------------------------------------------------------------------->
<?php get_header(); ?>
<!--------------------------------------WRAPPER------------------------------------------------------------------------->

<div class="wrapper">

    <div class="hero1">
        <div>
            <div class="image-hero">
                <h2><span>Marie-Pier Chassé</span></h2>
            </div>
            <div class="texte-hero">
                <h1>Je veux créer !</h1>
                <hr>
            </div>
        </div>
    </div>

    <!--------------------------------------SECTION------------------------------------------------------------------------->

    <section class="section-apropos">


        <!--------------------------------------ARTICLE------------------------------------------------------------------------->
        <article>
            <div class="titlearticle">
                <div class="carredeco"></div>
                <h3>Ce que j'offre</h3>

            </div>
            <div class="body-article">

                <div class="info-article">
                    <p>
                        Modèle dynamique possédant plusieurs aptitudes en DESIGN, dont le vectoriel et le matriciel,
                        version compatible avec ton équipe et WordPress.
                    </p>
                    <div class="lesboutons">
                        <div class="unbouton">
                            <div class="arrowbutton"></div>
                            <button class="btn"><a href=<?php echo bloginfo('template_url'); ?>/images/cv.pdf" download>Voir
                                    mon C.V.</a></button>
                        </div>
                        <div class="unbouton">
                            <div class="arrowbutton"></div>
                            <button class="btn"><a href="https://youtu.be/WjixzzK1Qoo">Présentation vidéo</a></button>
                        </div>
                    </div>
                </div>


                <div class="image-article">

                    <img class="equerrebleue" src="<?php echo bloginfo('template_url'); ?>/images/equerrebleue.png"
                         height="316" width="319"/>
                    <div class="portrait">

                        <img class="portrait-image" src="<?php echo bloginfo('template_url'); ?>/images/photompc.png"/>
                        <div class="portrait-title">
                            <h4>Designer</h4>
                            <img src="<?php echo bloginfo('template_url'); ?>/images/x.png" height="68" width="69"/>
                        </div>
                    </div>

                    <img class="equerrejaune" src="<?php echo bloginfo('template_url'); ?>/images/equerrejaune.png"
                         height="316" width="316"/>
                </div>
            </div>


        </article>

        <!--------------------------------------ARTICLE------------------------------------------------------------------------->


        <article>
            <div class="titlearticle">
                <div class="carredeco"></div>
                <h3>Ce que je fais</h3>
            </div>

            <div class="body-article">
                <div class="info-article">
                    <div>Si la commande est passée rapidement, vous recevrez en prime l'extension pour
                        l'animation 2D. Nous ajouterons également à ce modèle polyvalent une
                        option d'entraide illimité à ne pas manquer.
                    </div>
                    <div class="icones-articles">

                        <img src="<?php echo bloginfo('template_url'); ?>/images/illustrator.png"/>
                        <img src="<?php echo bloginfo('template_url'); ?>/images/photoshop.png"/>
                        <img src="<?php echo bloginfo('template_url'); ?>/images/figma.png"/>
                        <img src="<?php echo bloginfo('template_url'); ?>/images/html.png"/>
                        <img src="<?php echo bloginfo('template_url'); ?>/images/css.png"/>
                        <img src="<?php echo bloginfo('template_url'); ?>/images/wordpress.png"/>
                        <img src="<?php echo bloginfo('template_url'); ?>/images/sass.png"/>


                        <img src="<?php echo bloginfo('template_url'); ?>/images/aftereffect.png"/>
                        <!--                        <img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/images/premiere.png"/>-->
                        <!--                        <img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/images/php.png"/>-->

                        <!--                        <img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/images/js.png"/>-->


                        <!--                        <img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/images/blender.png"/>-->

                    </div>
                </div>


                <div class="image-article">
                    <img class='competences' src="<?php echo bloginfo('template_url'); ?>/images/competences.png"/>
                </div>
            </div>


        </article>
        <!--------------------------------------ARTICLE------------------------------------------------------------------------->
        <article>
            <div class="titlearticle">
                <div class="carredeco"></div>
                <h3>Ce que je suis</h3>
            </div>

            <div class="body-article">
                <div class="info-article">
                    <div>Bref, vous aurez à votre portée une joueuse d'équipe multidisciplinaire pour rencontrer tout
                        vos délais serrés grâce à une gestion des priorités optimisée.
                    </div>
                    <div class="icones-articles">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/couleurs.png"/>
                        <img src="<?php echo bloginfo('template_url'); ?>/images/chat.png"/>
                        <img src="<?php echo bloginfo('template_url'); ?>/images/tv.png"/>
                        <img src="<?php echo bloginfo('template_url'); ?>/images/plume.png"/>
                        <img src="<?php echo bloginfo('template_url'); ?>/images/laine.png"/>
                    </div>
                </div>

                <div class="image-article">
                    <img class='qualites' src="<?php echo bloginfo('template_url'); ?>/images/qualites.png"/>
                </div>
            </div>
        </article>

        <div class="call-to-action">

            <button class="btn"><a href="<?php bloginfo('url'); ?>/contact">Contactez-moi pour une entrevue</a></button>

        </div>


    </section>

</div>
<!--------------------------------------FOOTER------------------------------------------------------------------------->

<?php get_footer(); ?>
