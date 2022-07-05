<?php include'./classes/order.js' ?>

	<?php 
		$product = new product();
		if(isset($_POST['submit']))
		{
			
        
    
		}
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="css/order.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script src="./js/jquery-3.6.0.min.js"></script>
	<script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class = "tong">
		
		<div class = "tren" style="background-color: #1d0404">
			<div class ="tieude">
				<h2>BLACKONE</h2>
			</div>
			<ul >
				
				<li ><a href="trangchu.php">Trang chủ</a></li>
				<li><a href="menu.php">Menu</a/></li> 
				<li><a href="">Đại lý</a></li>
				<li><a href="">Liên hệ</a></li>
				<li><form>
					<input type="text" name="Search" placeholder="Search..." >
				</form></li>
			</ul>

		</div>

		<div class = "giua" style="background-color:#d27526">
			<form id = "myForm" class = "reset" method="post" action="./dathang.php">
				<h2 class = "a">Đặt hàng</h2>
			<div class = "left">
				<div class = "form-group">
				Name: <input id="inpName" type="text1" name ="_name" value ="" required>
			</div>
			<div class = "form-group">
				Phone: <input id="inpPhone" type="text2" name ="_phone" value ="" required>
			</div>
			<div class = "form-group">
				Address: <input id="inpAddress" type="text3" name ="_address" value ="" required>
			</div>
			
				<button type="submit" name="submit" value="insertOrder" id="access-payment" class="btn btn-primary">
			  Đặt hàng
			</button>
			<input type="button" class = "re" onclick="myFunction()" value="Reset">
		</form>

		<div class = "khoi">
			<p>Để hủy đơn hàng quý khách vui lòng gọi điện vào số: 190087300 trong vòng 15 phút kể từ khi xác nhận đơn hàng</p>
			<p>*Cảm ơn quý khách đã lựa chọn và tin tưởng chúng tôi</p>
		</div>
				</div>

		<div class = "right">
				
					<div class = "form-group">
						Sản phẩm: <select name="sanpham" id="sp">
						<option value="MOCHA">MOCHA</option>
						<option value="CACAO">CACAO</option>
						<option value="CAPUCHINO">CAPUCHINO</option>
						<option value="SỮA DỪA">SỮA DỪA</option>
						<option value="CÀ PHÊ SỮA NÓNG">CÀ PHÊ SỮA NÓNG</option>
						<option value="CÀ PHÊ ĐEN ĐÁ">CÀ PHÊ ĐEN ĐÁ</option>
						<option value="CÀ PHÊ ĐEN NÓNG">CÀ PHÊ ĐEN NÓNG</option>
						<option value="BẠC XỈU">BẠC XỈU</option>
						<option value="SOCOLA SỮA CHUA">SOCOLA SỮA CHUA</option>
						<option value="CÀ PHÊ SỮA ĐÁ">CÀ PHÊ SỮA ĐÁ</option>
					</select>
					</div>
					<div class = "form-group">
						Số lượng: <input type="number" id= "inp_nums">
					</div>

					<div class = "form-group">
						Giá: <select name="price" id="sl_price">
						<option value="35000">Size M: 35000</option>
						<option value="45000">Size L: 45000</option>
					</select>
					</div>
					<button id="btn-payment">OK</button>
					<div class = "thtien">
						Thành tiền: <label id = "tt"></label>
					</div>
					
			

			<script>
				function myFunction() {
  				document.getElementById("myForm").reset();
					}
			</script>	



				<div class="modal" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Hóa đơn</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				       <DIV>
				       	<h3>Đơn hàng của bạn</h3>
				       	<div class="col-12">
				       		<div>
				       			<label>Tên <span id="order-name"></span></label><br>
				       			<label >Số điện thoại: <span id="order-phone"></span></label><br>
				       			<label >Địa chỉ: <span id="order-address"></span></label><br>
				       			<label >Thành tiền: <span id="order-price"></span></label><br>
				       		</div>
				       	</div>
				       </DIV>
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>

				
				
		<table class="table table-hover col-12">
			<tr>
				<thead>
					<td>Tên</td>
					<td>Giá</td>
					<td>Số lượng</td>
				</thead>
			</tr>
			<tbody id="list_order">
				
			</tbody>
		</table>

		

		
				
				

		</div>

		
 				
<div class = "duoi" style="background-color: #1d0404"></div>
	


	<!-- tong --></div>


		

<script src="./js/main.js"></script>




</body>
</html>