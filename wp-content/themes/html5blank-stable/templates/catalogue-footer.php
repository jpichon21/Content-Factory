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
            <li><a href="#CCM">Comment ça marche ?</a></li>
            <li class="separator"> | </li>
            <li><a href="#Formats">Les formats</a></li>
            <li class="separator"> | </li>
            <li><a href="#Exemples">Exemples</a></li>
            <li class="separator"> | </li>
            <li><a href="#Stats">Chiffres</a></li>
            <li class="separator"> | </li>
            <li><a href="#Credits">Prix</a></li>
            <li class="separator"> | </li>
            <li><a href="#Contact">Contact</a></li>
        </ul>
    </nav>
</footer>