<?php /* Template Name: catalogue footer */  ?>
<footer id="footer">
    <nav id="footerNav" class="column col-9 centered">
        <?php 
            $footerlogo = get_field('logo_footer');
            if( !empty( $footerlogo ) ): ?>
        <img id="footerlogo" src="<?php echo esc_url($footerlogo['url']); ?>"
            alt="<?php echo esc_attr($footerlogo['alt']); ?>" />
        <?php endif; ?>
        <p>© Braaxe - Tous droits réservés</p>
        <ul class>
        <?php $home = get_page_link(get_page_by_path('home')); ?>
            <li><a href="<?php echo $home ?>#CCM">Comment ça marche ?</a></li>
            <li class="separator"> | </li>
            <li><a href="<?php echo $home ?>#Formats">Les formats</a></li>
            <li class="separator"> | </li>
            <li><a href="<?php echo $home ?>#Exemples">Exemples</a></li>
            <li class="separator"> | </li>
            <li><a href="<?php echo $home ?>#Stats">Chiffres</a></li>
            <li class="separator"> | </li>
            <li><a href="<?php echo $home ?>#Credits">Prix</a></li>
            <li class="separator"> | </li>
            <li><a href="<?php echo $home ?>#Contact">Contact</a></li>
        </ul>
    </nav>
</footer>