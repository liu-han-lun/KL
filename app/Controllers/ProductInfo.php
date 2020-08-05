<?php 
	
	namespace App\Controllers ;
	use App\Models\ProductModel ;
	use App\Models\CustomerModel ;
	/**
	 * 
	 */
	class ProductInfo extends BaseController
	{		
		public function __construct()
		{
			$this->ProductModel = new ProductModel() ;
			$this->CustomerModel = new CustomerModel() ;		
		}

		public function index($page = 'ProductInfo')
		{				
			return view('Pages/BasicInfo/ProductInfo/index',[			
				'query' => $this->ProductModel->join('customer-info','customer-info.id = product-info.customerId')->orderBy('customer-info.id')->find()
			]) ;
		}

		public function add()
		{
			return view('Pages/BasicInfo/ProductInfo/add',[
				'query' => $this->CustomerModel->select(['id','companyName'])->find() 
			]) ;
		}

		public function runAdd()
		{			
			$this->ProductModel->insert([
	            'customerId'	=> $this->request->getPost('customerId'),
	            'productNum'	=> $this->request->getPost('productNum'),
	            'productSpec'	=> $this->request->getPost('productSpec'),
	            'unit'			=> $this->request->getPost('unit'),
	            'unitPrice'		=> $this->request->getPost('unitPrice'),
	            'sellingPrice'	=> $this->request->getPost('sellingPrice'), 
	            'PS'			=> $this->request->getPost('PS')
        	]);
			return redirect()->to('/ProductInfo') ;
		}
	}



 ?>