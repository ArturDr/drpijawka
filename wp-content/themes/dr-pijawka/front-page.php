<?php

/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dr_Pijawka
 */

get_header();
?>
<div class="main-container">
    <div class="title">
        <h1>HIRUDOTERAPIA</h1>
    </div>
    <div class="row" id="about-me">
        <h2>O MNIE</h2>
        <p><?php echo esc_html(get_field('o_mnie')); ?></p>
    </div>
    <div class="leeches-back">
        <div class="row" id="about-leeches">
            <h2>O PIJAWKACH</h2>
            <p><?php echo esc_html(get_field('o_pijawkach')); ?></p>
        </div>
        <div class="row" id="about-leeches-img">
            <?php $fotoLeech = get_field('pijawki_zdjecie') ?>
            <img src="<?php echo esc_html($fotoLeech['url']); ?>" alt="<?php echo esc_attr($fotoLeech['alt']); ?>">
        </div>
    </div>
    <div class="procedure-1" id="procedure">
        <h3>PRZED ZABIEGIEM</h3>
        <ol>
            <?php
            $i = 1;
            while (get_field('przed_zabiegiem_' . $i)) {
            ?>
                <li>
                    <?php echo esc_html(get_field('przed_zabiegiem_' . $i)) ?>
                </li>
            <?php
                $i++;
            }
            $i = 1; ?>
        </ol>
    </div>
    <div class="procedure-2">
        <h3>W TRAKCIE ZABIEGU</h3>
        <ol>
            <?php
            $i = 1;
            while (get_field('w_trakcie_' . $i)) {
            ?>
                <li>
                    <?php echo esc_html(get_field('w_trakcie_' . $i)) ?>
                </li>
            <?php
                $i++;
            }
            $i = 1; ?>
        </ol>
    </div>
    <div class="procedure-3">
        <h3>PO ZABIEGU</h3>
        <ol>
            <?php
            $i = 1;
            while (get_field('po_zabiegu_' . $i)) {
            ?>
                <li>
                    <?php echo esc_html(get_field('po_zabiegu_' . $i)) ?>
                </li>
            <?php
                $i++;
            }
            $i = 1; ?>
        </ol>
    </div>
    <div class="row" id="offer">
        <h2>CENNIK</h2>
        <ul>
            <?php
            $i = 1;
            while (get_field('usluga_' . $i) && get_field('cena_' . $i)) {
            ?>
                <li>
                    <?php echo esc_html(get_field('usluga_' . $i)) ?> - <?php echo esc_html(get_field('cena_' . $i)) ?>
                </li>
            <?php
                $i++;
            }
            $i = 1; ?>
        </ul>
    </div>
    <div class="row" id="contact">
        <h2>KOTNTAKT</h2>
        <p><a href="mailto:<?php echo esc_html(get_field('email')) ?>"><?php echo esc_html(get_field('email')) ?></a></p>
        <p><a href="tel:<?php echo esc_html(get_field('telefon')) ?>"><?php echo esc_html(get_field('telefon')) ?></a></p>
        <p><?php echo esc_html(get_field('ulica_i_numer')) ?></p>
        <p><?php echo esc_html(get_field('miasto_i_kod')) ?></p>
    </div>
</div>
<?php
get_footer();
