<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {

    public function __contruct()
    {
        parrent::__contruct();
    }


	public function index()
	{
       $this->load->model('IndexModel');


		$this->load->view('pages/template/header');
        $this->load->view('pages/template/slider');
        $this->load->view('pages/home');
		$this->load->view('pages/template/footer');
	}

    public function category($id)
	{

		$this->load->view('pages/template/header');
        $this->load->view('pages/template/slider');
        $this->load->view('pages/category');
		$this->load->view('pages/template/footer');
	}

    public function brand($id)
	{
       
		$this->load->view('pages/template/header');
        $this->load->view('pages/template/slider');
        $this->load->view('pages/brand');
		$this->load->view('pages/template/footer');
	}

    public function cart($id)
	{
      
		$this->load->view('pages/template/header');
        $this->load->view('pages/template/slider');
        $this->load->view('pages/cart');
		$this->load->view('pages/template/footer');
	}

    public function login($id)
	{
     
		$this->load->view('pages/template/header');
        $this->load->view('pages/template/slider');
        $this->load->view('pages/login');
		$this->load->view('pages/template/footer');
	}
}
