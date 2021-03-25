<?php
require_once("connect.php");
class user extends connect
{
	var $userid = null;
    var $username = null;
    var $password = null;
    var $fullname = null;
    var $email = null;
    public function login($username,$password)
	{
    	$sql = "SELECT * from users where username='$username' and password='$password'";
    	return $this->getdata($sql);
    }
    public function checkuser($username)
	{
		$sql = "SELECT * FROM users WHERE username='$username'";
		return $this->getdata($sql);
	}
	public function get_user($id)
	{
		$sql = "SELECT * FROM users WHERE useridd='$id'";
		return $this->getdata($sql);
	}
	public function update_user($id,$username,$fullname,$email,$password)
	{
		$sql = "UPDATE users set username = '$username', fullname = '$fullname', email = '$email', password = '$password' WHERE useridd='$id'";
		$this->exec($sql);
		return $this;	
	}
	
	public function delete_user($id)
	{
		$sql = "DELETE FROM users where useridd=$id";
		$this->exec($sql);
		return $this;	
	}
}   
?>