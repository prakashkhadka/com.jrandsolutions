<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @Author: Ryan Basnet
 * @Date:   2016-06-12 11:41:06
 * @Last Modified by:   Ryan Basnet
 * @Last Modified time: 2016-06-12 11:57:29
 */

class Login extends MY_Controller{


	function __construct(){
		
		parent::__construct();
		
	}

	function index(){

		$this->load->view('login/login');
	}
}