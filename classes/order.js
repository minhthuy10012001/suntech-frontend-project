<?php

	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php 
	/**
	* 
	*/
	class product
	{
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function insert_product($data,$files){
			
			$productName = mysqli_real_escape_string($this->db->link, $data['productName']);
			$product_code = mysqli_real_escape_string($this->db->link, $data['product_code']);
			$productQuantity = mysqli_real_escape_string($this->db->link, $data['productQuantity']);
			$price = mysqli_real_escape_string($this->db->link, $data['price']);
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];
			
			$div =explode('.', $file_name);
			$file_ext = strtolower(end($div));
			$unique_image = substr(md5(time()), 0,10).'.'.$file_ext;
			$uploaded_image = "uploads/".$unique_image;

			if($product_code == "" || $productName == "" || $productQuantity == "" || $price == "" || $file_name == ""){
				$alert = "<span class='error'>không được để trống</span>";
				return $alert;
			}else{
				move_uploaded_file($file_temp, $uploaded_image);
				$query = "INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh) VALUES('$productName','$product_code','$price','$productQuantity','$unique_image') ";
				$result = $this->db->insert($query);
				if($result){
					$alert = "<span class='success'>đã được thêm thành công</span>";
					return $alert;
				}else {
					$alert = "<span class='error'>thêm không thành công</span>";
					return $alert;
				}

				}
			}

		public function show_product()
		{
			$query = "SELECT * FROM tbl_sanpham";
			$result = $this->db->select($query);
			return $result;
		}
		public function getproductbyid($id){
			$id = mysqli_real_escape_string($this->db->link, $id);
			$query = "SELECT * FROM tbl_sanpham WHERE id_sanpham = ".$id;
			$result = $this->db->select($query);
			return $result;
		}
		public function update_product($data,$files,$id){
			$productName = mysqli_real_escape_string($this->db->link, $data['productName']);
			$product_code = mysqli_real_escape_string($this->db->link, $data['product_code']);
			$productQuantity = mysqli_real_escape_string($this->db->link, $data['productQuantity']);
			$price = mysqli_real_escape_string($this->db->link, $data['price']);
			$permited = array('jpg','jpeg','png','gif');
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];
			
			$div =explode('.', $file_name);
			$file_ext = strtolower(end($div));
			$unique_image = substr(md5(time()), 0,10).'.'.$file_ext;
			$uploaded_image = "uploads/".$unique_image;

			if($product_code == "" || $productName == "" || $productQuantity == "" || $price == ""){
				$alert = "<span class='error'>không được để trống</span>";
				return $alert;
			}else{
				$query = "UPDATE tbl_sanpham SET tensanpham = '$productName', masp='$product_code', giasp='$price', soluong = '$productQuantity' WHERE id_sanpham = ".$id;
				$result = $this->db->update($query);
				if($result){
					$alert = "<span class='success'>Cập nhật thành công</span>";
					return $alert;
				}else {
					$alert = "<span class='error'>Cập nhật không thành công</span>";
					return $alert;
				}

				}

		}
		public function deleteProduct($id){
			$id = mysqli_real_escape_string($this->db->link,$id);
			$query = "DELETE FROM tbl_sanpham WHERE id_sanpham = ".$id;
			$result = $this->db->delete($query);
			if($result){
					$alert = "<span class='success'>Delete thành công</span>";
					return $alert;
				}else {
					$alert = "<span class='error'>Delete không thành công</span>";
					return $alert;
				}
		}
		public function insertOrder($productName, $nums, $name, $phone, $address, $mon, $status)
		{
			$query = "INSERT INTO `tbl_hoadon`(`tensanpham`, `soluong`, `tenkhachhang`, `SDT`, `diachi`, `thanhtien`, `tinhtrang`) VALUES ('".$productName."',".$nums.",'".$name."','".$phone."','".$address."',".$mon.",'".$status."')";
			$result = $this->db->insert($query);
			return $result;
		}
		public function show_hoadon()
		{
			$query = "SELECT * FROM tbl_hoadon";
			$result = $this->db->select($query);
			return $result;
		}

		public function gethoadonbyid($id){
			$id = mysqli_real_escape_string($this->db->link, $id);
			$query = "SELECT * FROM tbl_hoadon WHERE id_hoadon = ".$id;
			$result = $this->db->select($query);
			return $result;
		}

		public function update_hoadon($data,$id){
			$hoadon_Name = mysqli_real_escape_string($this->db->link, $data['hoadon_Name']);
			$hoadon_soluong = mysqli_real_escape_string($this->db->link, $data['hoadon_soluong']);
			$hoadon_tkh = mysqli_real_escape_string($this->db->link, $data['hoadon_tkh']);
			$diachi_hd = mysqli_real_escape_string($this->db->link, $data['diachi_hd']);
			$thtien_hd = mysqli_real_escape_string($this->db->link, $data['thtien_hd']);
			$tinhtrang_hd = mysqli_real_escape_string($this->db->link, $data['tinhtrang_hd']);

			if($hoadon_Name == "" || $hoadon_soluong == "" || $hoadon_tkh == "" || $diachi_hd == "" || $thtien_hd == "" || $tinhtrang_hd == ""){
				$alert = "<span class='error'>không được để trống</span>";
				return $alert;
			}else{
				$query = "UPDATE tbl_hoadon SET tensanpham = '$hoadon_Name', soluong='$hoadon_soluong', tenkhachhang='$hoadon_tkh', diachi = '$diachi_hd', thanhtien = '$thtien_hd', tinhtrang = '$tinhtrang_hd' WHERE id_hoadon = ".$id;
				$result = $this->db->update($query);
				if($result){
					$alert = "<span class='success'>Cập nhật thành công</span>";
					return $alert;
				}else {
					$alert = "<span class='error'>Cập nhật không thành công</span>";
					return $alert;
				}

				}

		}
		public function deletehoadon($id){
			$id = mysqli_real_escape_string($this->db->link,$id);
			$query = "DELETE FROM tbl_hoadon WHERE id_hoadon = ".$id;
			$result = $this->db->delete($query);
			if($result){
					$alert = "<span class='success'>Delete thành công</span>";
					return $alert;
				}else {
					$alert = "<span class='error'>Delete không thành công</span>";
					return $alert;
				}
		}
}
 ?>