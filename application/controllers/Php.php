<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Php extends CI_Controller 
{
	public function info()
	{
		return phpinfo();
	}
}
