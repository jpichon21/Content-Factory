<?php /* Template Name: catalogue contact  */  ?>
<section id="Contact">
    <div class="content column col-9 centered">

        <div class="row columns">
            <div class="col-6 centered text-center">
                <h3><?php echo get_field('titre_contact'); ?><h3>
            </div>
        </div>

        <div class="columns">
            <?php echo get_field('contact', 'options'); ?>
        </div>
    </div>
</section>