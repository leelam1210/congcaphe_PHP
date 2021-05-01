<?php
$active = 'post';
include ('element/meta.php');
include('component/header-main.php');
include('component/nav.php');
?>
<div class="ajax-loading">
    <?php include_once('element/loading.php'); ?>
</div>
<main id="main-admin" >
    <div class="container padding-child bg-white">
        <h3 class="title-page">Danh sách bài viết
            <a href="<?php echo Helpers::getUrlPage()?>admin/post/create" class="btn bg-orange new-button">Thêm mới</a>
        </h3>
        <div class="table-data">
            <table class="table">
                <thead>
                <tr>
                    <th>Tên bài viết</th>
                    <th>Ngày đăng</th>
                    <th>Ảnh mô tả</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Bài viết 1</td>
                    <td>01-10-2020</td>
                    <td><img style="max-width: 50px" src="<?php echo Helpers::getPathPublic('user')?>images/itemProducts01.png" alt=""></td>
                    <td>
                        <div class="group-button">
                            <a href="<?php echo Helpers::getUrlPage()?>admin/post/update/1" class="btn bg-orange">Chỉnh sửa</a>
                            <button value="" class="btn btn-danger delete-tour">Xóa</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php echo isset($pages) ? $pages->page_links() : "";
    ?>
</main>
<?php include 'component/modal.php' ?>
<script> var urlDelete = "<?php echo Helpers::getUrlPage().'admin/post/delete'?>" </script>
<?php
include('element/script.php');
?>

