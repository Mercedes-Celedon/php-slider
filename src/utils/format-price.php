<?php
function formatPrice($price) {
    $formattedPrice = number_format($price, 2, ',', '.');
    $parts = explode(',', $formattedPrice);
    return $parts;
}
?>  
