<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script type = "my-javascript/maindh.js"></script>
	
</head>
<body>
	
	<?php include'inc/header.php' ?>

	<?php 
	
	$show_product = $product->show_product();
	

 ?>

<div class = "tong1">
		<div class = "tren1" style="background-color: #867878">
			
				<a href="" class = "khoivuongnho" onClick="alert( 'Vui lòng gọi vào số 0981794116 để đặt hàng') ">
				<img src="images/img/m2.jpg" alt = "" class= "layer1">
				<span class = "layer2"></span>
				<span class ="layer3">MOCHA: 25000đ</span>
				
					
			</a>
			<a href="" class = "khoivuongnho" onClick="alert( 'Vui lòng gọi vào số 0981794116 để đặt hàng') ">
				<img src="images/img/m3.jpg" alt = "" class= "layer1">
				<span class = "layer2"></span>
				<span class ="layer3">CACAO: 35000đ </span>
				
					
			</a>
			
			<a href="" class = "khoivuongnho" onClick="alert( 'Vui lòng gọi vào số 0981794116 để đặt hàng') ">
				<img src="images/img/m9.jpg" alt = "" class= "layer1">
				<span class = "layer2"></span>
				<span class ="layer3">SỮA NÓNG: 40000đ</span>
				
					
			</a>
			<a href="" class = "khoivuongnho" onClick="alert( 'Vui lòng gọi vào số 0981794116 để đặt hàng') ">
				<img src="images/img/m10.jpg" alt = "" class= "layer1">
				<span class = "layer2"></span>
				<span class ="layer3">CAPUCHI: 50000đ</span>
				
					
			</a>
			<a href="" class = "khoivuongnho" onClick="alert( 'Vui lòng gọi vào số 0981794116 để đặt hàng') ">
				<img src="images/img/m11.jpg" alt = "" class= "layer1">
				<span class = "layer2"></span>
				<span class ="layer3" >ĐEN NÓNG: 45000đ</span>		
			</a>

			<?php 
			if(isset($show_product)){
				while($result=$show_product->fetch_assoc()){


			 ?>
			<a href="" class = "khoivuongnho" onClick="alert( 'Vui lòng gọi vào số 0981794116 để đặt hàng') ">
				<img src="admincp/uploads/<?php echo $result['hinhanh']?>" alt = "" class= "layer1">
				<span class = "layer2"></span>
				<span class ="layer3"><?php echo $result['tensanpham'] ?>: <?php echo $result['giasp']  ?>đ</span>

			</a>

		<?php 
			}
		} ?>
		</div>
	</div>





	<?php include'inc/footer.php' ?>

</html>