<?php 

/**
 * INI Controllers Home Class Home
 */
class Home extends Controller
{
	public function index () {
		$data ['judul'] = 'Home';
		$data ['nama'] = $this->model('User_model')->getUser();
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/header');
	}
	
}