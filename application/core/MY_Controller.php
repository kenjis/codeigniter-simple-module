<?php

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load_module();
	}

	protected function load_module()
	{
		$module = $this->get_module_name();
		$this->load->add_package_path(APPPATH.'modules/'.$module);
	}

	protected function get_module_name()
	{
		$class = new ReflectionClass($this);
		$file = $class->getFileName();
		$paths = explode('/', dirname($file));
		array_pop($paths);	// remove 'controllers'
		return array_pop($paths);
	}
}
