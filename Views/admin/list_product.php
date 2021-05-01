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
        <h3 class="title-page">Danh sách sản phẩm lưu niệm
            <a href="<?php echo Helpers::getUrlPage()?>admin/product/create" class="btn bg-orange new-button">Thêm mới</a>
        </h3>
        <div class="table-data">
            <table class="table">
                <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Loại sản phẩm </th>
                    <th>Giá tiền</th>
                    <th>Hình ảnh</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php if (isset($product)){
                    foreach ($product as $item){ ?>
                        <tr>
                            <td><?php echo $item->name?></td>
                            <td><?php echo $item->type?></td>
                            <td><?php echo number_format($item->price)?> đ</td>
                            <td><img style="max-width: 50px" src="<?php echo Helpers::showImage($item->image)?>" alt=""></td>
                            <td>
                                <div class="group-button">
                                    <a href="<?php echo Helpers::getUrlPage()?>admin/product/update/<?php echo $item->id?>" class="btn bg-orange">Chỉnh sửa</a>
                                    <button value="<?php echo $item->id?>" class="btn btn-danger delete-product">Xóa</button>
                                </div>
                            </td>
                        </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php echo isset($pages) ? $pages->page_links() : "";
    ?>
</main>
<?php include 'component/modal.php' ?>
<script>
    var urlDelete = "<?php echo Helpers::getUrlPage().'admin/product/delete' ?>"
</script>
<?php
    include('element/script.php');
?>

