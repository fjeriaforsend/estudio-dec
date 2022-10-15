<?php

// BADGE OFERTAS
add_filter('woocommerce_sale_flash', 'textoofertaswoocomerce', 10, 3);

function textoofertaswoocomerce($text, $post, $_product)
{
    return '
        <div class="oferta-container">
            <p class="m-0 semi-bold">Black Friday<span class="red"></span></p>
        </div>';
}

;?>