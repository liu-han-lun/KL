<?php namespace App\Controllers;

	/**
	 * 
	 */
	class Routine extends BaseController
	{
		
		public function index($page = 'Routine')
		{
			return view('Pages/Routine/index') ;
		}

	}



 ?>