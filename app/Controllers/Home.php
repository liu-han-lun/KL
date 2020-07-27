<?php namespace App\Controllers;


class Home extends BaseController
{
	public function index($page = 'Home')
	{
		//return view('welcome_message');
		

		echo view('Templates/Header') ;
		echo view('Templates/Content') ;
		echo view('Pages/Home')	;
		echo view('Templates/Footer') ;
		
	}

	

	

	//--------------------------------------------------------------------

}
