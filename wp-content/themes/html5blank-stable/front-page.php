<?php get_header(); ?>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZWDQGN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


        <div id="mainContainer" class="container">

            <header>
                <nav id="menuNav" class="column col-9 centered">
                    <?php 
                        $menulogo = get_field('menu_logo');
                        if( !empty( $menulogo ) ): ?>
                    <img id="menuLogo" src="<?php echo esc_url($menulogo['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <ul class>
                    <?php $catalogue = get_page_link(get_page_by_path('catalogue-photos')); ?>
                        <li><a href="#CCM">Comment ça marche ?</a></li>
                        <li class="separator"> | </li>
                        <li><a href="<?php echo $catalogue ?>">Catalogue</a></li>
                        <li class="separator"> | </li>
                        <li><a href="#Formats">Les formats</a></li>
                        <li class="separator"> | </li>
                        <li><a href="#Exemples">Exemples</a></li>
                        <li class="separator"> | </li>
                        <li><a href="#Credits">Prix</a></li>
                        <li class="separator"> | </li>
                        <li><a href="#Contact">Contact</a></li>
                    </ul>
                </nav>
            </header>

            <!----------------------------------->
            <?php $herobg = get_field('herobg') ?>
            <section id="headerHero" class="container" style="background-image: url(<?php echo $herobg['url']; ?>);">
                <div class="content column col-9 centered">
                    <div class="row columns">
                        <h2 class="column col-6"> <?php echo get_field('headerhero'); ?><br><span class="tagline">Story, Social Content, Podcast, Film Tv, Packshot, Video, Motion, Infographie, Photo Lifestyle, Photo Mannequin</span> </h2>
    
                    </div>
                    <div class="row columns">
                        <a id="headerHeroBtn" 
                            href="<?php echo get_field('header_hero_lien'); ?>"><?php echo get_field('header_hero_btn'); ?>
                        </a>
                    </div>
                </div>


                <div id="bottomHeaderBanner" class="container">
           
                    <div class="content column col-9 centered">
                        <div class="columns">
                            <div class="col-4">
                                <p><?php echo get_field('header_hero_garantie1'); ?>
                            </div>
                            <div class="col-4">
                                <p><?php echo get_field('header_hero_garantie2'); ?>
                            </div>

                            <div class="col-4">
                                <p><?php echo get_field('header_hero_garantie3'); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!----------------------------------->

            <!----------------------------------->
            <section id="blackBanner">
                <div class="content column col-9 centered">

                    <div class="row columns">
                        <div class="column col-12 ">
                            <p><?php echo get_field('tagline_references'); ?></p>
                        </div>
                    </div>

                    <div class="row columns">
                        <div class="column col-1"></div>

                        <div class="col-12 slider multiple-items-2">

                     
                            <?php 
                                            $image_reference_1 = get_field('image_reference_1');
                                            if( !empty( $image_reference_1 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_1['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_1['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_1['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php 
                                            $image_reference_2 = get_field('image_reference_2');
                                            if( !empty( $image_reference_2 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_2['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_2['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_2['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php 
                                            $image_reference_3 = get_field('image_reference_3');
                                            if( !empty( $image_reference_3 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_3['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_3['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_3['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php 
                                            $image_reference_4 = get_field('image_reference_4');
                                            if( !empty( $image_reference_4 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_4['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_4['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_4['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php 
                                            $image_reference_5 = get_field('image_reference_5');
                                            if( !empty( $image_reference_5 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_5['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_5['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_5['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            
                     
                            <?php 
                                            $image_reference_6 = get_field('image_reference_6');
                                            if( !empty( $image_reference_6 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_6['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_6['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_6['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php 
                                            $image_reference_7 = get_field('image_reference_7');
                                            if( !empty( $image_reference_7 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_7['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_7['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_7['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php 
                                            $image_reference_8 = get_field('image_reference_8');
                                            if( !empty( $image_reference_8 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_8['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_8['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_8['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php 
                                            $image_reference_9 = get_field('image_reference_9');
                                            if( !empty( $image_reference_9 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_9['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_9['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_9['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php 
                                            $image_reference_10 = get_field('image_reference_10');
                                            if( !empty( $image_reference_10 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_10['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_10['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_10['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            
                            <?php 
                                            $image_reference_11 = get_field('image_reference_11');
                                            if( !empty( $image_reference_11 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_11['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_11['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_11['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php 
                                            $image_reference_12 = get_field('image_reference_12');
                                            if( !empty( $image_reference_12 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_12['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_12['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_12['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            
                            <?php 
                                            $image_reference_13 = get_field('image_reference_13');
                                            if( !empty( $image_reference_13 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_13['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_13['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_13['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            
                            <?php 
                                            $image_reference_14 = get_field('image_reference_14');
                                            if( !empty( $image_reference_14 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_14['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_14['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_14['alt']); ?></p>
                                </div>
                            <?php endif; ?>

                            
                            <?php 
                                            $image_reference_15 = get_field('image_reference_15');
                                            if( !empty( $image_reference_15 ) ): ?>
                                <div>
                                <img src="<?php echo esc_url($image_reference_15['url']); ?>"
                                    alt="<?php echo esc_attr($image_reference_15['alt']); ?>" />
                                <p><?php echo esc_attr($image_reference_15['alt']); ?></p>
                                </div>
                            <?php endif; ?>
                      
                      
                      
                      

                       

                        </div>

                    

                        <div class="column col-1"></div>
                    </div>

                </div>
            </section>
            <!----------------------------------->


            <!----------------------------------->
            <section id="firstBanner">
                <div class="content column col-9 centered">

                    <div class="columns">
                        <div class="column col-5">
                            <h3><?php echo get_field('titre_banner_1'); ?></h3>
                        </div>

                        <div class="column col-1"></div>

                        <div class="column col-6">

                            <p class="description"><?php echo get_field('description_banner_1'); ?></p>
                        </div>
                    </div>


                </div>
            </section>
            <!----------------------------------->


            <!----------------------------------->
            <section id="CCM">

                <div class="content column col-9 centered">

                    <div class="columns">

                        <div class="column col-6 image-container">
                            <?php 
                                    $imageccm = get_field('image_ccm');
                                    if( !empty( $imageccm ) ): ?>
                            <img id="smartPhone" src="<?php echo esc_url($imageccm['url']); ?>"
                                alt="<?php echo esc_attr($imageccm['alt']); ?>" />
                            <?php endif; ?>
                        </div>

                        <div class="column col-6 rightContent">
                            <h3> Comment <strong>ça marche ?</strong></h3>
                            <div>
                                <h4><?php echo get_field('titre_ccm_1'); ?></h4>
                                <p><?php echo get_field('texte_ccm_1'); ?></p>
                            </div>
                            <div>
                                <h4><?php echo get_field('titre_ccm_2'); ?></h4>
                                <p><?php echo get_field('texte_ccm_2'); ?></p>
                            </div>
                            <div>
                                <h4><?php echo get_field('titre_ccm_3'); ?></h4>
                                <p><?php echo get_field('texte_ccm_3'); ?></p>
                            </div>
                        </div>

                        <div class="col-12 buttonContainer">
                            <a href="<?php echo $catalogue ?>"
                                class="button col-4 centered"><?php echo get_field('bouton_ccm'); ?></a>
                        </div>
         

                    </div>

                </div>

            </section>
            <!----------------------------------->

            <!----------------------------------->
            <section id="Formats">
            <div class="content column col-9 centered">
                <div class="row columns">
                    <div class="title-container col-7 centered">
                        <h3><?php echo get_field('titre_formats'); ?></h3>
                    </div>
                    <div>
                    </div>

                    <div class="col-12 slider multiple-items">

                     
                            <?php 
                                        $icon_formats_1 = get_field('icon_formats_1');
                                        if( !empty( $icon_formats_1 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_1['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_1['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_1['alt']); ?></p>
                                    </div>
                            <?php endif; ?>

                            
                            <?php 
                                        $icon_formats_2 = get_field('icon_formats_2');
                                        if( !empty( $icon_formats_2 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_2['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_2['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_2['alt']); ?></p>
                                    </div>
                            <?php endif; ?>
                      

                            
                            <?php 
                                        $icon_formats_3 = get_field('icon_formats_3');
                                        if( !empty( $icon_formats_3 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_3['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_3['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_3['alt']); ?></p>
                                    </div>
                            <?php endif; ?>
                      
                            
                            <?php 
                                        $icon_formats_4 = get_field('icon_formats_4');
                                        if( !empty( $icon_formats_4 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_4['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_4['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_4['alt']); ?></p>
                                    </div>
                            <?php endif; ?>
                      
                            
                            <?php 
                                        $icon_formats_5 = get_field('icon_formats_5');
                                        if( !empty( $icon_formats_5 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_5['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_5['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_5['alt']); ?></p>
                                    </div>
                            <?php endif; ?>
                      
                            
                            <?php 
                                        $icon_formats_6 = get_field('icon_formats_6');
                                        if( !empty( $icon_formats_6 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_6['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_6['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_6['alt']); ?></p>
                                    </div>
                            <?php endif; ?>
                      
                            
                            <?php 
                                        $icon_formats_7 = get_field('icon_formats_7');
                                        if( !empty( $icon_formats_7 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_7['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_7['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_7['alt']); ?></p>
                                    </div>
                            <?php endif; ?>
                      
                            
                            <?php 
                                        $icon_formats_8 = get_field('icon_formats_8');
                                        if( !empty( $icon_formats_8 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_8['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_8['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_8['alt']); ?></p>
                                    </div>
                            <?php endif; ?>

                            <?php 
                                        $icon_formats_9 = get_field('icon_formats_9');
                                        if( !empty( $icon_formats_9 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_9['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_9['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_9['alt']); ?></p>
                                    </div>
                            <?php endif; ?>

                            <?php 
                                        $icon_formats_10 = get_field('icon_formats_10');
                                        if( !empty( $icon_formats_10 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_10['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_10['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_10['alt']); ?></p>
                                    </div>
                            <?php endif; ?>

                            <?php 
                                        $icon_formats_11 = get_field('icon_formats_11');
                                        if( !empty( $icon_formats_11 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_11['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_11['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_11['alt']); ?></p>
                                    </div>
                            <?php endif; ?>

                            <?php 
                                        $icon_formats_12 = get_field('icon_formats_12');
                                        if( !empty( $icon_formats_12 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_12['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_12['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_12['alt']); ?></p>
                                    </div>
                            <?php endif; ?>

                            <?php 
                                        $icon_formats_13 = get_field('icon_formats_13');
                                        if( !empty( $icon_formats_13 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_13['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_13['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_13['alt']); ?></p>
                                    </div>
                            <?php endif; ?>

                            <?php 
                                        $icon_formats_14 = get_field('icon_formats_14');
                                        if( !empty( $icon_formats_14 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_14['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_14['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_14['alt']); ?></p>
                                    </div>
                            <?php endif; ?>

                            <?php 
                                        $icon_formats_15 = get_field('icon_formats_15');
                                        if( !empty( $icon_formats_15 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_15['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_15['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_15['alt']); ?></p>
                                    </div>
                            <?php endif; ?>

                            <?php 
                                        $icon_formats_16 = get_field('icon_formats_16');
                                        if( !empty( $icon_formats_16 ) ): ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_formats_16['url']); ?>"
                                            alt="<?php echo esc_attr($icon_formats_16['alt']); ?>" />
                                        <p><?php echo esc_attr($icon_formats_16['alt']); ?></p>
                                    </div>
                            <?php endif; ?>
                      
                      
        

            </section>
 
            <!----------------------------------->


            <!----------------------------------->
            <section id="Exemples-S">
      
            <section id="Section1">
                <?php
                    $exemple1 = get_field('exemple_format_1');
                    if( $exemple1 ): ?>

                <?php 
                    $titre = $exemple1['titre'];
                    $image = $exemple1['image'];
                    $video_mp4 = $exemple1['video'];
                    $embed = $exemple1['embed'];
                    $description = $exemple1['description'];
                    $volume = $exemple1['volume'];
                    $element1 = $exemple1['element_1'];
                    $element2 = $exemple1['element_2'];
                    $element3 = $exemple1['element_3'];
                    $element4 = $exemple1['element_4'];
                    $production1 = $exemple1['production_1'];
                    $production2 = $exemple1['production_2'];
                    $production3 = $exemple1['production_3'];
                    $production4 = $exemple1['production_4'];
                    $hide_credits = $exemple1['hide_credits'];
                    $credits = $exemple1['nb_credits'];
                ?>
                        
                <div class="content column col-9 centered">
                    <div class="row columns">

                        <?php if( $image) { ?>
                            <div class="image-container  col-6 " id="Exemples">
                                <a data-lightbox="image" href="<?php echo $image['url']; ?>" >
                                    <img data-lightbox="image" src="<?php echo $image['url']; ?>" />
                                </a>
                            </div>
                        <?php } ?>

                        <?php if( $video_mp4) { ?>
                                <div class="video-container col-6 ">
                                    <video controls muted loop>
                                        <source src="<?php echo $video_mp4['url']; ?>" />
                                    </video>
                                </div>
                        <?php } ?>

                        <?php if( $embed) { ?>
                                <div class="video-container col-6 ">
                                    <?php echo $embed ?>
                                </div>
                        <?php } ?>

                        <div class="column col-1"></div>
                        <div class="title-container col-5">
                            <h3><?php echo $titre ?></h3>
                            <h4>Cas d'usage</h4>
                            <p><?php echo $description  ?><br>
                                <strong>Volume : <?php echo $volume  ?></strong>
                            </p>
                            <h4>Eléments à fournir pour la production</h4>

                            <ul>
                                <?php if( $element1) { ?>
                                    <li><span><?php echo $element1; ?></span></li>
                                <?php } ?>
                                <?php if( $element2) { ?>
                                    <li><span><?php echo $element2; ?></span></li>
                                <?php } ?>
                                <?php if( $element3) { ?>
                                    <li><span><?php echo $element3; ?></span></li>
                                <?php } ?>
                                <?php if( $element4) { ?>
                                    <li><span><?php echo $element4; ?></span></li>
                                <?php } ?>
                            
                            </ul>

                            <h4>Production comprenant</h4>

                            <ul>
                                <?php if( $production1) { ?>
                                    <li><span><?php echo $production1; ?></span></li>
                                <?php } ?>
                                <?php if( $production2) { ?>
                                    <li><span><?php echo $production2; ?></span></li>
                                <?php } ?>
                          
                                <?php if( $production3) { ?>
                                    <li><span><?php echo $production3; ?></span></li>
                                <?php } ?>
                          
                                <?php if( $production4) { ?>
                                    <li><span><?php echo $production4; ?></span></li>
                                <?php } ?>
                            </ul>
                        
                            <h4>Estimation en crédits*</h4>
                            <!----------------------------------->
                            <?php if( $hide_credits ): ?>
                                <div class="bar-infos col-9">
                                    <p> Crédits à estimer en fonction du besoin </p>
                                </div>
                            <?php endif; ?>
                            <!----------------------------------->

                            <!----------------------------------->
                            <?php if(! $hide_credits ): ?>
                                <div class="bar-infos col-9">
                                    <div class="bar">
                                        <?php 
                                                                            $valuesec1 = $credits;
                                                                            $valuebarsec1 = ($valuesec1/40)*100;
                                                                        ?>
                                        <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarsec1 ?>%;"
                                            aria-valuenow="<?php the_sub_field('nb_credits'); ?>0" aria-valuemin="0"
                                            aria-valuemax="400"></div>

                                    </div>
                                    <p><strong><?php echo($credits) ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                                </div>
                            <?php endif; ?>
                            <!----------------------------------->
                                                
                                                    
                        </div>
                    </div>
                </div>
            </section>
            <?php endif ?>
            <!----------------------------------->

            <!----------------------------------->
            
            <section id="Section2">
            
                <?php
                    $exemple2 = get_field('exemple_format_2');
                    if( $exemple2 ): ?>

                    <?php 
                        $titre = $exemple2['titre'];
                        $image = $exemple2['image'];
                        $video_mp4 = $exemple2['video'];
                        $embed = $exemple2['embed'];
                        $description = $exemple2['description'];
                        $volume = $exemple2['volume'];
                        $element1 = $exemple2['element_1'];
                        $element2 = $exemple2['element_2'];
                        $element3 = $exemple2['element_3'];
                        $element4 = $exemple2['element_4'];
                        $production1 = $exemple2['production_1'];
                        $production2 = $exemple2['production_2'];
                        $production3 = $exemple2['production_3'];
                        $production4 = $exemple2['production_4'];
                        $hide_credits = $exemple2['hide_credits'];
                        $credits = $exemple2['nb_credits'];
                    ?>
                      
                    <div class="content column col-9 centered">
                        <div class="row columns">
                        

                            <div class="title-container col-5">
                                <h3><?php echo $titre; ?></h3>
                                <h4>Cas d'usage</h4>
                                <p><?php echo $description; ?><br>
                                    <strong>Volume : <?php echo $volume;  ?></strong>
                                </p>

                                <h4>Eléments à fournir pour la production</h4>
                                    <ul>
                                        <?php if( $element1) { ?>
                                            <li><span><?php echo $element1; ?></span></li>
                                        <?php } ?>
                                        <?php if( $element2) { ?>
                                            <li><span><?php echo $element2; ?></span></li>
                                        <?php } ?>
                                        <?php if( $element3) { ?>
                                            <li><span><?php echo $element3; ?></span></li>
                                        <?php } ?>
                                        <?php if( $element4) { ?>
                                            <li><span><?php echo $element4; ?></span></li>
                                        <?php } ?>
                                    </ul>

                                <h4>Production comprenant</h4>
                                    <ul>
                                        <?php if( $production1) { ?>
                                            <li><span><?php echo $production1; ?></span></li>
                                        <?php } ?>
                                        <?php if( $production2) { ?>
                                            <li><span><?php echo $production2; ?></span></li>
                                        <?php } ?>
                                
                                        <?php if( $production3) { ?>
                                            <li><span><?php echo $production3; ?></span></li>
                                        <?php } ?>
                                
                                        <?php if( $production4) { ?>
                                            <li><span><?php echo $production4; ?></span></li>
                                        <?php } ?>
                                    </ul>

                                <h4>Estimation en crédits*</h4>

                                <!----------------------------------->
                                <?php if( $hide_credits ): ?>
                                    <div class="bar-infos col-9">
                                        <p> Crédits à estimer en fonction du besoin </p>
                                    </div>
                                <?php endif; ?>
                                <!----------------------------------->

                                <!----------------------------------->
                                <?php if(! $hide_credits ): ?>
                                    <div class="bar-infos col-9">
                                        <div class="bar">
                                            <?php 
                                                                                $valuesec1 = $credits;
                                                                                $valuebarsec1 = ($valuesec1/40)*100;
                                                                            ?>
                                            <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarsec1 ?>%;"
                                                aria-valuenow="<?php the_sub_field('nb_credits'); ?>0" aria-valuemin="0"
                                                aria-valuemax="400"></div>

                                        </div>
                                        <p><strong><?php echo($credits) ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                                    </div>
                                <?php endif; ?>
                                <!----------------------------------->
                    
                            </div>
                

                            <div class="column col-1"></div>

                            <?php if( $image) { ?>
                                <div class="image-container  col-6 ">
                                    <a data-lightbox="image" href="<?php echo $image['url']; ?>" >
                                        <img data-lightbox="image" src="<?php echo $image['url']; ?>" />
                                    </a>
                                </div>
                            <?php } ?>

                            <?php if( $video_mp4) { ?>
                                    <div class="video-container col-6 ">
                                        <video controls muted loop>
                                            <source src="<?php echo $video_mp4['url']; ?>" />
                                        </video>
                                    </div>
                            <?php } ?>

                            <?php if( $embed) { ?>
                                    <div class="video-container col-6 ">
                                        <?php echo $embed; ?>
                                    </div>
                            <?php } ?>
                    
                    
                    </div>
                         <div class="row columns">
                                <div class="col-12 buttonContainer ">
                                    <a href="<?php echo $catalogue ?>" class="button button-black col-4 centered"><?php echo get_field('bouton_exemples'); ?></a>
                                </div>
                            </div>              
                </div>
            </section>
            <?php endif ?>
       

            </section>
            <!----------------------------------->

            <!----------------------------------->
            <section id="Stats">

                <div class="content column col-9 centered">

                    <div class="stat">
                        <span class="stat-number"><?php echo get_field('nb_clients'); ?></span>
                        <span class="stat-text">clients</span>
                    </div>

                    <div class="stat">
                        <span class="stat-number"><?php echo get_field('nb_contenus'); ?></span>
                        <span class="stat-text">contenus/an</span>
                    </div>

                    <div class="stat">
                        <span class="stat-number"><?php echo get_field('nb_experts'); ?></span>
                        <span class="stat-text">experts</span>
                    </div>


                </div>
            </section>
            <!----------------------------------->

            <!----------------------------------->
            <?php if( get_field('show_whitebook') ): ?>
               
                <section id="whiteBook">
                    <div class="content columns col-9 centered">
                        <h3 class="col-12"><span><?php echo get_field('titre_livre_blanc'); ?></h3>
                        <p class="col-4"><?php echo get_field('description_livre_blanc'); ?></p>

                        <div class="col-12 buttonContainer">
                            <a href="<?php echo get_field('lien_livre_blanc'); ?>"
                                class="button col-4"><?php echo get_field('texte_bouton_livre_blanc'); ?></a>
                        </div>

                    </div>
                </section>
        
	        <?php endif; ?>
            <!----------------------------------->

            <!----------------------------------->
            <section id="expertsTeam">

                <div class="content column col-12 centered">

                    <div class="row columns">
                        <div class="column col-12 center-text">
                            <?php 
                                    $teamlogo = get_field('team_logo');
                                    if( !empty( $teamlogo ) ): ?>
                            <img id="teamLogo" src="<?php echo esc_url($teamlogo['url']); ?>"
                                alt="<?php echo esc_attr($teamlogo['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="row columns">
                        <div class="column col-12 center-text">
                            <h3><?php echo get_field('team_title'); ?><br><span><?php echo get_field('team_subtitle'); ?></span>
                                <h3>
                        </div>

                    </div>

                    <div id="cardsContainer">


                        <!--carte 1-->
                        <div class="card card-offset">
                            <div class="card-image">
                                <?php 
                                                    $cardimage1 = get_field('image_carte_1');
                                                    if( !empty( $cardimage1 ) ): ?>
                                <img src="<?php echo esc_url($cardimage1['url']); ?>"
                                    alt="<?php echo esc_attr($cardimage1['alt']); ?>" />
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
                                <img src="<?php echo esc_url($cardimage2['url']); ?>"
                                    alt="<?php echo esc_attr($cardimage2['alt']); ?>" />
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
                                <img src="<?php echo esc_url($cardimage3['url']); ?>"
                                    alt="<?php echo esc_attr($cardimage3['alt']); ?>" />
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
            <!----------------------------------->


            <!----------------------------------->
            <section id="Credits">
                <div class="content column col-9 centered">
                    <div class="row column">
                        <div class="col-12 text-center">
                            <h3><?php echo get_field('titre_credits'); ?></h3>
                        </div>
                    </div>

                    <div class="row columns">
                        <div class="col-12 text-center">
                            <h4><?php echo get_field('titre_pack_credits'); ?><h4>
                                    <p><?php echo get_field('description_pack_credits'); ?></p>
                        </div>
                    </div>

                    <div class="row columns">
                        <div class="col-12 buttonContainer">
                            <a href="<?php echo get_field('lien_pack_credits'); ?>"
                                class="button col-4 centered"><?php echo get_field('bouton_pack_credits'); ?></a>
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
                <?php $catalogue = get_page_link(get_page_by_path('catalogue-photos')); ?>
                    <li><a href="#CCM">Comment ça marche ?</a></li>
                    <li class="separator"> | </li>
                    <li><a href="<?php echo $catalogue ?>">Catalogue</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#Formats">Les formats</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#Exemples">Exemples</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#Credits">Prix</a></li>
                    <li class="separator"> | </li>
                    <li><a href="#Contact">Contact</a></li>
                </ul>
            </nav>
        </footer>
        <!----------------------------------->

        <script>
            $('.multiple-items').slick({
                dots: true,
                infinite: true,
                autoplay: true,
                speed: 200,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
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
                ]
            });
        </script>
         <script>
            $('.multiple-items-2').slick({
                dots: false,
                arrows: false,
                infinite: true,
                autoplay: true,
                speed: 200,
                slidesToShow: 5,
                slidesToScroll: 1,
                responsive: [{
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
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }
                ]
            });
        </script>


<?php get_footer();?>
    </body>

</html>