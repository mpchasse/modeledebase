<?php
/* Template Name: Template À propos */
?>

<!--------------------------------------HEADER------------------------------------------------------------------------->
<?php get_header(); ?>
<!--------------------------------------WRAPPER------------------------------------------------------------------------->

<div class="wrapper">

    <div class="hero1">
        <img class="logotitre" src="<?php echo bloginfo('template_url'); ?>/images/logotitre.png"/>
        <!--        <div>-->
        <!--            <div class="image-hero">-->
        <!--                <h2><span>Marie-Pier Chassé</span></h2>-->
        <!--            </div>-->
        <div class="texte-hero">
            <h1>Je veux créer !!</h1>
            <hr>
        </div>
        <!--        </div>-->
    </div>

    <!--------------------------------------SECTION------------------------------------------------------------------------->

    <section class="section-apropos">


        <!--------------------------------------ARTICLE------------------------------------------------------------------------->
        <article>
            <div class="titlearticle">
                <div class="carredeco"></div>
                <h3>Qui suis-je ?</h3>

            </div>
            <div class="body-article">

                <div class="info-article">
                    <p>

                        Bonjour! Je suis Marie-Pier Chassé, designer qui ne peux pas vivre sans son agenda
                        et ses beaux crayons. Je suis passionnée par la création autant à l'ordinateur qu'à la main.
                        J'habite présentement sur la Rive-Sud de Montréal avec mon conjoint et mes chats.
                        Quand je ne suis pas à l'ordinateur, vous me trouverez dans la cuisine ou devant la télévision.

                    </p>

                </div>
                <div class="image-apropos">

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
                <h3>Mes connaissances</h3>
            </div>

            <div class="body-article">
                <div class="info-article">
                    <div><p> Je suis fraîchement diplomée de la Technique d'intégration multimédia. Créer est pour
                            J'utilise principalement la suite Adobe ainsi que Figma. autant en web qu'en graphisme.
                            Outre que de travailler sur des projets personnels, j'adore collaborer avec </p>
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


                <!--                <div class="image-article">-->
                <!--                    <img class='competences' src="-->
                <?php //echo bloginfo('template_url'); ?><!--/images/competences.png"/>-->
                <!--                </div>-->
            </div>


        </article>
        <!--------------------------------------ARTICLE------------------------------------------------------------------------->
        <article>
            <div class="titlearticle">
                <div class="carredeco"></div>
                <h3>Mes valeurs</h3>
            </div>

            <div class="body-article">
                <div class="info-article">
                    <div><p>Je vise par mes designs à apporter une vision claire et originale de votre...
                            J'ai à coeur l'expérience des utilisateurs.
                            Mon style de design est organisé, créatif et empreint de couleur.</p>
                    </div>
                    <!--                    <div class="icones-articles">-->
                    <!--                        <img src="-->
                    <?php //echo bloginfo('template_url'); ?><!--/images/couleurs.png"/>-->
                    <!--                        <img src="-->
                    <?php //echo bloginfo('template_url'); ?><!--/images/chat.png"/>-->
                    <!--                        <img src="-->
                    <?php //echo bloginfo('template_url'); ?><!--/images/tv.png"/>-->
                    <!--                        <img src="-->
                    <?php //echo bloginfo('template_url'); ?><!--/images/plume.png"/>-->
                    <!--                        <img src="-->
                    <?php //echo bloginfo('template_url'); ?><!--/images/laine.png"/>-->
                    <!--                    </div>-->
                </div>

                <!--                <div class="image-article">-->
                <!--                    <img class='qualites' src="-->
                <?php //echo bloginfo('template_url'); ?><!--/images/qualites.png"/>-->
                <!--                </div>-->
            </div>
        </article>

        <div class="call-to-action">

            <button class="btn"><a href="<?php bloginfo('url'); ?>/contact">Contactez-moi pour en savoir plus</a>
            </button>

        </div>


    </section>


</div>
<!--------------------------------------FOOTER------------------------------------------------------------------------->

<?php get_footer(); ?>
