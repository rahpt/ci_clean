<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->helper(['url', 'language']);

        $this->lang->load('auth');
    }

    public function getNavList()
    {
        $nav_list = array('Home' => '/', 'Blog' => 'welcome/blog', 'About' => 'welcome/about');
        if ($this->ion_auth->logged_in()) {
            $nav_list['Logout'] = 'auth/logout';
            $nav_list['profile'] = 'auth/profile';
        } else {
            $nav_list['Login'] = 'auth/login';
        }
        return $nav_list;
    }

    public function index()
    {
        $this->template->set('nav_list', $this->getNavList());
        $this->template->set('title', 'Welcome');
        $this->template->set('nav', 'Home');
        $this->template->load_clean('welcome');
    }

    public function about()
    {
        $this->template->set('nav_list', $this->getNavList());
        $this->template->set('title', 'About');
        $this->template->set('nav', 'About');
        $this->template->load_clean('about');
    }

    public function blog()
    {
        $this->template->set('nav_list', $this->getNavList());
        $this->template->set('title', 'Blog');
        $this->template->set('nav', 'Blog');
        $this->template->load_clean('blog');
    }
}
