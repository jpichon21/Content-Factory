<?php /* Template Name: Catalogue Videos */ get_header(); ?>
<body>

        <!----------------------------------->
        <div id="mainContainer" class="container">

            <!----------------------------------->
            <?php get_template_part('templates/catalogue/catalogue-header') ?>
            <?php get_template_part('templates/catalogue/catalogue-nav') ?>
            <?php get_template_part('templates/catalogue/catalogue-banner') ?>
            <!----------------------------------->
            <?php get_template_part('templates/catalogue/catalogue-sections') ?>
            <!-----------------------------------> 
            <!----------------------------------->
            <?php get_template_part('templates/catalogue/catalogue-contact') ?>                           
            <!----------------------------------->

        </div>
        <!----------------------------------->

        <!----------------------------------->
        <?php get_template_part('templates/catalogue/catalogue-footer') ?>     
        <!----------------------------------->
        
<script>
    $('.videos-link').addClass('active');
</script>
</body>