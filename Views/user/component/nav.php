<?php
?>
<nav id="wrap-nav" class="menu ">
    <div class="container">
        <ul>
            <li>
                <a href="<?php echo Helpers::getUrlPage()?>">Trang chủ</a>
            </li>
            <li>
                <a href="<?php echo Helpers::getUrlPage() ?>tour/domestic">Du lịch trong nước</a>
            </li>
            <li>
                <a href="<?php echo Helpers::getUrlPage() ?>tour/foreign">Du lịch nước ngoài</a>
            </li>
            <li>
                <a href="<?php echo Helpers::getUrlPage() ?>news">Tin tức</a>
            </li>
            <li>
                <a href="<?php echo Helpers::getUrlPage() ?>handbook">Cẩm nang</a>
            </li>
            <li>
                <a href="<?php echo Helpers::getUrlPage() ?>overviews">Giới thiệu</a>
            </li>
            <?php
                echo isset($_SESSION['id']) ? '<li>
                <a href="'. Helpers::getUrlPage().'favorites">quan tâm</a>
            </li>' : '';
            ?>
            <li>
                <a href="<?php echo Helpers::getUrlPage() ?>contact">Liên hệ</a>
            </li>
        </ul>
    </div>
</nav>
