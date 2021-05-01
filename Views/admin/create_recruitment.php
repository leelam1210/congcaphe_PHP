<?php
$active = 'tour';

include ('element/meta.php');
include('component/header-main.php');
include('component/nav.php');
?>
<div class="ajax-loading">
    <?php include_once('element/loading.php'); ?>
</div>
<main id="main-admin" >
    <div class="container padding-child bg-white">
        <h3 class="title-page">Thêm mới tin tuyển dụng</h3>
        <div class="form-tour">
            <form action="<?php echo Helpers::getUrlPage()?>admin/recruitment/create" method="post" enctype="multipart/form-data" id="form-new-recruitment">
                <div class="form-group">
                    <label for="">Tiêu đề</label>
                    <input type="text" name="title" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Thời gian</label>
                    <select name="time_work" id="" class="form-control">
                        <option value="Full-time">Full-time</option>
                        <option value="part-time">Part-time</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Địa điểm</label>
                    <input type="text" name="location" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nội dung</label>
                    <textarea name="content" class="form-control" id="" cols="30" rows="2"></textarea>
                </div>
                <button class="btn bg-orange">Thêm tin</button>
            </form>
        </div>
    </div>
</main>
<?php include 'component/modal.php' ?>
<?php
include('element/script.php');
if (isset($status)){
    echo "<script> let status = true </script>";
}
?>

<script>
    $(document).ready(function () {
        if (status){
            $("#modalMessage").modal("show");
        }
    })
</script>



