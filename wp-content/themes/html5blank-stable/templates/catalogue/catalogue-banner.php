<?php /* Template Name: catalogue banner  */  ?>

<section id="catalogueBlackBanner">
                <div class="content column col-9 centered">

                    <div class="columns">

                        <div class="column col-5">
                            <h3><?php echo get_field('titre_consigne', 'options'); ?></h3>
                        </div>

                        <div class="column col-1"></div>

                        <div class="column col-6">
                            <p class="description">
                                <?php echo get_field('objet_consigne_1', 'options'); ?><br>
                                <?php echo get_field('objet_consigne_2', 'options'); ?><br>
                                <?php echo get_field('objet_consigne_3', 'options'); ?><br>
                                <?php echo get_field('objet_consigne_4', 'options'); ?><br>
                                <?php echo get_field('objet_consigne_5', 'options'); ?><br>
                            </p>
                        </div>
                   
                    </div>


                </div>
            </section>