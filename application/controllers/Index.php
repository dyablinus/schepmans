<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
		 }
    public function index(){
		$this->render('schepmans/index');
	}
	public function apitwitter(){
		$this->render('schepmans/apitwitter');
	}
	public function acceuil(){

		$this->render('templatetwitter/twitter');
	}


}
