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

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.typekit.net/zuv7hqs.css">
    <link rel="stylesheet" src="main.css">
    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/spectre.min.css'; ?>">

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
                    <li><a href="#">Comment ça marche ?</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#">Les formats</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#">Exemples</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#">Chiffres</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#">Prix</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#">Contact</a></li>

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
                        <a id="headerHeroBtn" class="column col-6" href=""><?php echo the_field('header_hero_btn'); ?> </a>
                    </div>


                </div>
        

                <div id="bottomHeaderBanner" class="container">
                    <div class="column col-9 centered">
                        <ul > 
                            <li><?php echo the_field('header_hero_garantie1'); ?></li>
                            <li><?php echo the_field('header_hero_garantie2'); ?></li>
                            <li><?php echo the_field('header_hero_garantie3'); ?></li>
                        </ul>
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
                            <p>Creative factory est utilisée est appréciée au quotidien par...</p>
                        </div>
                    </div>

                    <div class="row columns">
                                <div class="column col-1"></div>
                                <div class="column col-2"><img src="<?php echo esc_url($menulogo['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                                <div class="column col-2"><img src="<?php echo esc_url($menulogo['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                                <div class="column col-2"><img src="<?php echo esc_url($menulogo['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                                <div class="column col-2"><img src="<?php echo esc_url($menulogo['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                                <div class="column col-2"><img src="<?php echo esc_url($menulogo['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
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
                                    
                            <p><?php echo the_field('description_banner_1'); ?></p>
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
            <section id="bluePart">
                
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
            ------------------USECASES-----------
            ------------------------------------->
            <section id="useCases">

                <div class="content column col-9 centered">
                    <div class="columns">

                        <div class="title-container col-7 centered">
                            <h3>Creative Factory est adaptée à tous les cas <span>d'usage marketing</span></h3>
                        </div>
                        
                    <div class="columns">

                </div>
            </section>
            <!-----------------------------------
            -------------------------------------
            ------------------------------------->


            <!-----------------------------------
            -------------SOCIAL MEDIA------------
            ------------------------------------->
            <section id="socialMedia">

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
                                    <h3>Prises de parole <br><span>Social Media </span></h3>
                                    <p>Pour enrichir leurs prises de parole Social Media et dynamiser les contenus sur les multiples plateformes du groupe Pierre & Vacances Center Parcs, nous avons mis en place une Content Factory avec plus de 350 Content Credits annuel, de nombreux shootings pour créer une banque d’images Social Media dédiée, ainsi qu’un content maker 2 jours par semaine pour absorber les besoins croissants de production.</p>
                                    <h4>KPIs Creative Factory</h4>
                                    <ul>
                                        <li>1,2M de vues en 2017 contre 706K en 2016</li>
                                        <li>+300 contenus produits par la Content Factory en un an</li>
                                        <li>(la moitié en contenus animés)</li>
                                    </ul>
                        </div>
                    </div>

                    <div class="row columns last">

                        <div class="title-container col-5 ">
                                    <h3>Prises de parole <br><span>Social Media </span></h3>
                                    <p>Pour enrichir leurs prises de parole Social Media et dynamiser les contenus sur les multiples plateformes du groupe Pierre & Vacances Center Parcs, nous avons mis en place une Content Factory avec plus de 350 Content Credits annuel, de nombreux shootings pour créer une banque d’images Social Media dédiée, ainsi qu’un content maker 2 jours par semaine pour absorber les besoins croissants de production.</p>
                                    <h4>KPIs Creative Factory</h4>
                                    <ul>
                                        <li>1,2M de vues en 2017 contre 706K en 2016</li>
                                        <li>+300 contenus produits par la Content Factory en un an</li>
                                        <li>(la moitié en contenus animés)</li>
                                    </ul>
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
            <section id="statsBanner">

                <div class="content column col-9 centered">

                    <div class="stat">
                            <span class="stat-number">150</span>
                            <span class="stat-text">clients</span>
                    </div>

                    <div class="stat">
                            <span class="stat-number">+13 000</span>
                            <span class="stat-text">contenus/an</span>
                    </div>

                    <div class="stat">
                            <span class="stat-number">40</span>
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
                    <h3 class="col-12"><span>Téléchargez</span> notre Livre Blanc !</h3>
                    <p class="col-4">Ce livre contient les best practices en création de contenu à mettre en place en 2020</p>

                    <div class="col-12 buttonContainer">
                        <a class="button col-4">Téléchargez gratuitement</a>
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

                <div class="content column col-9 centered">

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
                            <h3>des équipes expertes<br><span>+ de 10 ans d'expérience</span><h3>
                        </div>

                    </div>

                    <div class="row columns" id="cardsContainer">

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
                                <h4>Des équipes spécialisées</h4>
                                <p>Des créatifs (Directeur de création, concepteur rédacteur, directeur artistique, artistes, manager)</p>
                                <p>Des influenceurs (Youtubeurs, blogueur, influenceurs Instagram et Snapchat)</p>
                                <p>Des stratèges (Direction conseil, Digital strategist, planneur strategique)</p>
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
                                <h4>Des équipes spécialisées</h4>
                                <p>Des créatifs (Directeur de création, concepteur rédacteur, directeur artistique, artistes, manager)</p>
                                <p>Des influenceurs (Youtubeurs, blogueur, influenceurs Instagram et Snapchat)</p>
                                <p>Des stratèges (Direction conseil, Digital strategist, planneur strategique)</p>
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
                                <h4>Des équipes spécialisées</h4>
                                <p>Des créatifs (Directeur de création, concepteur rédacteur, directeur artistique, artistes, manager)</p>
                                <p>Des influenceurs (Youtubeurs, blogueur, influenceurs Instagram et Snapchat)</p>
                                <p>Des stratèges (Direction conseil, Digital strategist, planneur strategique)</p>
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
                            <h3>Votre pack de <span>crédits</span></h3>
                        </div>
                    </div>

                    <div class="row columns">
                        <div class="col-12 text-center">
                            <h4>Le Pack 1<h4>
                            <p>A partir de 4000 euros pour 40 heures de travail + le studio + le matériel</p>
                        </div>
                    </div>

                    <div class="row columns">
                        <div class="col-12 buttonContainer">
                                <a class="button col-4 centered">Commencer</a>
                        </div>
                    </div>
                    

                </div>

            <section>


            <!-----------------------------------
            -------------------------------------
            ------------------------------------->




    </div>

</body>

    <footer id="footer">
        <div class="content column col-9 centered"></div>
    </footer>



</html>