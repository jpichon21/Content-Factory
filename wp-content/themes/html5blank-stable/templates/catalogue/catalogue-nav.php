<?php /* Template Name: catalogue nav  */  ?>

<section id="catalogueBlueNav">
    <div class="content column col-9 centered">
        <?php
                    $home = get_page_link(get_page_by_path('home'));
                    $cap_photo = get_page_link(get_page_by_path('catalogue-photos'));
                    $cap_video = get_page_link(get_page_by_path('catalogue-captation-video'));
                    $videos = get_page_link(get_page_by_path('catalogue-videos'));
                    $creations = get_page_link(get_page_by_path('catalogue-creations-graphiques'));
                    $podcast = get_page_link(get_page_by_path('catalogue-podcast'));;
                    $edito = get_page_link(get_page_by_path('catalogue-edito'));
                    $campagne = get_page_link(get_page_by_path('catalogue-campagne'));
                ?>
        <ul>
            <li><a class="cap_photo-link" href="<?php echo $home ?>">Accueil</a></li>
            <li class="separator"><a href="#">|</a></li>
            <li><a class="cap_photo-link" href="<?php echo $cap_photo ?>">Captation Photo</a></li>
            <li class="separator"><a href="#">|</a></li>
            <li><a class="cap_video-link" href="<?php echo $cap_video ?>">Captation Video</a></li>
            <li class="separator"><a href="#">|</a></li>
            <li><a class="videos-link" href="<?php echo $videos ?>">Vidéos Social Media</a></li>
            <li class="separator"><a href="#">|</a></li>
            <li><a class="creations-link" href="<?php echo $creations ?>">Créations Graphiques</a></li>
            <li class="separator"><a href="#">|</a></li>
            <li><a class="podcast-link" href="<?php echo $podcast ?>">Podcast</a></li>
            <li class="separator"><a href="#">|</a></li>
            <li><a class="edito-link" href="<?php echo $edito ?>">Édito</a></li>
            <li class="separator"><a href="#">|</a></li>
            <li><a class="campagne-link" href="<?php echo $campagne ?>">Campagne</a></li>
        </ul>
    </div>
</section>