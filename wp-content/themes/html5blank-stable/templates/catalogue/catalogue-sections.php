<?php /* Template Name: catalogue sections */  ?>
<!----------------------------------->


<?php if (have_rows('section')) :
            while (have_rows('section')) : the_row();?>

    <?php 
        $section = get_field('section');
        $image = get_sub_field('image');
        $credits = get_sub_field('nb_credits');
        $layout = get_sub_field('layout');
        $video_mp4 =  get_sub_field('video'); 
        $embed =  get_sub_field('embed'); 
     ?>

    <?php if ($layout == 'Section1') { ?>
        <section class="<?php echo $layout ?>">
            <div class="content column col-9 centered">
                <div class="row columns">

                    <?php if( $image) { ?>
                        <div class="image-container  col-6 ">
                            <a data-lightbox="image" href="<?php echo $image['url']; ?>" >
                                <img data-lightbox="image" src="<?php echo $image['url']; ?>" />
                            </a>
                        </div>
                    <?php } ?>

                    <?php if( $video_mp4) { ?>
                            <div class="video-container col-6 ">
                                <video controls>
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
                        <h3><?php the_sub_field('titre'); ?></h3>
                        <h4>Cas d'usage</h4>
                        <p><?php the_sub_field('description'); ?><br>
                            <strong>Durée : <?php the_sub_field('duree'); ?></strong>
                        </p>
                        <h4>Eléments à fournir pour la production</h4>

                        <ul>
                            <?php if(get_sub_field('element_1')) { ?>
                            <li><?php the_sub_field('element_1'); ?></li>
                            <?php } ?>
                            <?php if(get_sub_field('element_2')) { ?>
                            <li><?php the_sub_field('element_2'); ?></li>
                            <?php } ?>
                            <?php if(get_sub_field('element_3')) { ?>
                            <li><?php the_sub_field('element_3'); ?></li>
                            <?php } ?>
                            <?php if(get_sub_field('element_4')) { ?>
                            <li><?php the_sub_field('element_4'); ?></li>
                            <?php } ?>
                        </ul>

                        <h4>Estimation en crédits*</h4>
                        <div class="bar-infos col-9">
                            <div class="bar">
                                <?php 
                                                                    $valuesec1 = $credits;
                                                                    $valuebarsec1 = ($valuesec1/15)*100;
                                                                ?>
                                <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarsec1 ?>%;"
                                    aria-valuenow="<?php the_sub_field('nb_credits'); ?>0" aria-valuemin="0"
                                    aria-valuemax="150"></div>
                            </div>
                            <p><strong><?php echo($credits) ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>


    <?php if ($layout == 'Section2') { ?>
        <section class="<?php echo $layout ?>">
            <div class="content column col-9 centered">
                <div class="row columns">

                    <div class="title-container col-5">
                        <h3><?php the_sub_field('titre'); ?></h3>
                        <h4>Cas d'usage</h4>
                        <p><?php the_sub_field('description'); ?><br>
                            <strong>Durée : <?php the_sub_field('duree'); ?></strong>
                        </p>
                        <h4>Eléments à fournir pour la production</h4>

                        <ul>
                            <?php if(get_sub_field('element_1')) { ?>
                            <li><?php the_sub_field('element_1'); ?></li>
                            <?php } ?>
                            <?php if(get_sub_field('element_2')) { ?>
                            <li><?php the_sub_field('element_2'); ?></li>
                            <?php } ?>
                            <?php if(get_sub_field('element_3')) { ?>
                            <li><?php the_sub_field('element_3'); ?></li>
                            <?php } ?>
                            <?php if(get_sub_field('element_4')) { ?>
                            <li><?php the_sub_field('element_4'); ?></li>
                            <?php } ?>
                        </ul>

                        <h4>Estimation en crédits*</h4>
                        <div class="bar-infos col-9">
                            <div class="bar">
                                <?php 
                                                                    $valuesec1 = $credits;
                                                                    $valuebarsec1 = ($valuesec1/15)*100;
                                                                ?>
                                <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarsec1 ?>%;"
                                    aria-valuenow="<?php the_sub_field('nb_credits'); ?>0" aria-valuemin="0"
                                    aria-valuemax="150"></div>
                            </div>
                            <p><strong><?php echo($credits) ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                        </div>
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
                                <video controls>
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
            </div>
        </section>
    <?php } ?>



<?php endwhile; ?>
<?php endif; ?>
<!----------------------------------->