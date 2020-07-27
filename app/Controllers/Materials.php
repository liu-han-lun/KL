<?php namespace App\Controllers;

	/**
	 * 
	 */
	class Materials extends BaseController
	{
		
		public function index($page = 'Materials')
		{
			return view('Pages/Routine/Materials/index') ;
		}

	}
