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
        <h3 class="title-page">Thêm mới sản phẩm</h3>
        <div class="form-tour">
            <form action="<?php echo Helpers::getUrlPage()?>admin/product/create" method="post" enctype="multipart/form-data" id="form-new-product">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Loại sản phẩm</label>
                    <select name="type" id="" class="form-control">
                        <option value="quan-phuc">Quân phục</option>
                        <option value="so-tay">Sổ tay</option>
                        <option value="do-da">Đồ da</option>
                        <option value="tui-vai">Túi vải</option>
                        <option value="do-gom">Đồ gốm</option>
                        <option value="cafe">Cà phê đóng gói</option>
                        <option value="more">Khác</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="text" name="price" id="" class="form-control">
                </div>
                <div class="form-row">
                    <div class="form-group col-xl-4">
                        <label for="form-image-2">Ảnh sản phẩm</label>
                        <input type="file" name="image" class="form-control-file" onchange="readURL(this);" id="form-image-2">
                        <div class="preview-form-image-2 img">
                            <img style="max-height: 250px; width: auto; max-width: 340px" src="<?php echo Helpers::getPathPublic('admin')?>images/no_image.webp"  alt="">
                        </div>
                    </div>
                    <div class="form-group col-xl-8">
                        <label for="inputDescription">Nội dung chính</label>
                        <textarea class="form-control" cols="" rows="12" name="content" id="inputDescription"></textarea>
                    </div>
                </div>

                <button class="btn bg-orange">Thêm sản phẩm</button>
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
    function readURL(input) {
        if (input.files && input.files[0]) {
            loading(1);
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.preview-' + $(input).attr('id') + ' img')
                    .attr('src', e.target.result);
                loading();
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>



