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
        $getproductbyid = $pd->getproductbyid($id);
    } 
     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $id = $_POST['id'];
        $update_product = $pd->update_product($_POST,$_FILES,$id);
    } 
  ?>


<div class="grid_8" style="background: #0a0c2d">
    <div class="box round first grid" style="background: #ececec">
        <h2 style="background: #0a0c2d">Sửa sản phẩm</h2>
        <?php 
            if(isset($update_product)){
                echo $update_product;
            }
         ?>   
        <div class="block">

         <form action="productedit.php" method="post" enctype="multipart/form-data">
            <table class="form">
               <?php 
            if(isset($getproductbyid)){
                while ($result = $getproductbyid->fetch_assoc()) {  
             ?> 

                <tr>
                    <td>
                        <label>Tên sản phẩm</label>
                    </td>
                    <td><input name="id" type="hidden" value ="<?php echo $result['id_sanpham'] ?>"/>
                        <input name="productName" type="text" value ="<?php echo $result['tensanpham'] ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Mã sản phẩm</label>
                    </td>
                    <td>
                        <input name="product_code" type="text" value ="<?php echo $result['masp'] ?>" class="medium" />
                    </td>
                </tr>
                  <tr>
                    <td>
                        <label>Số lượng sản phẩm</label>
                    </td>
                    <td>
                        <input name="productQuantity" type="text" value ="<?php echo $result['soluong'] ?>" class="medium" />
                    </td>
                </tr>   
            
                <tr>
                    <td>
                        <label>Giá</label>
                    </td>
                    <td>
                        <input name="price" type="text" value ="<?php echo $result['giasp'] ?>" class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Tải ảnh</label>
                    </td>
                    <td>
                        <input name="image" type="file" /><?php echo $result['hinhanh'] ?>
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

