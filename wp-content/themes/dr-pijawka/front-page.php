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
<div class="container">
    <div class="row" id="about-me">
        <div class="col">
            <h1>O MNIE</h1>
            <p><?php echo esc_html(get_field('o_mnie')); ?></p>
        </div>
    </div>
    <div class="row" id="offer">
        <div class="col">
            <h1>CENNIK</h1>
            <ul>
            <?php
            $i = 1;
            while(get_field('usluga_'.$i) && get_field('cena_'.$i)) {
                ?><li><?php echo esc_html(get_field('usluga_'.$i))?> - <?php echo esc_html(get_field('cena_'.$i))?></li><?php
            $i++;}
            $i = 1;?>
            </ul>
        </div>
    </div>
    <div class="row" id="procedure">
        <div class="col">
            <h1>PRZED ZABIEGIEM</h1>
            <ol>
            <?php
            $i = 1;
            while(get_field('przed_zabiegiem_'.$i)) {
                ?><li><?php echo esc_html(get_field('przed_zabiegiem_'.$i))?></li><?php
            $i++;}
            $i = 1;?>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1>W TRAKCIE ZABIEGU</h1>
            <ol>
            <?php
            $i = 1;
            while(get_field('w_trakcie_'.$i)) {
                ?><li><?php echo esc_html(get_field('w_trakcie_'.$i))?></li><?php
            $i++;}
            $i = 1;?>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1>PO ZABIEGU</h1>
            <ol>
            <?php
            $i = 1;
            while(get_field('po_zabiegu_'.$i)) {
                ?><li><?php echo esc_html(get_field('po_zabiegu_'.$i))?></li><?php
            $i++;}
            $i = 1;?>
            </ol>
        </div>
    </div>
    <div class="row" id="contact">
        <div class="col">
            <h1>KOTNTAKT</h1>
            <p><a href="mailto:<?php echo esc_html(get_field('email'))?>"><?php echo esc_html(get_field('email'))?></a></p>
            <p><a href="tel:<?php echo esc_html(get_field('telefon'))?>"><?php echo esc_html(get_field('telefon'))?></a></p>
            <p><?php echo esc_html(get_field('ulica_i_numer'))?></p>
            <p><?php echo esc_html(get_field('miasto_i_kod'))?></p>
        </div>
    </div>
</div>
<?php
get_footer();