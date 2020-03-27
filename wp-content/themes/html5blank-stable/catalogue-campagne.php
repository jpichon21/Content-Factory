<?php /* Template Name: Catalogue Campagne  */ get_header(); ?>

<?php get_template_part('templates/catalogue/catalogue-head') ?>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZWDQGN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


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
    $('.campagne-link').addClass('active');
</script>
</body>