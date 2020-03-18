<?php /* Template Name: catalogue sections */  ?>
            <!----------------------------------->
            <?php if( get_field('contenu_section_1')) { ?>
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
                                                <?php if( $contenusec1['element_1']) { ?>
                                                    <li><?php echo $contenusec1['element_1']; ?></li>
                                                <?php } ?>
                                                <?php if( $contenusec1['element_2']) { ?>
                                                    <li><?php echo $contenusec1['element_2']; ?></li>
                                                <?php } ?>
                                                <?php if( $contenusec1['element_3']) { ?>
                                                    <li><?php echo $contenusec1['element_3']; ?></li>
                                                <?php } ?>
                                                <?php if( $contenusec1['element_4']) { ?>
                                                    <li><?php echo $contenusec1['element_4']; ?></li>
                                                <?php } ?>
                                            </ul>
                                        <h4>Estimation en crédits*</h4>
                                        <div class="bar-infos col-9">
                                                <div class="bar">
                                                    <?php 
                                                        $valuesec1 = $contenusec1['nb_credits'];
                                                        $valuebarsec1 = ($valuesec1/15)*100;
                                                    ?>
                                                    <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarsec1 ?>%;" aria-valuenow="<?php echo $contenusec1['nb_credits']; ?>0" aria-valuemin="0" aria-valuemax="150"></div>
                                                </div>
                                            <p><strong><?php echo $contenusec1['nb_credits']; ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                                        </div>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                    </div>
                </section>
            <?php } ?>
            <!----------------------------------->

            <!----------------------------------->
            <?php if( get_field('contenu_section_2')) { ?>
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
                                                <?php if( $contenusec2['element_1']) { ?>
                                                    <li><?php echo $contenusec2['element_1']; ?></li>
                                                <?php } ?>
                                                <?php if( $contenusec2['element_2']) { ?>
                                                    <li><?php echo $contenusec2['element_2']; ?></li>
                                                <?php } ?>
                                                <?php if( $contenusec2['element_3']) { ?>
                                                    <li><?php echo $contenusec2['element_3']; ?></li>
                                                <?php } ?>
                                                <?php if( $contenusec2['element_4']) { ?>
                                                    <li><?php echo $contenusec2['element_4']; ?></li>
                                                <?php } ?>
                                            </ul>
                                        <h4>Estimation en crédits*</h4>
                                        <div class="bar-infos col-8">
                                            <div class="bar">
                                                    <?php 
                                                        $valuesec2 = $contenusec2['nb_credits'];
                                                        $valuebarsec2 = ($valuesec2/15)*100;
                                                    ?>
                                                <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarsec2 ?>%;" aria-valuenow="<?php echo $contenusec2['nb_credits']; ?>0" aria-valuemin="0" aria-valuemax="150"></div>
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
            <?php } ?>
            <!----------------------------------->

            <!----------------------------------->
            <?php if( get_field('contenu_section_3')) { ?>
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
                                                <?php if( $contenusec3['element_1']) { ?>
                                                    <li><?php echo $contenusec3['element_1']; ?></li>
                                                <?php } ?>
                                                <?php if( $contenusec3['element_2']) { ?>
                                                    <li><?php echo $contenusec3['element_2']; ?></li>
                                                <?php } ?>
                                                <?php if( $contenusec3['element_3']) { ?>
                                                    <li><?php echo $contenusec3['element_3']; ?></li>
                                                <?php } ?>
                                                <?php if( $contenusec3['element_4']) { ?>
                                                    <li><?php echo $contenusec3['element_4']; ?></li>
                                                <?php } ?>
                                            </ul>
                                        <h4>Estimation en crédits*</h4>
                                        <div class="bar-infos col-9">
                                                <div class="bar">
                                                    <?php 
                                                        $valuesec3 = $contenusec3['nb_credits'];
                                                        $valuebarsec3 = ($valuesec3/15)*100;
                                                    ?>
                                                    <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarsec3 ?>%;" aria-valuenow="<?php echo $contenusec3['nb_credits']; ?>0" aria-valuemin="0" aria-valuemax="150"></div>
                                                </div>
                                            <p><strong><?php echo $contenusec3['nb_credits']; ?> Crédits </strong> <i>*1 crédit = 1 heure de travail</i></p>
                                        </div>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                    </div>
                </section>
            <?php } ?>
            <!----------------------------------->

            <!----------------------------------->
            <?php if( get_field('contenu_section_4')) { ?>
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
                                            <?php if( $contenusec4['element_1']) { ?>
                                                <li><?php echo $contenusec4['element_1']; ?></li>
                                            <?php } ?>
                                            <?php if( $contenusec4['element_2']) { ?>
                                                <li><?php echo $contenusec4['element_2']; ?></li>
                                            <?php } ?>
                                            <?php if( $contenusec4['element_3']) { ?>
                                                <li><?php echo $contenusec4['element_3']; ?></li>
                                            <?php } ?>
                                            <?php if( $contenusec4['element_4']) { ?>
                                                <li><?php echo $contenusec4['element_4']; ?></li>
                                            <?php } ?>
                                        </ul>
                                    <h4>Estimation en crédits*</h4>
                                    <div class="bar-infos col-8">
                                        <div class="bar">
                                                <?php 
                                                     $valuesec4 = $contenusec4['nb_credits'];
                                                     $valuebarsec4 = ($valuesec4/15)*100;
                                                ?>
                                            <div class="bar-item" role="progressbar" style="width:<?php echo $valuebarsec4 ?>%;" aria-valuenow="<?php echo $contenusec4['nb_credits']; ?>0" aria-valuemin="0" aria-valuemax="150"></div>
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
            <?php } ?>
            <!----------------------------------->
