<?php /* Template Name: Catalogue Campagne  */ get_header(); ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Creative Factory</title>

    <meta name="description" content="Creative Factory">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.typekit.net/zuv7hqs.css">
    <link rel="stylesheet" src="main.css">

    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/spectre.min.css'; ?>">
    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick.css'; ?>">
    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick-theme.css'; ?>">

    <script src="<?php echo get_template_directory_uri() . '/js/jquery-3.4.1.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/slick.min.js'; ?>"></script>

</head>

    <body>

        <div id="mainContainer" class="container">

            <header id="catalogueHeader">
                <nav id="menuNav" class="column col-9 centered">
                    <?php 
                        $catalogue_logo = get_field('logo', 'options');
                        if( !empty( $catalogue_logo ) ): ?>
                    <img src="<?php echo esc_url($catalogue_logo['url']); ?>"
                        alt="<?php echo esc_attr($catalogue_logo['alt']); ?>" />
                    <?php endif; ?>
                </nav>
                <h2>Notre catalogue <span>de formats</span></h2>
            </header>


               <!----------------------------------->
               <section id="catalogueBlueNav">
                <div class="content column col-9 centered">
                <?php
                    $photos = get_page_link(get_page_by_path('catalogue-photos'));
                    $videos = get_page_link(get_page_by_path('catalogue-videos'));
                    $creations = get_page_link(get_page_by_path('catalogue-creations-graphiques'));
                    $podcast = get_page_link(get_page_by_path('catalogue-podcast'));;
                    $edito = get_page_link(get_page_by_path('catalogue-edito'));
                    $campagne = get_page_link(get_page_by_path('catalogue-campagne'));
                ?>
                   <ul>
                       <li><a href="<?php echo $photos ?>">Photos</a></li>
                       <li><a href="#">|</a></li>
                       <li><a href="<?php echo $videos ?>">Videos</a></li>
                       <li><a href="#">|</a></li>
                       <li><a href="<?php echo $creations ?>">Creations graphiques</a></li>
                       <li><a href="#">|</a></li>
                       <li><a href="<?php echo $podcast ?>">Podcast</a></li>
                       <li><a href="#">|</a></li>
                       <li><a href="<?php echo $edito ?>">Edito</a></li>
                       <li><a href="#">|</a></li>
                       <li><a class="active" href="<?php echo $campagne ?>">Campagne</a></li>
                    </ul>
                </div>
            </section>
            <!----------------------------------->
         
            <!----------------------------------->
            <section id="catalogueBlackBanner">
                <div class="content column col-9 centered">

                    <div class="columns">
                        <div class="column col-5">
                            <h3><?php echo get_field('titre_consigne'); ?></h3>
                        </div>

                        <div class="column col-1"></div>

                        <div class="column col-6">
                            <p class="description">
                            <?php echo get_field('objet_consigne_1'); ?><br>
                            <?php echo get_field('objet_consigne_2'); ?><br>
                            <?php echo get_field('objet_consigne_3'); ?><br>
                            <?php echo get_field('objet_consigne_4'); ?><br>
                            <?php echo get_field('objet_consigne_5'); ?><br>
                            </p>
                        </div>
                    </div>


                </div>
            </section>
            <!----------------------------------->



            <!----------------------------------->
            <section id="Section1">
                <div class="content column col-9 centered">
                    <div class="row columns">

                        <div class="image-container  col-6 ">
                            <?php $imgsec1 = get_field('image_section_1');
                                    if( !empty( $imgsec1 ) ): ?>
                            <img src="<?php echo esc_url($imgsec1['url']); ?>"
                                alt="<?php echo esc_attr($imgsec1['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        
                        <div class="column col-1"></div>
                        
                        <div class="title-container col-5">
                            <?php $contenusec1 = get_field('contenu_section_1');
                                if( $contenusec1 ): ?>
                                    <h3><?php echo $contenusec1['titre']; ?></h3>
                                    <h4>Cas d'usage</h4>
                                        <p><?php echo $contenusec1['description']; ?><br>
                                        <strong>Durée : <?php echo $contenusec1['duree']; ?></strong>
                                        </p>
                                    <h4>Eléments à fournir pour la production</h4>
                                        <ul>
                                            <li><?php echo $contenusec1['element_1']; ?></li>
                                            <li><?php echo $contenusec1['element_2']; ?></li>
                                            <li><?php echo $contenusec1['element_3']; ?></li>
                                            <li><?php echo $contenusec1['element_4']; ?></li>
                                        </ul>
                                    <h4>Estimation en crédits*</h4>
                                    <div class="bar-infos col-10">
                                            <div class="bar">
                                                <?php 
                                                     $valuesec1 = $contenusec1['nb_credits'];
                                                     $valuebarsec1 = ($valuesec1/16)*100;
                                                ?>
                                                <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarsec1 ?>%;" aria-valuenow="<?php echo $contenusec1['nb_credits']; ?>0" aria-valuemin="0" aria-valuemax="160"></div>
                                            </div>
                                        <p><strong><?php echo $contenusec1['nb_credits']; ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                                    </div>
                            <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!----------------------------------->

            <!----------------------------------->
            <section id="Section2">
                <div class="content column col-9 centered">
                    <div class="row columns">

                        <div class="title-container col-6">
                            <?php $contenusec2 = get_field('contenu_section_2');
                                if( $contenusec2 ): ?>
                                    <h3><?php echo $contenusec2['titre']; ?></h3>
                                    <h4>Cas d'usage</h4>
                                        <p><?php echo $contenusec2['description']; ?><br>
                                        <strong>Durée : <?php echo $contenusec2['duree']; ?></strong>
                                        </p>
                                    <h4>Eléments à fournir pour la production</h4>
                                        <ul>
                                            <li><?php echo $contenusec2['element_1']; ?></li>
                                            <li><?php echo $contenusec2['element_2']; ?></li>
                                            <li><?php echo $contenusec2['element_3']; ?></li>
                                            <li><?php echo $contenusec2['element_4']; ?></li>
                                        </ul>
                                    <h4>Estimation en crédits*</h4>
                                    <div class="bar-infos col-9">
                                        <div class="bar">
                                                <?php 
                                                     $valuesec2 = $contenusec2['nb_credits'];
                                                     $valuebarsec2 = ($valuesec2/16)*100;
                                                ?>
                                            <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarsec2 ?>0%;" aria-valuenow="<?php echo $contenusec2['nb_credits']; ?>0" aria-valuemin="0" aria-valuemax="160"></div>
                                        </div>
                                    <p><strong><?php echo $contenusec2['nb_credits']; ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                                    </div>
                            <?php endif; ?>
                        </div>

                        <div class="column col-1"></div>

                        <div class="image-container  col-5 ">
                            <?php $imgsec2 = get_field('image_section_2');
                                    if( !empty( $imgsec2 ) ): ?>
                            <img src="<?php echo esc_url($imgsec2['url']); ?>"
                                alt="<?php echo esc_attr($imgsec2['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!----------------------------------->

            <!----------------------------------->
            <section id="Section3">
                <div class="content column col-9 centered">
                    <div class="row columns">

                        <div class="image-container  col-6 ">
                            <?php $imgsec3 = get_field('image_section_3');
                                    if( !empty( $imgsec3 ) ): ?>
                            <img src="<?php echo esc_url($imgsec3['url']); ?>"
                                alt="<?php echo esc_attr($imgsec3['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        
                        <div class="column col-1"></div>
                        
                        <div class="title-container col-5">
                            <?php $contenusec3 = get_field('contenu_section_1');
                                if( $contenusec3 ): ?>
                                    <h3><?php echo $contenusec3['titre']; ?></h3>
                                    <h4>Cas d'usage</h4>
                                        <p><?php echo $contenusec3['description']; ?><br>
                                        <strong>Durée : <?php echo $contenusec3['duree']; ?></strong>
                                        </p>
                                    <h4>Eléments à fournir pour la production</h4>
                                        <ul>
                                            <li><?php echo $contenusec3['element_1']; ?></li>
                                            <li><?php echo $contenusec3['element_2']; ?></li>
                                            <li><?php echo $contenusec3['element_3']; ?></li>
                                            <li><?php echo $contenusec3['element_4']; ?></li>
                                        </ul>
                                    <h4>Estimation en crédits*</h4>
                                    <div class="bar-infos col-10">
                                            <div class="bar">
                                                <?php 
                                                     $valuesec3 = $contenusec3['nb_credits'];
                                                     $valuebarsec3 = ($valuesec3/16)*100;
                                                ?>
                                                <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarsec3 ?>%;" aria-valuenow="<?php echo $contenusec3['nb_credits']; ?>0" aria-valuemin="0" aria-valuemax="160"></div>
                                            </div>
                                        <p><strong><?php echo $contenusec3['nb_credits']; ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                                    </div>
                            <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!----------------------------------->

            <!----------------------------------->
            <section id="Section4">
                <div class="content column col-9 centered">
                    <div class="row columns">

                        <div class="title-container col-6">
                            <?php $contenusec4 = get_field('contenu_section_4');
                                if( $contenusec4 ): ?>
                                    <h3><?php echo $contenusec4['titre']; ?></h3>
                                    <h4>Cas d'usage</h4>
                                        <p><?php echo $contenusec4['description']; ?><br>
                                        <strong>Durée : <?php echo $contenusec4['duree']; ?></strong>
                                        </p>
                                    <h4>Eléments à fournir pour la production</h4>
                                        <ul>
                                            <li><?php echo $contenusec4['element_1']; ?></li>
                                            <li><?php echo $contenusec4['element_2']; ?></li>
                                            <li><?php echo $contenusec4['element_3']; ?></li>
                                            <li><?php echo $contenusec4['element_4']; ?></li>
                                        </ul>
                                    <h4>Estimation en crédits*</h4>
                                    <div class="bar-infos col-9">
                                        <div class="bar">
                                                <?php 
                                                     $valuesec4 = $contenusec4['nb_credits'];
                                                     $valuebarsec4 = ($valuesec4/16)*100;
                                                ?>
                                            <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarsec2 ?>0%;" aria-valuenow="<?php echo $contenusec4['nb_credits']; ?>0" aria-valuemin="0" aria-valuemax="160"></div>
                                        </div>
                                    <p><strong><?php echo $contenusec4['nb_credits']; ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                                    </div>
                            <?php endif; ?>
                        </div>

                        <div class="column col-1"></div>

                        <div class="image-container  col-5 ">
                            <?php $imgsec4 = get_field('image_section_4');
                                    if( !empty( $imgsec4 ) ): ?>
                            <img src="<?php echo esc_url($imgsec4['url']); ?>"
                                alt="<?php echo esc_attr($imgsec4['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!----------------------------------->

            


            <!----------------------------------->
            <section id="Contact">
                <div class="content column col-9 centered">

                    <div class="row columns">
                        <div class="col-6 centered text-center">
                            <h3><?php echo get_field('titre_contact'); ?><h3>
                        </div>
                    </div>

                    <div class="columns">

                        <?php echo get_field('contact', 'options'); ?>

                    </div>
                </div>
            </section>
            <!----------------------------------->
        </div>

        <!----------------------------------->
        <footer id="footer">
            <nav id="footerNav" class="column col-9 centered">
                <?php 
                            $footerlogo = get_field('logo_footer');
                            if( !empty( $footerlogo ) ): ?>
                <img id="footerlogo" src="<?php echo esc_url($footerlogo['url']); ?>"
                    alt="<?php echo esc_attr($footerlogo['alt']); ?>" />
                <?php endif; ?>
                <p>© Braaxe - Tous droits réservés</p>
                <ul class>
                    <li><a href="#CCM">Comment ça marche ?</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#Formats">Les formats</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#Exemples">Exemples</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#Stats">Chiffres</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#Credits">Prix</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#Contact">Contact</a></li>
                </ul>
            </nav>
        </footer>
        <!----------------------------------->

    </body>