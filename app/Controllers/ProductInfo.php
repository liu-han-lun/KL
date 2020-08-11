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
					->select('customer-info.id AS cust_id , companyName , product-info.customerId')
					->join('product-info','product-info.customerId = customer-info.id ')
					->distinct()
					->orderBy('cust_id')
					->find() ;

			$query = $this->ProductModel
					->select('product-info.id AS prod_id , product-info.*,customer-info.id , customer-info.companyName')
					->join('customer-info','customer-info.id = product-info.customerId')
					->orderBy('prod_id')
					->find() ;

								
			return view('Pages/BasicInfo/ProductInfo/index',[			
				'query' =>$query,
				'companyName' => $data,
			]) ;
		}

		public function add()
		{
			return view('Pages/BasicInfo/ProductInfo/add',[
				'query' => $this->CustomerModel->select('id , companyName')->orderBy('id')->find() 
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

		public function edit()
		{
			$query = $this->CustomerModel
					 ->select('id As cust_id , companyName')
					 ->orderBy('cust_id')
					 ->find() ;

			$product = $this->ProductModel
					 ->select('product-info.id AS prod_id , product-info.* , customer-info.id , customer-info.companyName')
					 ->join('customer-info','customer-info.id = product-info.customerId')
					 ->find($this->request->getGet('id')) ;		 

			return view('Pages/BasicInfo/ProductInfo/edit',[
				'query' => $query ,
				'product' => $product
			]) ;
		}

		public function runEdit()
		{
			$this->ProductModel->update($this->request->getPost('id'),[
				'customerId'	=> $this->request->getPost('customerId'),
	            'productNum'	=> $this->request->getPost('productNum'),
	            'productSpec'	=> $this->request->getPost('productSpec'),
	            'unit'			=> $this->request->getPost('unit'),
	            'unitPrice'		=> $this->request->getPost('unitPrice'),
	            'sellingPrice'	=> $this->request->getPost('sellingPrice'), 
	            'PS'			=> $this->request->getPost('PS')
			]) ;
			return redirect()->to('/ProductInfo') ;			
		}

		public function delete()
		{
			$this->ProductModel->where('id', $this->request->getPost('id'))->delete() ;
			return redirect()->to('/ProductInfo') ;
		}
	}



 ?>