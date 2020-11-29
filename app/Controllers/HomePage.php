<?php namespace App\Controllers;

class HomePage extends BaseController
{
	public function index()
	{
		$data = [];

		echo view('homepage', $data);
	}

	//--------------------------------------------------------------------

	public function addserver()
	{
		echo view('addserver');
	}

	//--------------------------------------------------------------------

	public function server()
	{
		echo view('server');
	}

	//--------------------------------------------------------------------

	public function serverdescription()
	{
		echo view('serverdescription');
	}

	//--------------------------------------------------------------------

	public function iniciante()
	{
		echo view('iniciante');
	}

	//--------------------------------------------------------------------
}
