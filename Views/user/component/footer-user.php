<?php
?>
<div class="bottom">
    <div class="contact">
        <div class="left">
            <h2>Kênh Kết Nối</h2>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram"></i></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
        </div>
        <div class="right">
            <h2>Luôn Cập Nhật</h2>
            <p>Về các tin tức đó đây, sản phẩm mới</p>
            <div class="form">
                <input class="email" id="email-user" type="text" name="" value="" placeholder="Email">
                <input class="btn" id="register-mail" type="button" name="" value="Đăng Ký">
                <p>Chúng tôi tôn trọng quyền riêng tư của bạn</p>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="copyright">
        <p>&copy;2017 - 2019 Created LÊ VĂN LÂM_D13CNPM2 - CÔNG TY TNHH <span>Cộng CàPhê</span> Mọi quyền được bảo lưu</p>
    </div>
</div>

<script>let urlMail = "<?php echo Helpers::getUrlPage()?>mail/registerNotify"</script>
<script src="<?php echo Helpers::getPathPublic('admin')?>js/jquery-3.4.1.min.js"></script>
<script src="<?php echo Helpers::getPathPublic('admin')?>js/bootstrap.min.js"></script>
<script src="<?php echo Helpers::getPathPublic('user')?>js/main.js"></script>
<script src="<?php echo Helpers::getPathPublic('user')?>js/script.js"></script>
</body>
</html>