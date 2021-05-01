<?php
include "element/meta-user.php";
include "component/header-user.php";
?>
<div class="productsWrap">
    <div class="menu-aside">
        <ul class="product-categories">
            <li class="catItem"><a href="<?php echo Helpers::getUrlPage()?>product">All</a></li>
            <li class="catItem"><a href="<?php echo Helpers::getUrlPage()?>product?type=quan-phuc">Quân Phục</a></li>
            <li class="catItem"><a href="<?php echo Helpers::getUrlPage()?>product?type=so-tay">Sổ Tay</a></li>
            <li class="catItem"><a href="<?php echo Helpers::getUrlPage()?>product?type=do-da">Đồ Da</a></li>
            <li class="catItem"><a href="<?php echo Helpers::getUrlPage()?>product?type=tui-vai">Túi vải</a></li>
            <li class="catItem"><a href="<?php echo Helpers::getUrlPage()?>product?type=do-gom">Đồ Gốm</a></li>
            <li class="catItem"><a href="<?php echo Helpers::getUrlPage()?>product?type=cafe">Cà Phê Đóng Gói</a></li>
            <li class="catItem"><a href="<?php echo Helpers::getUrlPage()?>product?type=more">Khác</a></li>
        </ul>
    </div>
    <div class="products-block">
        <?php if (isset($product)){
            foreach ($product as $item){ ?>
                <div class="itemProducts">
                    <a href="<?php echo Helpers::getUrlPage()?>product/<?php echo $item->id?>">
						<span class="imgPrd">
							<img  src="<?php Helpers::showImage($item->image); ?>">
						</span>
                        <h3><?php echo $item->name?></h3>
                    </a>
                </div>
            <?php }} ?>
    </div>

</div>
<?php echo isset($pages) ? $pages->page_links() : "";
?>
<!-- </drinks-menu> -->

<!-- <bottom> -->

<?php

include "component/footer-user.php";

?>
