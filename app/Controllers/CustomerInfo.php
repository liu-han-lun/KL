<?php  namespace App\Controllers ;

	/**
	 * 基本資料-廠商資料
	 */
	use App\Models\CustomerModel ;
	
	class CustomerInfo extends BaseController
	{
		public function __construct()
	    {
	        $this->model = new CustomerModel();
	    }
	
		public function index($page = 'customerinfo')
		{
			return view('Pages/BasicInfo/CustomerInfo/index',[
				'query' => $this->model->orderBy('id')->findAll()
			]) ;			
		}

		public function add($page = 'customerAdd')
		{
			return view('Pages/BasicInfo/CustomerInfo/add') ;
		}

		public function runAdd($page ='runAdd')
		{
			$this->model->insert([
				'systemNum'  	=> $this->request->getPost('systemNum') ,
				'companyName'	=> $this->request->getPost('companyName'),
	            'tel'        	=> $this->request->getPost('tel'),
	            'fax'        	=> $this->request->getPost('fax'),
	            'address'    	=> $this->request->getPost('address'),
	            'guiNum'    	=> $this->request->getPost('guiNum')
			]) ;
			return redirect()->to('/CustomerInfo') ;
		}

		public function edit()
		{
			return view('Pages/BasicInfo/CustomerInfo/edit',[
				'customer' => $this->model->find($this->request->getGet('id'))
			]) ;
		}

		public function runEdit()
		{
			$this->model->update($this->request->getPost('id'),[
				'systemNum'    => $this->request->getPost('systemNum'),
            	'companyName'  => $this->request->getPost('companyName'),
            	'tel'          => $this->request->getPost('tel'),
            	'fax'          => $this->request->getPost('fax'),
            	'address'      => $this->request->getPost('address'),
            	'guiNum'       => $this->request->getPost('guiNum')
			]) ;
			return redirect()->to('/CustomerInfo') ;
		}

		public function delete()
		{
			$this->model->where('id', $this->request->getPost('id'))->delete() ;
			return redirect()->to('/CustomerInfo') ;
		}
	}





 ?>