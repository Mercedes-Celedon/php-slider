<?php
require_once 'src/utils/format-price.php';

$priceParts = formatPrice($project['price']);
?>

<img src="<?php echo $project['url_photo']; ?>" alt="Proyecto de interiorismo <?php echo $project['title']; ?>">
<div class="description">
    <h3>Proyecto de interiorismo <?php echo $project['title'] ?></h3>
    <div class="price">
        <span class="integer-part"><?php echo $priceParts[0]; ?></span>
        <span class="decimal-part">,<?php echo $priceParts[1]; ?> €/mes²</span>
    </div>
    <a href="#" role="button" class="btn-desktop" onclick="openModal('<?php echo $project['title']; ?>')">Más información</a>
    <a href="#" role="button" class="btn-mobile" onclick="openModal('<?php echo $project['title']; ?>')">Más info</a>
</div>