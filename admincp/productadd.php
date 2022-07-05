<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';  ?>
<?php include '../classes/product.php';  ?>
<?php
    // gọi class category
    $pd = new product(); 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $insertProduct = $pd -> insert_product($_POST, $_FILES); // hàm check catName khi submit lên
    }
  ?>
<div class="grid_8" style="background: white" >
    <div class="box round first grid" style="background: white">
        <h2 style="background: #0a0c2d">Thêm sản phẩm</h2>
        <?php 
            if(isset($insertProduct)){
                echo $insertProduct;
            }
         ?>   
        <div class="block" style="background: #0a0c2d">

         <form action="productadd.php" method="post" enctype="multipart/form-data"  >
            <table class="form">
                <tr>
                    <td>
                        <label>Tên sản phẩm</label>
                    </td>
                    <td>
                        <input name="productName" type="text" placeholder="Nhập tên sản phẩm..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Mã sản phẩm</label>
                    </td>
                    <td>
                        <input name="product_code" type="text" placeholder="Nhập code sản phẩm..." class="medium" />
                    </td>
                </tr>
                  <tr>
                    <td>
                        <label>Số lượng sản phẩm</label>
                    </td>
                    <td>
                        <input name="productQuantity" type="text" placeholder="Nhập số lượng sản phẩm..." class="medium" />
                    </td>
                </tr>   
            
                <tr>
                    <td>
                        <label>Giá</label>
                    </td>
                    <td>
                        <input name="price" type="text" placeholder="Nhập giá..." class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Tải ảnh</label>
                    </td>
                    <td>
                        <input name="image" type="file" />
                    </td>
                </tr>
      
            

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Lưu lại" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>

<?php include 'inc/footer.php';?>


