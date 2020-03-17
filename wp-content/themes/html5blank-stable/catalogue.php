<?php /* Template Name: Catalogue Page Template */ get_header(); ?>

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
                        $menulogo = get_field('menu_logo');
                        if( !empty( $menulogo ) ): ?>
                    <img id="menuLogo" src="<?php echo esc_url($menulogo['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </nav>
                <h2>Notre catalogue <span>de formats</span></h2>
            </header>

            <!----------------------------------->
            <section id="catalogueBlueNav">
                <div class="content column col-9 centered">
                   <ul>
                       <li><a href="#">Photos</a></li>
                       <li><a href="#">|</a></li>
                       <li><a href="#">Videos</a></li>
                       <li><a href="#">|</a></li>
                       <li><a href="#">Creations graphiques</a></li>
                       <li><a href="#">|</a></li>
                       <li><a href="#">Podcast</a></li>
                       <li><a href="#">|</a></li>
                       <li><a href="#">Edito</a></li>
                       <li><a href="#">|</a></li>
                       <li><a href="#">Campagne</a></li>
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
            <section id="Teaser">
                <div class="content column col-9 centered">
                    <div class="row columns">

                        <div class="image-container  col-6 ">
                            <?php $imgteaser = get_field('image_teaser');
                                    if( !empty( $imgteaser ) ): ?>
                            <img src="<?php echo esc_url($imgteaser['url']); ?>"
                                alt="<?php echo esc_attr($imgteaser['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        
                        <div class="column col-1"></div>
                        
                        <div class="title-container col-5">
                            <?php $contenuteaser = get_field('contenu_teaser');
                                if( $contenuteaser ): ?>
                                    <h3><?php echo $contenuteaser['titre']; ?></h3>
                                    <h4>Cas d'usage</h4>
                                        <p><?php echo $contenuteaser['description']; ?><br>
                                        <strong>Durée : <?php echo $contenuteaser['duree']; ?></strong>
                                        </p>
                                    <h4>Eléments à fournir pour la production</h4>
                                        <ul>
                                            <li><?php echo $contenuteaser['element_1']; ?></li>
                                            <li><?php echo $contenuteaser['element_2']; ?></li>
                                            <li><?php echo $contenuteaser['element_3']; ?></li>
                                            <li><?php echo $contenuteaser['element_4']; ?></li>
                                        </ul>
                                    <h4>Estimation en crédits*</h4>
                                    <div class="bar-infos col-8">
                                            <div class="bar">
                                                <?php 
                                                     $valueteaser = $contenuteaser['nb_credits'];
                                                     $valuebarteaser = ($valueteaser/16)*100;
                                                ?>
                                                <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarteaser ?>%;" aria-valuenow="<?php echo $contenuteaser['nb_credits']; ?>0" aria-valuemin="0" aria-valuemax="160"></div>
                                            </div>
                                        <p><strong><?php echo $contenuteaser['nb_credits']; ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                                    </div>
                            <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!----------------------------------->

            <!----------------------------------->
            <section id="Interview">
                <div class="content column col-9 centered">
                    <div class="row columns">

                        <div class="title-container col-6">
                            <?php $contenuitw = get_field('contenu_interview');
                                if( $contenuitw ): ?>
                                    <h3><?php echo $contenuitw['titre']; ?></h3>
                                    <h4>Cas d'usage</h4>
                                        <p><?php echo $contenuitw['description']; ?><br>
                                        <strong>Durée : <?php echo $contenuitw['duree']; ?></strong>
                                        </p>
                                    <h4>Eléments à fournir pour la production</h4>
                                        <ul>
                                            <li><?php echo $contenuitw['element_1']; ?></li>
                                            <li><?php echo $contenuitw['element_2']; ?></li>
                                            <li><?php echo $contenuitw['element_3']; ?></li>
                                            <li><?php echo $contenuitw['element_4']; ?></li>
                                        </ul>
                                    <h4>Estimation en crédits*</h4>
                                    <div class="bar-infos col-8">
                                        <div class="bar">
                                                <?php 
                                                     $valueitw = $contenuitw['nb_credits'];
                                                     $valuebaritw = ($valueitw/16)*100;
                                                ?>
                                            <div class="bar-item" role="progressbar" style="width:<?php echo $valuebaritw ?>0%;" aria-valuenow="<?php echo $contenuitw['nb_credits']; ?>0" aria-valuemin="0" aria-valuemax="160"></div>
                                        </div>
                                    <p><strong><?php echo $contenuitw['nb_credits']; ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                                    </div>
                            <?php endif; ?>
                        </div>

                        <div class="column col-1"></div>

                        <div class="image-container  col-5 ">
                            <?php $imgitw = get_field('image_interview');
                                    if( !empty( $imgitw ) ): ?>
                            <img src="<?php echo esc_url($imgitw['url']); ?>"
                                alt="<?php echo esc_attr($imgitw['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!----------------------------------->

            
            <!----------------------------------->
            <section id="Remake">
                <div class="content column col-9 centered">

                    <div class="row columns">

                            <div class="image-container  col-6 ">
                                <?php $imgremake = get_field('image_remake');
                                        if( !empty( $imgremake ) ): ?>
                                <img src="<?php echo esc_url($imgremake['url']); ?>"
                                    alt="<?php echo esc_attr($imgremake['alt']); ?>" />
                                <?php endif; ?>
                            </div>
             
                        <div class="column col-1"></div>

                        <div class="title-container col-5">
                            <?php $contenuremake = get_field('contenu_remake');
                                if( $contenuremake ): ?>
                                    <h3><?php echo $contenuremake['titre']; ?></h3>
                                    <h4>Cas d'usage</h4>
                                        <p><?php echo $contenuremake['description']; ?><br>
                                        <strong>Durée : <?php echo $contenuremake['duree']; ?></strong>
                                        </p>
                                    <h4>Eléments à fournir pour la production</h4>

                                        <ul>
                                            <?php if (isset($contenuremake['element_1'])) ?> 
                                                <li><?php echo $contenuremake['element_1']; ?></li>
                                            <?php ?>

                                            <?php if (isset($contenuremake['element_2'])) ?> 
                                                <li><?php echo $contenuremake['element_2']; ?></li>
                                            <?php ?>


                                            <?php if (isset($contenuremake['element_3'])) ?> 
                                                <li><?php echo $contenuremake['element_3']; ?></li>
                                            <?php ?>

                                            <?php if (!(empty($contenuremake['element_4']))) ?> 
                                                <li><?php echo $contenuremake['element_4']; ?></li>
                                                <?php var_dump($contenuremake['element_4']); ?>
                                            <?php ?>
                                        </ul>

                                    <h4>Estimation en crédits*</h4>
                                    <div class="bar-infos col-8">
                                            <div class="bar">
                                                <?php 
                                                     $valueremake = $contenuremake['nb_credits'];
                                                     $valuebarremake = ($valueremake/16)*100;
                                                ?>
                                                <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarremake ?>%;" aria-valuenow="<?php echo $contenuremake['nb_credits']; ?>0" aria-valuemin="0" aria-valuemax="160"></div>
                                            </div>
                                        <p><strong><?php echo $contenuremake['nb_credits']; ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                                    </div>
                                <?php endif; ?>
                        </div>

                    </div>
                </div>
            </section>
            <!----------------------------------->

              <!----------------------------------->
              <section id="Animation">
                <div class="content column col-9 centered">
                    <div class="row columns">

                        <div class="title-container col-6">
                            <?php $contenuanim = get_field('contenu_animation');
                                if( $contenuanim ): ?>
                                    <h3><?php echo $contenuanim['titre']; ?></h3>
                                    <h4>Cas d'usage</h4>
                                        <p><?php echo $contenuanim['description']; ?><br>
                                        <strong>Durée : <?php echo $contenuanim['duree']; ?></strong>
                                        </p>
                                    <h4>Eléments à fournir pour la production</h4>
                                        <ul>
                                            <li><?php echo $contenuanim['element_1']; ?></li>
                                            <li><?php echo $contenuanim['element_2']; ?></li>
                                            <li><?php echo $contenuanim['element_3']; ?></li>
                                            <li><?php echo $contenuanim['element_4']; ?></li>
                                        </ul>
                                    <h4>Estimation en crédits*</h4>
                                    <div class="bar-infos col-8">
                                            <div class="bar">
                                                <?php 
                                                     $valueanim = $contenuanim['nb_credits'];
                                                     $valuebaranim = ($valueanim/16)*100;
                                                ?>
                                                <div class="bar-item" role="progressbar" style="width:<?php echo $valuebaranim ?>%;" aria-valuenow="<?php echo $contenuanim['nb_credits']; ?>0" aria-valuemin="0" aria-valuemax="160"></div>
                                            </div>
                                        <p><strong><?php echo $contenuanim['nb_credits']; ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                                    </div>
                            <?php endif; ?>
                        </div>

                        <div class="column col-1"></div>

                        <div class="image-container col-5">
                            <?php $imganim = get_field('image_animation');
                                    if( !empty( $imganim ) ): ?>
                            <img src="<?php echo esc_url($imganim['url']); ?>"
                                alt="<?php echo esc_attr($imganim['alt']); ?>" />
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

                        <?php echo get_field('formulaire_de_contact'); ?>

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