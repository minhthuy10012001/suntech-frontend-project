<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/product.php';  ?>
<?php 
    $pd = new product();
    if(!isset($_GET['proid']) || $_GET['proid'] == NULL){   
    }else {
        $id = $_GET['proid'];
        $deleteProduct = $pd->deleteProduct($id);
    }
?>
<div class="grid_8" style="background-color: white">
    <div class="box round first grid" style="background: white">
        <h2 style="background: #030b31">Tất cả sản phẩm</h2>
        <div class="block" style="background: #030b31">  
            <table class="data display datatable" id="example" style="background: white">
            <thead >
                <tr style="text-align: center">
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Mã sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Ảnh</th>
                    <th>Xử lý</th>
                </tr>
            </thead>
            <tbody style="background: #030b31">
                <?php 
                
                      $show_product = $pd->show_product();
                      $i = 0;
                        if($show_product){
                            while( $result = $show_product->fetch_assoc()){
                                $i++;


                                  
                 ?>
                <tr class="odd gradeX" style = "text-align: center;">
                    <td><?php echo $i ?></td>
                    <td><?php echo $result['tensanpham'] ?></td>
                    <td><?php echo $result['masp'] ?></td>
                    <td><?php echo $result['giasp'] ?></td>
                    <td><?php echo $result['soluong'] ?></td>
                    <td><img src="uploads/<?php echo $result['hinhanh'] ?>" style= "width: 150px; height: 150px;"></td>
                    <td><a href="productedit.php?proid=<?php echo $result['id_sanpham'] ?>">Sửa</a> || <a href="?proid=<?php echo $result['id_sanpham'] ?>">Xóa</a></td>
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


