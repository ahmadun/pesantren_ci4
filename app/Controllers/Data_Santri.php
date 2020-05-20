<?php namespace App\Controllers;

class Data_Santri extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('pages/add_santri');
	}

}
