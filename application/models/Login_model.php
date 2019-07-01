<?php 
	/**
	 * 
	 */
	class Login_model extends CI_Model
	{
		/////Cek username & pass admin
		function auth_admin($username,$password)
		{
			$query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password' LIMIT 1"); 
			return $query;
		}
		/////Cek username & pass Guru
		function auth_guru($username,$password){
			$query=$this->db->query("SELECT * FROM guru WHERE username='$username' AND password='$password' LIMIT 1"); return $query;
		}
		// function auth_siswa ($username,$password){
		// 	$query=$this->db->query("SELECT * FROM siswa WHERE nis='$username' AND pass=MD5('$password')LIMIT 1"); return $query;
		// }
	}
 ?>