<?php  namespace App\Controllers ;



	/**
	 * 基本資料-廠商資料
	 */

	
	class PageCustomer extends BaseController
	{
		
		public function CustomerInfo($page = 'customerinfo')
		{

			echo view('Templates/Header') ;
			echo view('Templates/Content') ;
			echo view('Pages/CustomerInfo') ;			
			echo view('Templates/Footer') ;
		}

		public function NewCustomer($page = 'newcustomer')
		{

			echo view('Templates/Header') ;
			echo view('Templates/Content') ;
			echo view('Pages/NewCustomer') ;			
			echo view('Templates/Footer') ;
		}
	}





 ?>