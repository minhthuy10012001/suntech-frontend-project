<?php 
    include '../lib/session.php';
     Session::checkSession();
 ?>

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin</title>
       <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />

</head >
<body >
    <div class="container_12" style = "background-color: white">
        <div class="grid_12 header-repeat" >
            <div id="branding" style = "background-color: white">
				
					<h1 style = "background-color: white; color:black;text-align: center;font-size: 30px">ADMIN</h1>
					<p style = "background-color: white; color:black; text-align: center">Cà phê - sản phẩm hữu ích cho cuộc sống</p>
				
                <div class="floatright" style = "background-color: white">
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft"  style = "background-color: white">
                            <li style="background-color: white; color:black">Xin chào Admin</li>
                            <?php 
                                if(isset($_GET['action']) && $_GET['action']=='logout'){
                                    Session::destroy();
                                }
                             ?>

                            <li><a href="?action=logout"  style="background-color: white; color:black">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main" style = "background: #482a04">
                <li class="" ><a href="index.php" style = "background: #482a04"><span style = "background: #482a04" >Trang chủ</span></a> </li>
				<li class=""><a href="inbox.php" style = "background: #482a04"><span style = "background: #482a04" >Đơn hàng</span></a></li>
                
            </ul>
        </div>
        <div class="clear">
        </div>
    