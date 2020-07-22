<?php  namespace App\Controllers ;

		use App\Controllers\CustomerControllers ;

		session_start() ;
	/**
	 * 基本資料-廠商資料
	 */

	
	class PageCustomer extends BaseController
	{


		
		public function CustomerInfo($page = 'customerinfo')
		{


			$customer = new CustomerController ;


			if($_SESSION['decide'] == $_POST['decide'])
			{

				$data['error'] = $customer -> addCtrl() ;
				$_SESSION['decide'] += 1 ;
			}


			$data['companyList'] = $customer -> getCtrl() ;


			echo view('Templates/Header') ;
			echo view('Templates/Content') ;
			echo view('Pages/CustomerInfo' ,

					[ 
						'companyList' => $data['companyList'],
						'error' => $data['error']
					]) ;			

			echo view('Templates/Footer') ;
		}

		public function NewCustomer($page = 'newcustomer')
		{

			if(isset($_SESSION['decide']))
			{
				$_SESSION['decide'] = 0 ;

			}

			echo view('Templates/Header') ;
			echo view('Templates/Content') ;
			echo view('Pages/NewCustomer') ;			
			echo view('Templates/Footer') ;
		}
	}





 ?>