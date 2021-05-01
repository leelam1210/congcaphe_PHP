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
            <form action="" method="post" enctype="multipart/form-data" id="form-update-recruitment">
                <div class="form-group">
                    <label for="">Tiêu đề</label>
                    <input type="text" value="<?php echo $recruitment->title?>" name="title" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Thời gian</label>
                    <select name="time_work" id="" class="form-control">
                        <option <?php echo $recruitment->time_work == 'Full-time' ? 'selected' : ''?>  value="Full-time">Full-time</option>
                        <option <?php echo $recruitment->time_work == 'Part-time' ? 'selected' : ''?> value="Part-time">Part-time</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Địa điểm</label>
                    <input type="text" value="<?php echo $recruitment->location?>" name="location" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nội dung</label>
                    <textarea name="content" class="form-control" id="" cols="30" rows="2"><?php echo $recruitment->content?></textarea>
                </div>
                <button class="btn bg-orange">Cập nhật tin</button>
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



