<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppAdmin extends CI_Controller
{
	/**
	 * @return void
	 **/

	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('cu_level') === 'Admin')
		{
			return TRUE;
		}
		else
		{
			show_404(); // OR redirect('login');
			return FALSE;
		}
	}
}

class AppKaryawan extends CI_Controller
{
	/**
	 * @return void
	 **/

	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('cu_level') === 'Pegawai')
		{
			return TRUE;
		}
		else
		{
			show_404(); // OR redirect('login');
			return FALSE;
		}
	}
}

class AppBoth extends CI_Controller
{
	/**
	 * @return void
	 **/

	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('cu_level') === 'Admin' || $this->session->userdata('cu_level') === 'Pegawai')
		{
			return TRUE;
		}
		else
		{
			show_404(); // OR redirect('login');
			return FALSE;
		}
	}
}