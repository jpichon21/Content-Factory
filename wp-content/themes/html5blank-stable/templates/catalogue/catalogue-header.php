<?php /* Template Name: catalogue header  */  ?>

<header id="catalogueHeader">
    <?php $home = get_page_link(get_page_by_path('home')); ?>
    <nav id="menuNav" class="column col-9 centered">
        <?php 
                            $catalogue_logo = get_field('logo', 'options');
                            if( !empty( $catalogue_logo ) ): ?>
        <a href="<?php echo $home ?>"> <img src="<?php echo esc_url($catalogue_logo['url']); ?>"
                alt="<?php echo esc_attr($catalogue_logo['alt']); ?>" /> </a>
        <?php endif; ?>
    </nav>
    <h2>Notre catalogue <span>de formats</span></h2>
</header>