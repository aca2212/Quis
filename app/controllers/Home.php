<?php

namespace App\Controllers;

use App\Core\Controller;

class Home extends Controller
{

	public function index()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->home('golongan/index', $data);
	}

	public function show()
	{
		$data['row_show'] = "Ini file app/controllers/Index.php - show()";
		$this->home('index/show', $data);
	}

	public function detail($id)
	{
		$data['row_detail'] = "Ini file app/controllers/Index.php - detail() - " . $id;
		$this->home('index/detail', $data);
	}
}
