<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/product.php';  ?>
<?php 
    $pd = new product();
    if(!isset($_GET['proid']) || $_GET['proid'] == NULL){   
    }else {
        $id = $_GET['proid'];
        $deletehoadon = $pd->deletehoadon($id);
    }
?>
<div class="grid_8" style="background-color: white">
    <div class="box round first grid" style="background: white">
        <h2 style="background: #030b31">Tất cả đơn hàng</h2>
        <div class="block" style="background: #030b31">  
            <table class="data display datatable" id="example" style="background: white">
            <thead >
                <tr style="text-align: center">
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tên khách hàng</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Thành tiền</th>
                    <th>Xử lý</th>
                </tr>
            </thead>
            <tbody style="background: #030b31">
                <?php 
                
                      $show_hoadon = $pd->show_hoadon();
                      $i = 0;
                        if($show_hoadon){
                            while( $result = $show_hoadon->fetch_assoc()){
                                $i++;


                                  
                 ?>
                <tr class="odd gradeX" style = "text-align: center;">
                    <td><?php echo $i ?></td>
                    <td><?php echo $result['tensanpham'] ?></td>
                    <td><?php echo $result['soluong'] ?></td>
                    <td><?php echo $result['tenkhachhang'] ?></td>
                    <td><?php echo $result['diachi'] ?></td>
                    <td><?php echo $result['SDT'] ?></td>
                    <td><?php echo $result['thanhtien'] ?></td>
                    <td><a href="inboxedit.php?proid=<?php echo $result['id_hoadon'] ?>">Xem đơn hàng</a> || <a href="?proid=<?php echo $result['id_hoadon'] ?>">Xóa</a></td>
                </tr>
                <?php
                            
                        
                    }
                }
                ?>
            </tbody>
        </table>

       </div>
    </div>
</div>



