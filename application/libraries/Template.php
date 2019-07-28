<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * https://jeromejaglale.com/doc/php/codeigniter_template
 */

class Template
{

    private $_CI;
    private $template_data = array();

    public function __construct()
    {
        $this->_CI = & get_instance();
    }

    public function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    public function load_main($view = '', $view_data = array(), $return = FALSE)
    {
        $this->set('nav_list', array('Home', 'Photos', 'About', 'Login'));
        $this->load('template/template', $view, $view_data, $return);
    }

    public function load_clean($view = '', $view_data = array(), $return = FALSE)
    {
        if (!array_key_exists('nav_list', $this->template_data)) {
            $this->set('nav_list', array());
        }
        $this->load('template/clean', $view, $view_data, $return);
    }

    public function load($template = '', $view = '', $view_data = array(), $return = FALSE)
    {
        $this->set('contents', $this->_CI->load->view($view, $view_data, TRUE));
        return $this->_CI->load->view($template, $this->template_data, $return);
    }
}
