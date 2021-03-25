<?php
include '../model/connect.php';
include '../model/m_product.php';
include '../model/user.php';

session_start();

if(!isset($_SESSION['cart']))
$_SESSION['cart'] = array();

if(isset($_GET["action"]))
    $action=$_GET["action"];
elseif (isset($_POST['action']))
{
    $action=$_POST["action"];
}
else $action="home";

unset($_SESSION['messages']);

switch($action)
{
    case 'home':
        include("../view/home.php");
        break;
    case 'gioithieu':
        include("../view/gioithieu.php");
        break;
    case 'dieukhoan':
        include("../view/dieukhoan.php");
        break;
    case 'lienhe':
        include("../view/lienhe.php");
        break;
    case 'hoan_thanh':
        include("../view/hoan_thanh.php");
        break;
    case 'chua_hoan_thanh':
        include("../view/chua_hoan_thanh.php");
        break;
    case 'productdetail':
        include("../view/productdetail.php");
        break;
    case 'login':
        include '../view/login.php';
        break;
    case 'tintuc':
        include("../view/tintuc.php");
        break;
    case 'loginaction':
        if(isset($_SESSION['admin']) || isset($_SESSION['adminh']))
		{
            include 'view/home.php';
        }
		else
		{
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $u = new user();
            $us = $u->login($user,md5($pass));
            if (!empty($us)) {
                $_SESSION['admin'] = $us[0];
                $_SESSION['adminh'] = $us[1];
                include '../view/home.php';
            } else {
                echo '<script> alert("Sai user hoặc password");</script>';
                include '../view/login.php';
            }
        }
        break;
    case 'logout':
        if(isset($_SESSION['admin']) || isset($_SESSION['adminh']))
		{
            $_SESSION = array();
            session_destroy();
            include '../view/home.php';
        }
		else
		{
            include '../view/home.php';
        }
        break;
    case 'register':
        include '../view/register.php';
        break;
    case 'registeraction':
        if(isset($_SESSION['admin']) || isset($_SESSION['adminh']))
		{
            include '../view/home.php';
        }
		else
		{
            $useridd = rand();
            $username = $_POST['username'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['pass']);
            $db = new user();
            $check = $db->checkuser($username);
            if(empty($check))
			{
                $query = "INSERT INTO users (useridd,username,fullname,email,password) VALUES ('$useridd','$username','$name','$email','$password')";
                $db->exec($query);
                $_SESSION['admin']= $name;
                $_SESSION['adminh']= $name;
                include("../view/home.php");
                echo "<script>alert('Đăng ký thành công');</script>";
            }
			else
			{
                echo "<script>alert('Username bạn chọn đã tồn tại vui lòng chọn username khác !');</script>";
                include '../view/register.php';
            }
        }
        break;
   case 'edituser':
        include '../view/admin/edituser.php';
        break;
    case 'editactiveuser':
        $username = $_POST['username'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c = new user();
        $user_id = $c->get_user($_GET['useridd']);
        $id = $user_id['useridd'];
        $update = $c->update_user($id,$username,$fullname,$email,$password);
        echo "<script>alert('Sửa thành công!');</script>";
        include '../view/admin/ad-member.php';
        break;

    case 'deleteuser':
        $d = new user();
        $dele = $d->delete_user($_GET['useridd']);
        include '../view/admin/ad-member.php';
        echo "<script>alert('Xóa thành công!');</script>";
        break;

    case 'admin':
        if ($_SESSION['admin']==1) {
            include '../view/admin/admin.php';
        }else {
            include '../view/home.php';
        }
        break;
    case 'adproduct':
        if ($_SESSION['admin']==1) {
            include '../view/admin/ad-product.php';
        }else {
            include '../view/home.php';
        }
        break;
    case 'admember':
        if ($_SESSION['admin']==1) {
            include '../view/admin/ad-member.php';
        }else {
            include '../view/home.php';
        }
        break;
    case 'editproduct':
        if ($_SESSION['admin']==1) {
            include '../view/admin/editproduct.php';
        }else {
            include '../view/home.php';
        }
        break;
    case 'loaibds':
        if ($_SESSION['admin']==1) {
            include '../view/admin/loaibds.php';
        }else {
            include '../view/home.php';
        }
        break;
     case 'productbrand':
        include("../view/product.php");

        break;
    case 'editactive':
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image_link = $_POST['img'];
        $brand = $_POST['brand'];
        $product_details = $_POST['product_details'];
        $vitri = $_POST['vitri'];
        $z = new m_product();
        $hinh = $z->get_productId($_GET['id']);
        $img = $hinh['product_img'];
        $id = $hinh['product_id'];
        //$brand = $hinh['product_brand_id'];
        $update = $z->update_product($id,$name,$price,$img,$image_link,$brand,$product_details,$vitri);
        echo "<script>alert('Sửa thành công!');</script>";
        include '../view/admin/ad-product.php';
        break;
    case 'deleteproduct':
        $d = new m_product();
        $dele = $d->delete_product($_GET['id']);
        include '../view/admin/ad-product.php';
        echo "<script>alert('Xóa thành công!');</script>";
        break;
    case 'adminaddproduct':
        include '../view/admin/addproduct.php';
        break;
    case 'adminadd':
        $idpro = rand();
        $name = $_POST['name'];
        $price = $_POST['price'];
        $img = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"],"images/product/" . $_FILES["img"]["name"]);
        $brand = $_POST['brand'];
        $product_details = $_POST['product_details'];
        $vitri = $_POST['vitri'];
        $a = new m_product();
        $add = $a->add_product($idpro,$name,$price,$img,$brand,$product_details,$vitri);
        include '../view/admin/ad-product.php';
        echo "<script>alert('".$idpro."Thêm thành công');</script>";
        break;

    case 'adminaddloaibds':
        include '../view/admin/addloaibds.php';
        break;
    case 'add_loaibds':
        $idpro = rand();
        $name = $_POST['name'];
        $c = new m_product();
        $add = $c->add_loaibds($idpro,$name);
        include '../view/admin/loaibds.php';
        echo "<script>alert('Thêm thành công');</script>";
        break;
    case 'delete_loaibds':
        $d = new m_product();
        $dele = $d->delete_loaibds($_GET['id']);
        include '../view/admin/loaibds.php';
        echo "<script>alert('Xóa thành công!');</script>";
        break;
    //Dự án
    case 'duan':
        if ($_SESSION['admin']==1) {
            include '../view/admin/du_an.php';
        }else {
            include '../view/home.php';
        }
        break;
    case 'deleteduan':
        $d = new m_product();
        $dele = $d->delete_duan($_GET['id']);
        include '../view/admin/du_an.php';
        echo "<script>alert('Xóa thành công!');</script>";
        break;
    case 'add_duan':
        include '../view/admin/addduan.php';
        break;
    case 'addduan':
        $idpro = rand();
        $title = $_POST['title'];
        $img = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"],"images/duan/" . $_FILES["img"]["name"]);
        $price = $_POST['price'];
        $intro = $_POST['intro'];
        $schedule = $_POST['schedule'];
        $vitri = $_POST['vitri'];
        $schedule_start = $_POST['schedule_start'];
        $schedule_build = $_POST['schedule_build'];
        $schedule_success = $_POST['schedule_success'];

        $addduan = new m_product();
        $add = $addduan->add_duan($idpro,$title,$price,$intro,$img,$schedule,$vitri,$schedule_start,$schedule_build,$schedule_success);
        include '../view/admin/du_an.php';
        echo "<script>alert('".$idpro."Thêm thành công');</script>";
        break;
    case 'editduan':
        include '../view/admin/editduan.php';
        break;
    case 'edit_duan':
        $title = $_POST['title'];
        $price = $_POST['price'];
        $img = $_POST['img'];
        $intro = $_POST['intro'];
        $schedule = $_POST['schedule'];
        $vitri = $_POST['vitri'];
        $schedule_start = $_POST['schedule_start'];
        $schedule_build = $_POST['schedule_build'];
        $schedule_success = $_POST['schedule_success'];
        $edit_duan = new m_product();
        $hinh = $edit_duan->get_duanId($_GET['id']);
        $id = $hinh['id'];
        $update = $edit_duan->update_duan($id,$title,$price,$intro,$img,$schedule,$vitri,$schedule_start,$schedule_build,$schedule_success);
        echo "<script>alert('Sửa thành công!');</script>";
        include '../view/admin/du_an.php';
        break;
    case 'ad-hoanthanh':
        include '../view/admin/hoanthanh.php';
        break;
    case 'ad-chuahoanthanh':
        include '../view/admin/chuahoanthanh.php';
        break;
    case 'duandetail':
        include("../view/duandetail.php");
        break;

    // Tin Tức
    case 'tintuc':
        if ($_SESSION['admin']==1) {
            include '../view/tintuc.php';
        }else {
            include '../view/home.php';
        }
        break;
    case 'adtintuc':
        include '../view/admin/admin-tintuc.php';
        break;
    case 'edit_tintuc':
        include '../view/admin/edittintuc.php';
        break;
    case 'edittintuc':
        $name = $_POST['name'];
        $image_link = $_POST['img'];
        $tintuc_detail = $_POST['tintuc_detail'];
        $edittintuc = new m_product();
        $hinh = $edittintuc->get_tintucId($_GET['id']);
        $id = $hinh['id'];
        //$brand = $hinh['product_brand_id'];
        $update = $edittintuc->update_tintuc($id,$name,$image_link,$tintuc_detail);
        echo "<script>alert('Sửa  thành công!');</script>";
        include '../view/admin/admin-tintuc.php';
        break;
    case 'delete_tintuc':
        $d = new m_product();
        $dele = $d->delete_tintuc($_GET['id']);
        include '../view/admin/admin-tintuc.php';
        echo "<script>alert('Xóa thành công!');</script>";
        break;
    case 'add_tintuc':
        include '../view/admin/addtintuc.php';
        break;
    case 'adminadd_tintuc':
        $idpro = rand();
        $name = $_POST['name'];
        $img = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"],"images/tintuc/" . $_FILES["img"]["name"]);
        $tintuc_detail = $_POST['tintuc_detail'];
        $tintuc = new m_product();
        $add = $tintuc->add_tintuc($idpro,$name,$img,$tintuc_detail);
        include '../view/admin/admin-tintuc.php';
        echo "<script>alert('".$idpro."Thêm thành công');</script>";
        break;
    case 'tintucdetail':
        include("../view/tintucdetail.php");
        break;

    case 'orders':
        $idpro = rand();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $noidung = $_POST['noidung'];
        $product_order = $_POST['product_order'];
        $orders = new m_product();
        $add = $orders->add_orders($idpro,$name,$email,$phone,$noidung,$product_order);
        include '../view/home.php';
        echo "<script>alert('Đặt thành công');</script>";
        break;
     case 'adorders':
        include '../view/admin/orders.php';
	break;
	
     case 'thongke':
        include '../view/admin/thongke.php';
	break;
}
?>
