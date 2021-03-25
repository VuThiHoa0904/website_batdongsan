<?php
require_once("connect.php");
class m_product extends connect
{
	public function get_brand()
	{
		$sql = "SELECT * from product_brand";
		return $this->query($sql);
	}

	public function get_product()
	{
		$sql = "SELECT * FROM product";
		return $this->query($sql);
	}

	public function get_productId($id)
	{
		$sql = "SELECT * FROM product WHERE product_id=$id";
		return $this->getdata($sql);
	}

	public function get_productBrand($id)
	{
		$sql = "SELECT * FROM product WHERE product_brand_id=$id";
		return $this->query($sql);
	}



	public function delete_product($id)
	{
		$sql = "DELETE FROM product where product_id=$id";
		$this->exec($sql);
	}

	public function update_product($product_id,$name,$price,$images,$image_link,$brandid,$product_details,$vitri)
	{
		$sql = "UPDATE product set product_name = '$name', price = '$price', product_img = '$image_link', product_brand_id = '$brandid', product_details = '$product_details', vitri = '$vitri' WHERE product_id='$product_id'";
		$this->exec($sql);
		return $this;
	}
	public function add_product($id,$name,$price,$img,$brand,$product_details,$vitri)
	{
		$sql = "INSERT INTO product(product_id,product_name,price,product_img,product_brand_id,product_details,vitri)VALUES ('$id','$name','$price','$img','$brand','$product_details','$vitri')";
		$this->exec($sql);
		return $this;
	}
	public function add_loaibds($id,$name)
	{
		$sql = "INSERT INTO product_brand(product_brand_id,product_brand_name)VALUES ('$id','$name')";
		$this->exec($sql);
		return $this;
	}

	public function delete_loaibds($id)
	{
		$sql = "DELETE FROM product_brand where product_brand_id=$id";
		$this->exec($sql);
	}
	public function get_member()
	{
		$sql = "SELECT * FROM users";
		return $this->query($sql);;
	}

	public function get_duan()
	{
		$sql = "SELECT * FROM duan";
		return $this->query($sql);
	}
	public function add_duan($id,$title,$price,$intro,$img,$schedule,$vitri,$schedule_start,$schedule_build,$schedule_success)
	{
		$sql = "INSERT INTO duan(id,title,price,intro,images,schedule,vitri,schedule_start,schedule_build,schedule_success)VALUES ('$id','$title','$price','$intro','$img','$schedule','$vitri','$schedule_start','$schedule_build','$schedule_success')";
		$this->exec($sql);
		return $this;
	}
	public function delete_duan($id)
	{
		$sql = "DELETE FROM duan where id=$id";
		$this->exec($sql);
	}
	public function get_duanId($id) 
	{
		$sql = "SELECT * FROM duan WHERE id=$id";
		return $this->getdata($sql);
	}
	public function update_duan($id,$title,$price,$intro,$img,$schedule,$vitri,$schedule_start,$schedule_build,$schedule_success)
	{
		$sql = "UPDATE duan set title = '$title', price = '$price', intro = '$intro', images = '$img', schedule = '$schedule', vitri = '$vitri', schedule_start = '$schedule_start', schedule_build = '$schedule_build', schedule_success = '$schedule_success' WHERE id='$id'";
		$this->exec($sql);
		return $this;
	}

	public function get_tintuc()
	{
		$sql = "SELECT * FROM tintuc";
		return $this->query($sql);
	}
	public function get_tintucId($id)
	{
		$sql = "SELECT * FROM tintuc WHERE id=$id";
		return $this->getdata($sql);
	}
	public function update_tintuc($id,$name,$image_link,$tintuc_detail)
	{
		$sql = "UPDATE tintuc set tintuc_name = '$name', images_url = '$image_link', tintuc_detail = '$tintuc_detail' WHERE id='$id'";
		$this->exec($sql);
		return $this;
	}
	public function delete_tintuc($id) 
	{
		$sql = "DELETE FROM tintuc where id=$id";
		$this->exec($sql);
	}
	public function add_tintuc($id,$name,$img,$tintuc_detail)
	{
		$sql = "INSERT INTO tintuc(id,tintuc_name,images_url,tintuc_detail)VALUES ('$id','$name','$img','$tintuc_detail')";
		$this->exec($sql);
		return $this;
	}
	public function add_orders($id,$name,$email,$phone,$noidung,$product_order)
	{
		$sql = "INSERT INTO orders(id,name,email,phone,noidung,product_order, time)VALUES ('$id','$name','$email','$phone','$noidung','$product_order', ".time().")";
		$this->exec($sql);
		return $this;
	}
	
	public function get_orders()
	{
		$sql = "SELECT * FROM orders";
		return $this->query($sql);;
	}
	
	public function get_orderss($thang = 0)
	{
		$sql = "SELECT orders.id, orders.product_order, duan.price, duan.vitri, orders.time FROM orders
		INNER JOIN duan WHERE duan.title = orders.product_order ".($thang != 0 ? 'AND MONTH(FROM_UNIXTIME(time)) = '.$thang.'' : '')."";
		return $this->query($sql);;
	}
	
	public function get_order($id)
	{
		$sql = "SELECT orders.id, orders.product_order, duan.price, duan.vitri FROM orders
		INNER JOIN duan WHERE duan.title = orders.product_order
		WHERE id = $id";
		return $this->query($sql);;
	}
}
?>