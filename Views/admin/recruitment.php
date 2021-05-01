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
        <h3 class="title-page">Danh sách tin tuyển dụng
            <a href="<?php echo Helpers::getUrlPage()?>admin/recruitment/create" class="btn bg-orange new-button">Thêm mới</a>
        </h3>
        <div class="table-data">
            <table class="table">
                <thead>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Nội dung </th>
                    <th>Thời gian</th>
                    <th>Địa điểm</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php if (isset($recruitment)){
                    foreach ($recruitment as $item){ ?>
                        <tr>
                            <td><?php echo $item->title?></td>
                            <td><?php echo $item->content?></td>
                            <td><?php echo $item->time_work?></td>
                            <td><?php echo $item->location?></td>
                            <td>
                                <div class="group-button">
                                    <a href="<?php echo Helpers::getUrlPage()?>admin/recruitment/update/<?php echo $item->id?>" class="btn bg-orange">Chỉnh sửa</a>
                                    <button value="<?php echo $item->id?>" class="btn btn-danger delete-recruitment">Xóa</button>
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
    var urlDelete = "<?php echo Helpers::getUrlPage().'admin/recruitment/delete' ?>"
</script>
<?php
include('element/script.php');
?>

