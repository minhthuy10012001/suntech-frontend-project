<?php include'classes/product.php'; ?>
<?php 

    include 'lib/session.php';
     Session::init();
 ?>
<?php
	include_once ('lib/database.php');
	include_once ('helpers/format.php');
	//spl_autoload_register(function($className){include_once "../classes/".$className.".php";});

	$db = new database();
	$fm = new format();
	//$ct = new cart ();
	//$us = new user();
	//$cat =new category();
	$product = new product();
//	$cs = new customer();
	//$dir = new direct();
	
?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>

<div class = "tren" style="background-color: #1d0404">
			<div class ="tieude">
				<h2>BLACKONE</h2>
			</div>
			<ul >
				
				<li ><a href="trangchu.php">Trang chủ</a></li>
				<li><a href="menu.php?quanly=quanlysanpham">Menu</a/></li> 
				<li><a href="">Đại lý</a></li>
				<li><a href="">Liên hệ</a></li>
				<li><form action = "?request=search" method = "POST">
					<input type="search" name="keyword" class = "form-control col-md-10" >
					<input type="submit" value="Search" class = "btn btn-info btn-sm">
				</form></li>
			</ul>

</div>
		<div class = "tong">
		
		

		<div class = "giua" style="background-color: #dc8d4a">
			<h2 class = "a">MENU</h2>
			<h2 class = "b">MỘT TÁCH CÀ PHÊ NGẬP TRÀN NĂNG LƯỢNG MỖI NGÀY</h2>
			<img src="images/img/binh.jpg.png" alt="" class = "binhpha">
		</div>
		<div class = "duoi" style="background-color: #1d0404"></div>


	<!-- tong --></div>