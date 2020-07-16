<?php namespace App\Controllers; 


	/**
	 * 基本資料-選項
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

		
	}




 ?>