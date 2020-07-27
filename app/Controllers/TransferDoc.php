<?php namespace App\Controllers;

	/**
	 * 
	 */
	class TransferDoc extends BaseController
	{
		
		public function index($page = 'TransferDoc')
		{
			return view('Pages/Routine/TransferDoc/index') ;
		}

	}
