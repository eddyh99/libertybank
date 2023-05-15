<?php
// if(isset($this->session->role == 'member')){
// 	//Menggabungkan semua bagian halaman
// 	require_once('header.php');
// 	if (isset($content)){
// 		$this->load->view($content);
// 	}
// 	require_once('footer.php');

// }else {
//Menggabungkan semua bagian halaman
require_once('header.php');
if (isset($content)){
	$this->load->view($content);
}
//if (isset($this->session->userdata['logged_status'])) {
require_once('footer.php');
//}
// }