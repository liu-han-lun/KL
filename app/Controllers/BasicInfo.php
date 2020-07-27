<?php namespace App\Controllers; 


	/**
	 * 基本資料-選項
	 */
	class BasicInfo extends BaseController
	{
		
		public function index( $page = 'BasicInfo')
		{
			return view('Pages/BasicInfo/index') ;
		}

		
	}




 ?>