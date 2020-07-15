<?php namespace App\Controllers; 


	/**
	 * 
	 */
	class PageBasic extends BaseController
	{
		
		public function BasicInfo( $page = 'basicinfo')
		{


			echo view('Templates/Header') ;
			echo view('Templates/Content') ;
			echo view('Pages/BasicInfo') ;
			echo view('Templates/Footer') ;
		}


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