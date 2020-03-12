<?php get_header(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Content Factory</title>

    <meta name="description" content="Site interne de la Content Factory">
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

        <header>
            <nav id="menuNav" class="column col-9 centered">
                <?php 
                    $menulogo = get_field('menu_logo');
                    if( !empty( $menulogo ) ): ?>
                    <img id="menuLogo" src="<?php echo esc_url($menulogo['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
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
        </header>

            <!-----------------------------------
            ------------------HERO---------------
            ------------------------------------->
            <section id="headerHero" class="container">
                <div class="content column col-9 centered">
                    <div class="row columns">
                        <h2 class="column col-8"> <?php echo the_field('headerhero'); ?> </h2>
                    </div>
                    <div class="row columns">
                        <a id="headerHeroBtn" class="column col-6" href="<?php echo the_field('header_hero_lien'); ?>"><?php echo the_field('header_hero_btn'); ?> </a>
                    </div>
                </div>
        

                <div id="bottomHeaderBanner" class="container">
                    <div class="content column col-9 centered">
                        <div class="columns">
                            <div class="col-4">
                                    <p><?php echo the_field('header_hero_garantie1'); ?>
                            </div>
                            <div class="col-4">
                                    <p><?php echo the_field('header_hero_garantie2'); ?>
                            </div>
                            
                            <div class="col-4">
                                    <p><?php echo the_field('header_hero_garantie3'); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-----------------------------------
            -------------------------------------
            ------------------------------------->

            <!-----------------------------------
            --------------REFERENCES------------
            ------------------------------------->
            <section id="blackBanner">
                <div class="content column col-9 centered">

                    <div class="row columns">
                        <div class="column col-12 ">
                            <p><?php echo the_field('tagline_references'); ?></p>
                        </div>
                    </div>

                    <div class="row columns">
                                <div class="column col-1"></div>

                                    <?php 
                                        $image_reference_1 = get_field('image_reference_1');
                                        if( !empty( $image_reference_1 ) ): ?>
                                        <div class="column col-2"><img src="<?php echo esc_url($image_reference_1['url']); ?>" alt="<?php echo esc_attr($image_reference_1['alt']); ?>" /></div>
                                    <?php endif; ?>

                                    <?php 
                                        $image_reference_2 = get_field('image_reference_2');
                                        if( !empty( $image_reference_2 ) ): ?>
                                        <div class="column col-2"><img src="<?php echo esc_url($image_reference_2['url']); ?>" alt="<?php echo esc_attr($image_reference_2['alt']); ?>" /></div>
                                    <?php endif; ?>
                    
                                    <?php 
                                        $image_reference_3 = get_field('image_reference_3');
                                        if( !empty( $image_reference_3 ) ): ?>
                                        <div class="column col-2"><img src="<?php echo esc_url($image_reference_3['url']); ?>" alt="<?php echo esc_attr($image_reference_3['alt']); ?>" /></div>
                                    <?php endif; ?>
                    
                                    <?php 
                                        $image_reference_4 = get_field('image_reference_4');
                                        if( !empty( $image_reference_4 ) ): ?>
                                        <div class="column col-2"><img src="<?php echo esc_url($image_reference_4['url']); ?>" alt="<?php echo esc_attr($image_reference_4['alt']); ?>" /></div>
                                    <?php endif; ?>
                    
                                    <?php 
                                        $image_reference_5 = get_field('image_reference_5');
                                        if( !empty( $image_reference_5 ) ): ?>
                                        <div class="column col-2"><img src="<?php echo esc_url($image_reference_5['url']); ?>" alt="<?php echo esc_attr($image_reference_5['alt']); ?>" /></div>
                                    <?php endif; ?>
                    
                    
                                <div class="column col-1"></div>
                    </div>

                </div>
            </section>
            <!-----------------------------------
            -------------------------------------
            ------------------------------------->


            <!-----------------------------------
            ----------COMMENT PRODUIRE ?--------
            ------------------------------------->
            <section id="firstBanner">
                <div class="content column col-9 centered">

                    <div class="columns">
                        <div class="column col-5">
                            <h3><?php echo the_field('titre_banner_1'); ?></h3>
                        </div>

                        <div class="column col-1"></div>

                        <div class="column col-6">      
                                    
                            <p class="description"><?php echo the_field('description_banner_1'); ?></p>
                        </div>
                    </div>


                </div>
            </section>
            <!-----------------------------------
            -------------------------------------
            ------------------------------------->


            <!-----------------------------------
            ----------COMMENT CA MARCHE ?--------
            ------------------------------------->
            <section id="CCM">
                
                <div class="content column col-9 centered">

                    <div class="columns">

                        <div class="column col-6 image-container">
                            <?php 
                                $imageccm = get_field('image_ccm');
                                if( !empty( $imageccm ) ): ?>
                                <img id="smartPhone" src="<?php echo esc_url($imageccm['url']); ?>" alt="<?php echo esc_attr($imageccm['alt']); ?>" />
                            <?php endif; ?>
                        </div>

                            <div class="column col-6 rightContent">
                                <h3> Comment <strong>cela marche ?</strong></h3>
                                <div>
                                    <h4><?php echo the_field('titre_ccm_1'); ?></h4>
                                    <p><?php echo the_field('texte_ccm_1'); ?></p>
                                </div>
                                <div>
                                    <h4><?php echo the_field('titre_ccm_2'); ?></h4>
                                    <p><?php echo the_field('texte_ccm_2'); ?></p>
                                </div>
                                <div>
                                    <h4><?php echo the_field('titre_ccm_3'); ?></h4>
                                    <p><?php echo the_field('texte_ccm_3'); ?></p>
                                </div>
                            </div>

                        </div>

                </div>

            </section>
            <!-----------------------------------
            -------------------------------------
            ------------------------------------->


            <!-----------------------------------
            ------------------FORMATS------------
            ------------------------------------->
            <section id="Formats">

                <div class="content column col-9 centered">
                    <div class="row columns">
                        <div class="title-container col-7 centered">
                            <h3><?php echo the_field('titre_formats'); ?></h3>
                        </div>
                    <div>
                </div>

                        <div class="col-12 slider multiple-items">

                                <div>
                                    <?php 
                                        $icon_formats_1 = get_field('icon_formats_1');
                                        if( !empty( $icon_formats_1 ) ): ?>
                                    <img src="<?php echo esc_url($icon_formats_1['url']); ?>" alt="<?php echo esc_attr($icon_formats_1['alt']); ?>" />
                                    <p><?php echo esc_attr($icon_formats_1['alt']); ?></p>
                                    <?php endif; ?>
                                </div>

                                <div>
                                    <?php 
                                        $icon_formats_2 = get_field('icon_formats_2');
                                        if( !empty( $icon_formats_2 ) ): ?>
                                    <img src="<?php echo esc_url($icon_formats_2['url']); ?>" alt="<?php echo esc_attr($icon_formats_2['alt']); ?>" />
                                    <p><?php echo esc_attr($icon_formats_2['alt']); ?></p>
                                    <?php endif; ?>
                                </div>

                                <div>
                                    <?php 
                                        $icon_formats_3 = get_field('icon_formats_3');
                                        if( !empty( $icon_formats_3 ) ): ?>
                                    <img src="<?php echo esc_url($icon_formats_3['url']); ?>" alt="<?php echo esc_attr($icon_formats_3['alt']); ?>" />
                                    <p><?php echo esc_attr($icon_formats_3['alt']); ?></p>
                                    <?php endif; ?>
                                </div>

                                <div>
                                    <?php 
                                        $icon_formats_4 = get_field('icon_formats_4');
                                        if( !empty( $icon_formats_4 ) ): ?>
                                    <img src="<?php echo esc_url($icon_formats_4['url']); ?>" alt="<?php echo esc_attr($icon_formats_4['alt']); ?>" />
                                    <p><?php echo esc_attr($icon_formats_4['alt']); ?></p>
                                    <?php endif; ?>
                                </div>

                                <div>
                                    <?php 
                                        $icon_formats_5 = get_field('icon_formats_5');
                                        if( !empty( $icon_formats_5 ) ): ?>
                                    <img src="<?php echo esc_url($icon_formats_5['url']); ?>" alt="<?php echo esc_attr($icon_formats_5['alt']); ?>" />
                                    <p><?php echo esc_attr($icon_formats_5['alt']); ?></p>
                                    <?php endif; ?>
                                </div>

                                <div>
                                    <?php 
                                        $icon_formats_6 = get_field('icon_formats_6');
                                        if( !empty( $icon_formats_6 ) ): ?>
                                    <img src="<?php echo esc_url($icon_formats_6['url']); ?>" alt="<?php echo esc_attr($icon_formats_6['alt']); ?>" />
                                    <p><?php echo esc_attr($icon_formats_6['alt']); ?></p>
                                    <?php endif; ?>
                                </div>

                                <div>
                                    <?php 
                                        $icon_formats_7 = get_field('icon_formats_7');
                                        if( !empty( $icon_formats_7 ) ): ?>
                                    <img src="<?php echo esc_url($icon_formats_7['url']); ?>" alt="<?php echo esc_attr($icon_formats_7['alt']); ?>" />
                                    <p><?php echo esc_attr($icon_formats_7['alt']); ?></p>
                                    <?php endif; ?>
                                </div>

                                <div>
                                    <?php 
                                        $icon_formats_8 = get_field('icon_formats_8');
                                        if( !empty( $icon_formats_8 ) ): ?>
                                    <img src="<?php echo esc_url($icon_formats_8['url']); ?>" alt="<?php echo esc_attr($icon_formats_8['alt']); ?>" />
                                    <p><?php echo esc_attr($icon_formats_8['alt']); ?></p>
                                    <?php endif; ?>
                                </div>
                   
                            </div>
           
            </section>
            <!-----------------------------------
            -------------------------------------
            ------------------------------------->


            <!-----------------------------------
            -------------SOCIAL MEDIA------------
            ------------------------------------->
            <section id="Exemples">

                <div class="content column col-9 centered">

                    <div class="row columns">
                        <div class="image-container col-6 ">
                            <?php 
                                $imgsocial1 = get_field('image_social_media_1');
                                if( !empty( $imgsocial1 ) ): ?>
                                <img src="<?php echo esc_url($imgsocial1['url']); ?>" alt="<?php echo esc_attr($imgsocial1['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                

                        <div class="title-container col-6 ">
                                <?php
                                    $contenu_social_media_1 = get_field('contenu_social_media_1');
                                    if( $contenu_social_media_1 ): ?>
                                    <h3><?php echo $contenu_social_media_1['titre']; ?> <br><span><?php echo $contenu_social_media_1['sous_titre']; ?></span></h3>
                                    <p><?php echo $contenu_social_media_1['description']; ?></p>
                                    <h4><?php echo $contenu_social_media_1['titre_liste']; ?></h4>
                                    <ul>
                                        <li><?php echo $contenu_social_media_1['objet_1']; ?></li>
                                        <li><?php echo $contenu_social_media_1['objet_2']; ?></li>
                                    </ul>               
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="row columns last">

                        <div class="title-container col-5 ">
                                    <?php
                                        $contenu_social_media_2 = get_field('contenu_social_media_2');
                                        if( $contenu_social_media_2 ): ?>
                                        <h3><?php echo $contenu_social_media_2['titre']; ?> <br><span><?php echo $contenu_social_media_2['sous_titre']; ?></span></h3>
                                        <p><?php echo $contenu_social_media_2['description']; ?></p>
                                        <h4><?php echo $contenu_social_media_2['titre_liste']; ?></h4>
                                        <ul>
                                            <li><?php echo $contenu_social_media_2['objet_1']; ?></li>
                                            <li><?php echo $contenu_social_media_2['objet_2']; ?></li>
                                        </ul>               
                                    <?php endif; ?>
                        </div>

                        <div class="gutter col-1"></div>
                        
                        <div class="image-container col-6 ">
                            <?php 
                                $imgsocial2 = get_field('image_social_media_2');
                                if( !empty( $imgsocial2 ) ): ?>
                                <img src="<?php echo esc_url($imgsocial2['url']); ?>" alt="<?php echo esc_attr($imgsocial2['alt']); ?>" />
                            <?php endif; ?>
                        </div>

                  
                    </div>


                </div>
            </section>
            <!-----------------------------------
            -------------------------------------
            ------------------------------------->

            
            <!-----------------------------------
            -------------------STATS-------------
            ------------------------------------->
            <section id="Stats">

                <div class="content column col-9 centered">

                    <div class="stat">
                            <span class="stat-number"><?php echo the_field('nb_clients'); ?></span>
                            <span class="stat-text">clients</span>
                    </div>

                    <div class="stat">
                            <span class="stat-number"><?php echo the_field('nb_contenus'); ?></span>
                            <span class="stat-text">contenus/an</span>
                    </div>

                    <div class="stat">
                            <span class="stat-number"><?php echo the_field('nb_experts'); ?></span>
                            <span class="stat-text">experts</span>
                    </div>


                </div>
            </section>
            <!-----------------------------------
            -------------------------------------
            ------------------------------------->

             <!-----------------------------------
            -------------LIVRE BLANC-------------
            ------------------------------------->
            <section id="whiteBook">
                <div class="content columns col-9 centered">
                    <h3 class="col-12"><span><?php echo the_field('titre_livre_blanc'); ?></h3>
                    <p class="col-4"><?php echo the_field('description_livre_blanc'); ?></p>

                    <div class="col-12 buttonContainer">
                        <a href="<?php echo the_field('lien_livre_blanc'); ?>"class="button col-4"><?php echo the_field('texte_bouton_livre_blanc'); ?></a>
                    </div>

                </div>
            </section>
            <!-----------------------------------
            -------------------------------------
            ------------------------------------->

            
             <!-----------------------------------
            ---------------EXPERTISE-------------
            ------------------------------------->
            <section id="expertsTeam">

                <div class="content column col-12 centered">

                    <div class="row columns">
                        <div class="column col-12 center-text">
                        <?php 
                                $teamlogo = get_field('team_logo');
                                if( !empty( $teamlogo ) ): ?>
                                <img src="<?php echo esc_url($teamlogo['url']); ?>" alt="<?php echo esc_attr($teamlogo['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>

   
                    <div class="row columns">
                        <div class="column col-12 center-text">
                            <h3><?php echo the_field('team_title'); ?><br><span><?php echo the_field('team_subtitle'); ?></span><h3>
                        </div>

                    </div>

                        <div id="cardsContainer">
                

                                    <!--carte 1-->
                                    <div class="card card-offset">
                                        <div class="card-image">
                                            <?php 
                                                $cardimage1 = get_field('image_carte_1');
                                                if( !empty( $cardimage1 ) ): ?>
                                                <img src="<?php echo esc_url($cardimage1['url']); ?>" alt="<?php echo esc_attr($cardimage1['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>

                            
                                        <div class="card-content center-text">
                                            <?php
                                                $contenu_carte_1 = get_field('contenu_carte_1');
                                                if( $contenu_carte_1 ): ?>
                                                        <h4><?php echo $contenu_carte_1['titre_carte']; ?></h4>
                                                        <p><?php echo $contenu_carte_1['paragraphe_1']; ?></p>
                                                        <p><?php echo $contenu_carte_1['paragraphe_2']; ?></p>
                                                        <p><?php echo $contenu_carte_1['paragraphe_3']; ?></p>    
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    
                                    <!--carte 2-->
                                    <div class="card">
                                        <div class="card-image">
                                            <?php 
                                                $cardimage2 = get_field('image_carte_2');
                                                if( !empty( $cardimage2 ) ): ?>
                                                <img src="<?php echo esc_url($cardimage2['url']); ?>" alt="<?php echo esc_attr($cardimage2['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>

                                        <div class="card-content center-text">
                                            <?php
                                                $contenu_carte_2 = get_field('contenu_carte_2');
                                                if( $contenu_carte_2 ): ?>
                                                        <h4><?php echo $contenu_carte_2['titre_carte']; ?></h4>
                                                        <p><?php echo $contenu_carte_2['paragraphe_1']; ?></p>
                                                        <p><?php echo $contenu_carte_2['paragraphe_2']; ?></p>
                                                        <p><?php echo $contenu_carte_2['paragraphe_3']; ?></p>    
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    
                                    <!--carte 3-->
                                    <div class="card card-offset">
                                        <div class="card-image">
                                            <?php 
                                                $cardimage3 = get_field('image_carte_3');
                                                if( !empty( $cardimage3 ) ): ?>
                                                <img src="<?php echo esc_url($cardimage3['url']); ?>" alt="<?php echo esc_attr($cardimage3['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>

                                        <div class="card-content center-text">
                                        <?php
                                                $contenu_carte_3 = get_field('contenu_carte_3');
                                                if( $contenu_carte_3 ): ?>
                                                        <h4><?php echo $contenu_carte_3['titre_carte']; ?></h4>
                                                        <p><?php echo $contenu_carte_3['paragraphe_1']; ?></p>
                                                        <p>
                                                            <?php echo $contenu_carte_3['objet_1']; ?>
                                                            <br>
                                                            <?php echo $contenu_carte_3['objet_2']; ?>
                                                            <br>
                                                            <?php echo $contenu_carte_3['objet_3']; ?>
                                                            <br>
                                                            <?php echo $contenu_carte_3['objet_4']; ?>
                                                        </p>
                                            
                                            <?php endif; ?>
                                        </div>
            
                                    </div>
                                        
                        </div>
        
                </div>
            </section>
            <!-----------------------------------
            -------------------------------------
            ------------------------------------->

                       
             <!-----------------------------------
            ----------------CRÉDITS--------------
            ------------------------------------->
            <section id="Credits">
                <div class="content column col-9 centered">
                    <div class="row column">
                        <div class="col-12 text-center">
                            <h3><?php echo the_field('titre_credits'); ?></h3>
                        </div>
                    </div>

                    <div class="row columns">
                        <div class="col-12 text-center">
                            <h4><?php echo the_field('titre_pack_credits'); ?><h4>
                            <p><?php echo the_field('description_pack_credits'); ?></p>
                        </div>
                    </div>

                    <div class="row columns">
                        <div class="col-12 buttonContainer">
                                <a href="<?php echo the_field('lien_pack_credits'); ?>" class="button col-4 centered"><?php echo the_field('bouton_pack_credits'); ?></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-----------------------------------
            -------------------------------------
            ------------------------------------->

            <!-----------------------------------
            ----------------CONTACT--------------
            ------------------------------------->
            <section id="Contact">
                <div class="content column col-9 centered">

                    <div class="row columns">
                        <div class="col-6 centered text-center">
                            <h3><?php echo the_field('titre_contact'); ?><h3>
                        </div>
                    </div>

                    <div class="columns">
               
                            <?php echo the_field('formulaire_de_contact'); ?>                   
                      
                    </div>
                </div>
            </section>
            <!-----------------------------------
            -------------------------------------
            ------------------------------------->
    </div>

    <script>
        $('.multiple-items').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
            });
    </script>

</body>


    <footer id="footer">
        <div class="content column col-9 centered">

     
        
        </div>
    </footer>



</html>