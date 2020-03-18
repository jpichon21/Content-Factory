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
            <li><a href="<?php echo $campagne ?>">Campagne</a></li>
        </ul>
    </div>
</section>