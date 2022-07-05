<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'inc/footer.php';?>
<?php include '../classes/category.php';  ?>
<?php include '../classes/product.php';  ?>
<?php
    // gọi class category
    $pd = new product(); 
    if(!isset($_GET['proid']) || $_GET['proid'] == NULL){
       
        
    }else {
        $id = $_GET['proid']; // Lấy productid trên host
        $gethoadonbyid = $pd->gethoadonbyid($id);
    } 
     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $id = $_POST['id'];
        $update_hoadon = $pd->update_hoadon($_POST,$id);
    } 
  ?>


<div class="grid_8" style="background: #0a0c2d">
    <div class="box round first grid" style="background: #ececec">
        <h2 style="background: #0a0c2d">Sửa hóa đơn</h2>
        <?php 
            if(isset($update_hoadon)){
                echo $update_hoadon;
            }
         ?>   
        <div class="block">

         <form action="inboxedit.php" method="post" enctype="multipart/form-data">
            <table class="form">
               <?php 
            if(isset($gethoadonbyid)){
                while ($result = $gethoadonbyid->fetch_assoc()) {  
             ?> 

                <tr>
                    <td>
                        <label>Tên sản phẩm</label>
                    </td>
                    <td><input name="id" type="hidden" value ="<?php echo $result['id_hoadon'] ?>"/>
                        <input name="hoadon_Name" type="text" value ="<?php echo $result['tensanpham'] ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Số lượng</label>
                    </td>
                    <td>
                        <input name="hoadon_soluong" type="text" value ="<?php echo $result['soluong'] ?>" class="medium" />
                    </td>
                </tr>
                  <tr>
                    <td>
                        <label>Tên khách hàng</label>
                    </td>
                    <td>
                        <input name="hoadon_tkh" type="text" value ="<?php echo $result['tenkhachhang'] ?>" class="medium" />
                    </td>
                </tr>   
            
                <tr>
                    <td>
                        <label>SDT</label>
                    </td>
                    <td>
                        <input name="sdt" type="text" value ="<?php echo $result['SDT'] ?>" class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Địa chỉ</label>
                    </td>
                    <td>
                        <input name="diachi_hd" type="text" value ="<?php echo $result['diachi'] ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Thành tiền</label>
                    </td>
                    <td>
                        <input name="thtien_hd" type="text" value ="<?php echo $result['thanhtien'] ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tình trạng</label>
                    </td>
                    <td>
                        <select name="tinhtrang_hd" type="text" value ="<?php echo $result['tinhtrang'] ?>" class="medium">
                            <option>Chưa xác nhận</option>
                            <option>Đã xác nhận</option>
                            <option>Đang giao</option>
                            <option>Đã giao</option>
                            <option>Giao không thành công</option>
                            
                        </select>
                        
                    </td>
                </tr>

                <?php 
                    }
                  }
                ?>
                <tr>
                    <td>
                        <input type="submit" name="submit" Value="Lưu lại" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>

