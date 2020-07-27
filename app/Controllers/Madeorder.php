<?php namespace App\Controllers;

	/**
	 * 
	 */
	class Madeorder extends BaseController
	{
		
		public function index($page = 'Madeorder')
		{
			return view('Pages/Routine/Madeorder/index') ;
		}

	}
