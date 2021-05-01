<?php
include "element/meta-user.php";
include "component/header-user.php";
?>
<div class="productWrap">
    <?php
    if (isset($product)){
        ?>
        <div class="thumb">
            <img  src="<?php echo Helpers::showImage($product->image)?>">
        </div>
        <div class="details">
            <div class="details-Title"><h3><?php echo $product->name?></h3></div>
            <p class="price"><strong><?php echo number_format($product->price)?> Đ</strong></p>
            <p><?php echo nl2br($product->content)?></p>
            <div class="quantity">
                <a href="">Đặt Mua</a>
            </div>
        </div>
        <?php
    }
    ?>

</div>

<!-- </product-details> -->

<!-- <bottom> -->

<?php

include "component/footer-user.php";

?>
