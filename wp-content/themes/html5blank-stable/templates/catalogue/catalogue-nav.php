<?php /* Template Name: catalogue nav  */  ?>

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
            <li><a class="photos-link" href="<?php echo $photos ?>">Photos</a></li>
            <li class="separator"><a href="#">|</a></li>
            <li><a class="videos-link" href="<?php echo $videos ?>">Videos</a></li>
            <li class="separator"><a href="#">|</a></li>
            <li><a class="creations-link" href="<?php echo $creations ?>">Creations graphiques</a></li>
            <li class="separator"><a href="#">|</a></li>
            <li><a class="podcast-link" href="<?php echo $podcast ?>">Podcast</a></li>
            <li class="separator"><a href="#">|</a></li>
            <li><a class="edito-link" href="<?php echo $edito ?>">Edito</a></li>
            <li class="separator"><a href="#">|</a></li>
            <li><a class="campagne-link" href="<?php echo $campagne ?>">Campagne</a></li>
        </ul>
    </div>
</section>