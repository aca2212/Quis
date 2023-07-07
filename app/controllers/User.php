<?php

namespace App\Controllers;

use App\Core\Controller;

class User extends Controller
{
	protected object $model;

    public function __construct() {
        $this->model = new \App\Models\user();
    }


	public function index()
	{
		$data['rows'] = $this->model->all();
		$this->home('user/index', $data);
	}

	public function create()
	{
		$this->home('user/create');
	}

	public function store()
	{
		$this->model->store();
		header('location:'.  URL . '/user');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->home('user/edit');
	}

	public function update()
	{
		$this->model->update();
		header('location:'.  URL . '/user');
	}

    public function delete($id)
	{
		$data['row'] = $this->model->delete($id);
		header('location:'.  URL . '/user');
	}
}
