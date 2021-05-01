<?php
?>

<nav id="menu-admin">
   <div class="container">
       <ul>
           <li>
               <a href="" >
                   <img src="<?php echo Helpers::getPathPublic('admin') ?>images/logo.png" alt="">
               </a>
           </li>
           <li>
               <a href="<?php echo Helpers::getUrlPage()?>admin/product" class="<?php echo isset($active) && $active == 'product' ? 'active' : '' ?>">
                   <i class="fa fa-gift" aria-hidden="true"></i>
                   Sản phẩm lưu niệm
               </a>
           </li>
           <li>
               <a href="<?php echo Helpers::getUrlPage()?>admin/post" class="<?php echo isset($active) && $active == 'post' ? 'active' : '' ?>">
                   <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                   Tin tức
               </a>
           </li>

           <li>
               <a href="<?php echo Helpers::getUrlPage()?>admin/recruitment" class="<?php echo isset($active) && $active == 'recruitment' ? 'active' : '' ?>">
                   <i class="fa fa-globe" aria-hidden="true"></i>
                   Tuyển dụng
               </a>
           </li>
           <li>
               <a href="<?php echo Helpers::getUrlPage()?>admin/loginadmin/logout">
                   <i class="fa fa-sign-out" aria-hidden="true"></i>
                   Đăng xuất
               </a>
           </li>
       </ul>
   </div>
</nav>
