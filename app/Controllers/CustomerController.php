<?php namespace App\Controllers;

	use App\Models\CustomerModel ;
	/**
	 * 
	 */
	class CustomerController 
	{
		
		public function __construct()
		{
			$this->model = new CustomerModel() ;

		}

		
		public function addCtrl()
		{


			if(isset($_POST['action']) && $_POST['action'] == '送出')
			{				
				if(in_array(NULL, $_POST))
				{
					$error = '填入失敗' ;
					return $error ;

				}else {

					$data = [

						'systemNum'    => $_POST['systemNum'] ,
						'companyName' => $_POST['companyName'] ,
						'tel'     => $_POST['tel'] ,
						'fax'     => $_POST['fax'] ,
						'address' => $_POST['address'] ,
						'guiNum'  => $_POST['guiNum'] 
					] ;

					$this->model->addList( $data ) ;
				}				
			}		
		}



		public function getCtrl()
		{
			return $this->model->getList() ;			
		}



		public function deleteCtrl()
		{
			if(isset($_POST['delete']))
			{
				$id = $_POST['deleteNum'] ;
				$this->model->deleteList($id) ;

			}

		}

		public function editCtrl()
		{

		}



		
	}





 ?>