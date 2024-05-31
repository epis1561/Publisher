<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		$this -> DB = $this -> load -> database('default', TRUE);
		$this -> load -> model('data_model');
		$this -> load -> library('user_agent');
	}
	 		 	
	function _remap($method) {		
		$data['separator1'] = $this -> uri -> segment('1');
		$data['separator2'] = $this -> uri -> segment('2');
		if ($this -> agent -> is_mobile()) {
			$data['is_mobile'] = true;
		}
		else {
			$data['is_mobile'] = false;
		}		
		$this -> load -> view('include/header', $data);
		if (method_exists($this, $method)) $this -> {"{$method}"}();
		$this -> load -> view('include/footer', $data);
	} 	 
	 
	public function index()
	{
		if ($this -> agent -> is_mobile()) {
			$data['is_mobile'] = true;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/main/m/01_*.jpg";
		}		
		else {
			$file = $_SERVER['DOCUMENT_ROOT']."/images/main/01_*.jpg";
			$data['is_mobile'] = false;
		}
		$files = glob($file);
    	if ($files !== false) $data['imgCount'] = count($files);
		$this->load->view('welcome_message', $data);

		$sql = "SELECT * FROM `popup` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
		$data['popups'] = $this -> data_model -> getList($sql, 'DB');
		$sql = "SELECT * FROM `slide` WHERE `is_open` = '1' ORDER BY `ordering` ASC, `idx` DESC";
		$data['slides'] = $this -> data_model -> getList($sql, 'DB');
		$this -> load -> view('include/popup', $data);
	}

	public function about()
	{
		if ($this -> agent -> is_mobile()) {
			$data['is_mobile'] = true;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/about/m/01_*.jpg";
			$files = glob($file);
    		if ($files !== false) $data['imgCount1'] = count($files);
			$file = $_SERVER['DOCUMENT_ROOT']."/images/about/m/02_*.jpg";
			$files = glob($file);
    		if ($files !== false) $data['imgCount2'] = count($files);
			$file = $_SERVER['DOCUMENT_ROOT']."/images/about/m/03_*.jpg";
			$files = glob($file);
    		if ($files !== false) $data['imgCount3'] = count($files);
			$file = $_SERVER['DOCUMENT_ROOT']."/images/about/m/04_*.jpg";
			$files = glob($file);
    		if ($files !== false) $data['imgCount4'] = count($files);
		}
		else {
			$data['is_mobile'] = false;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/about/01_*.jpg";
			$files = glob($file);
    		if ($files !== false) $data['imgCount1'] = count($files);
			$file = $_SERVER['DOCUMENT_ROOT']."/images/about/02_*.jpg";
			$files = glob($file);
    		if ($files !== false) $data['imgCount2'] = count($files);
			$file = $_SERVER['DOCUMENT_ROOT']."/images/about/03_*.jpg";
			$files = glob($file);
    		if ($files !== false) $data['imgCount3'] = count($files);
			$file = $_SERVER['DOCUMENT_ROOT']."/images/about/04_*.jpg";
			$files = glob($file);
    		if ($files !== false) $data['imgCount4'] = count($files);
		}
		$this->load->view('about', $data);
	}

	public function room()
	{
		$data['cate'] = $this -> uri -> segment('2');
		$data['subNum'] = sprintf('%02d', $data['cate']);
		if ($this -> agent -> is_mobile()) {
			$data['is_mobile'] = true;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/room".$data['subNum']."/m/01_*.jpg";			
		}
		else {
			$data['is_mobile'] = false;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/room".$data['subNum']."/01_*.jpg";
		}
		$files = glob($file);
    	if ($files !== false) $data['imgCount1'] = count($files);
		$file = $_SERVER['DOCUMENT_ROOT']."/images/room".$data['subNum']."/img01_*.jpg";
		$files = glob($file);
    	if ($files !== false) $data['imgCount2'] = count($files);
		$this->load->view('room', $data);
	}

	public function special()
	{
		$data['cate'] = $this -> uri -> segment('2');
		$data['subNum'] = sprintf('%02d', $data['cate']);
		if ($this -> agent -> is_mobile()) {
			$data['is_mobile'] = true;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special/m/".$data['subNum']."_*.jpg";
		}
		else {
			$data['is_mobile'] = false;
			$file = $_SERVER['DOCUMENT_ROOT']."/images/special/".$data['subNum']."_*.jpg";
		}
		$files = glob($file);
    	if ($files !== false) $data['imgCount'] = count($files);
		$this->load->view('special', $data);
	}

	public function reserve()
	{
		$this->load->view('reserve');
	}

	public function reservation()
	{
		$this->load->view('reservation');
	}
	public function preview1()
	{
		$this->load->view('preview1');
	}
	public function tour()
	{
		$this->load->view('tour');
	}
}
