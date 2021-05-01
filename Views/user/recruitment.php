<?php
include "element/meta-user.php";
include "component/header-user.php";
?>
<div class="overflow">
    <div class="hero-text">
        <div class="content">
            <p class="headline">Cơ hội nghề nghiệp</p>
            <h2 class="title">Trở thành thành viên trong gia đình Cộng CàPhê</h2>
            <a href="#alljobs" class="cta">Xem các vị trí tuyển dụng</a>
        </div>
    </div>
    <div class="intro">
        <div class="info-company">
            <div class="title-main">
                <h2>Là Thành Viên Cộng Cà Phê</h2>
            </div>
            <div class="sec-text">
                <p>Cộng hiện có hơn 60 cửa hàng trải dọc khắp Việt Nam và trên thế giới. Với mong muốn khơi dậy trí tưởng tượng và mang đến một trải nghiệm cảm xúc khác biệt về Việt-nam, Cộng đã và đang trở thành hệ thống cửa hàng cà phê sáng tạo và khác biệt nhất dành cho mọi lứa tuổi, mọi màu da và mọi giới tính!</p>
            </div>
        </div>
        <div class="benefit">
            <div class="title-main">
                <h2>Thông điệp của Cộng Cà Phê</h2>
            </div>
            <div class="sec-text">
                <div class="item">
                    <div class="image">
                        <img  src="<?php echo Helpers::getPathPublic('user')?>images/item01.png">
                    </div>
                    <h3>GIÁ TRỊ CỐT LÕI</h3>
                    <p class="desc">Thành thật và ấm áp. Sáng tạo và khác biệt. Tiêu chuẩn cao và tỉ mỉ trong mọi chi tiết. Theo đuổi mục tiêu và lý tưởng chung.</p>
                </div>
                <div class="item">
                    <div class="image">
                        <img  src="<?php echo Helpers::getPathPublic('user')?>images/item01.png">
                    </div>
                    <h3>TẦM NHÌN</h3>
                    <p class="desc">Khơi dậy trí tưởng tượng và mang đến một trải nghiệm cảm xúc khác biệt về Việt Nam.</p>
                </div>
                <div class="item">
                    <div class="image">
                        <img  src="<?php echo Helpers::getPathPublic('user')?>images/item01.png">
                    </div>
                    <h3>SỨ MỆNH CỦA CỘNG</h3>
                    <p class="desc">Trở thành hệ thống cửa hàng cà phê sáng tạo và khác biệt nhất.</p>
                </div>
            </div>
            <div class="sec-image">
                <img  src="<?php echo Helpers::getPathPublic('user')?>images/sec-image.png">
            </div>
        </div>
    </div>
    <div class="location">
        <img  src="<?php echo Helpers::getPathPublic('user')?>images/location.png">
        <div class="content">
            <h3 class="title">Các vị trí hiện tại</h3>
            <p class="say">Chúng tôi tìm kiếm những người bạn thân thiết, gia nhập gia đình Cộng Cà Phê nếu bạn tìm thấy được những giá trị phù hợp với bản thân. Gửi thông tin ứng tuyển cho Cộng ngay hôm nay!</p>
        </div>
    </div>
    <div id="alljobs" class="jobs">
    <?php if (isset($recruitments)){
        foreach ($recruitments as $itme){ ?>
            <div class="list-jobs">
                <h3 class="title-cat"><?php echo $itme->title?></h3>
                <div class="box-cat">
                    <div class="item-job">
                        <div class="item name-job">
                            <h4 class="title"><a style="text-transform: uppercase" href=""><?php echo $itme->content?></a></h4>
                        </div>
                        <div class="item desc">
                            <p class="info">
                                <span class="icon"><img  src="<?php echo Helpers::getPathPublic('user')?>images/time.png"><?php echo $itme->time_work?></span>
                            </p>
                            <p class="info">
                                <span class="icon"><img  src="<?php echo Helpers::getPathPublic('user')?>images/vt.png"><?php echo $itme->location?></span>
                            </p>
                        </div>
                        <div class="item cta">
                            <a href="https://docs.google.com/forms/d/1a1nrNn6HCu469EPYVOduH5Jw-Z5MrwGWumD2waNJAvc" target="_blank" class="btn-apply">Ứng tuyển </a>
                        </div>
                    </div>
                </div>
            </div>
       <?php }
    }?>
    </div>


    </div>
</div>
<!-- </news> -->

<!-- <bottom> -->

<?php

include "component/footer-user.php";

?>
