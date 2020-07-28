<?php 
	
	namespace App\Controllers ;
	use App\Models\ProductModel ;
	/**
	 * 
	 */
	class ProductInfo extends BaseController
	{		
		public function __construct()
		{
			$this->model = new ProductModel() ;		
		}

		public function index($page = 'ProductInfo')
		{
			return view('Pages/BasicInfo/ProductInfo/index',[
				'queryA' => $this->model->find(['companyName' => '福隆']),
				'queryB' => $this->model->find(['companyName' => '萬得富'])
			]) ;
		}
	}



 ?>