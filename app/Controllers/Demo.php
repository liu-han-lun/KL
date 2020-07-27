<?php 

namespace App\Controllers;

use App\Models\DemoModel;

class Demo extends BaseController
{
    public function __construct()
    {
        $this->model = new DemoModel();
    }

	public function index()
	{
        return view('Pages/demo/index', [
            'query' => $this->model->findAll(),
        ]);
    }
    
    public function add()
    {
        return view('Pages/demo/add');
    }

    public function runAdd()
    {
        $this->model->insert([
            'systemNum'    => $this->request->getPost('systemNum'),
            'companyName'  => $this->request->getPost('companyName'),
            'tel'          => $this->request->getPost('tel'),
            'fax'          => $this->request->getPost('fax'),
            'address'      => $this->request->getPost('address'),
            'guiNum'       => $this->request->getPost('guiNum')
        ]);

        return redirect()->to('/demo');
    }
    
    public function edit()
    {
        return view('Pages/demo/edit', [
            'customer' => $this->model->find($this->request->getGet('id'))
        ]);
    }

    public function runEdit()
    {
        $this->model->update($this->request->getPost('id'), [
            'systemNum'    => $this->request->getPost('systemNum'),
            'companyName'  => $this->request->getPost('companyName'),
            'tel'          => $this->request->getPost('tel'),
            'fax'          => $this->request->getPost('fax'),
            'address'      => $this->request->getPost('address'),
            'guiNum'       => $this->request->getPost('guiNum')
        ]);

        return redirect()->to('/demo');
    }

    public function delete()
    {
        $this->model->where('id', $this->request->getPost('id'))->delete();
		return redirect()->to('/demo');
    }
}
