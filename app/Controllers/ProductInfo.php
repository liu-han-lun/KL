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
			$data = $this->CustomerModel
					->select(['customer-info.id','companyName'])
					->join('product-info','product-info.customerId = customer-info.id')
					->distinct()
					->orderBy('customer-info.id')
					->find() ;

			$query = $this->ProductModel
					->join('customer-info','customer-info.id = product-info.customerId')
					->orderBy('product-info.id')
					->find() ;	

			return view('Pages/BasicInfo/ProductInfo/index',[			
				'queryA' =>$query,
				'companyName' => $data 
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