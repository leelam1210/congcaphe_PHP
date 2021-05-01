<?php
$active = 'booking';
include ('element/meta.php');
include('component/header-main.php');
include('component/nav.php');
?>
<div class="ajax-loading">
    <?php include_once('element/loading.php'); ?>
</div>
<main id="main-admin" >
    <div class="container padding-child bg-white">
        <h3 class="title-page">Danh sách đặt tour
        </h3>
        <div class="table-data">
            <table class="table">
                <thead>
                <tr>
                    <th>Tên khách hàng</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Thời gian</th>
                    <th>Tour lựa chọn</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php if (isset($allBooking)){  foreach ($allBooking as $item){ ?>
                    <tr>
                        <td><?php echo $item->name_customer ?></td>
                        <td><?php echo $item->email_customer?></td>
                        <td><?php echo $item->phone_number ?></td>
                        <td><?php echo date_format(date_create($item->created_at), 'H:i:s - Y-m-d')?></td>
                        <td><a class="btn bg-orange" style="width: 100%;" href="<?php $tour = $this->modelTour->getTourById($item->id_tour);echo Helpers::getUrlPage() . 'tour/' . $tour->type_tour . '/' . $item->id_tour ?>">Xem</a></td>
                        <td>
                            <div class="group-button">
                                <button style="width: 100%" value="<?php echo $item->id?>" class="btn change-status <?php  echo $item->status == 1 ? 'btn-success' : 'btn-danger' ?>"><?php  echo $item->status == 1 ? 'Thành công' : 'Xác nhận thành công' ?></button>
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
<script> var urlUpdateStatus = "<?php echo Helpers::getUrlPage().'admin/booking/update'?>" </script>
<?php
include('element/script.php');
?>

