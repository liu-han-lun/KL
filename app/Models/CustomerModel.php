<?php  namespace App\Models ;


	/**
	  * 
	  */
	 class CustomerModel extends \CodeIgniter\Model
	 {
	 	protected $table = 'customer-info' ;
	 	protected $allowedFields = ['companyName', 'tel', 'fax', 'address', 'guiNum'] ;
	 } 






 ?>