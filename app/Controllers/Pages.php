<?php namespace App\Controllers;

	/**
	 * 
	 */
	class Pages extends BaseController
	{
		
		public function Madeorder($page = 'madeorder')
		{


			echo view('Templates/Header') ;
			echo view('Templates/Content') ;
			echo view('Pages/Madeorder') ;
			echo view('Templates/Footer') ;

		}

		public function Routine($page = 'routine')
		{

			echo view('Templates/Header') ;
			echo view('Templates/Content') ;
			echo view('Pages/Routine') ;
			echo view('Templates/Footer') ;

		}

		public function Materials($page = 'materials')
		{


			echo view('Templates/Header') ;
			echo view('Templates/Content') ;
			echo view('Pages/Materials') ;
			echo view('Templates/Footer') ;

		}

		public function TransferDocument($page = 'transferdocument')
		{

			
			echo view('Templates/Header') ;
			echo view('Templates/Content') ;
			echo view('Pages/TransferDocument') ;
			echo view('Templates/Footer') ;
		}
	}



 ?>