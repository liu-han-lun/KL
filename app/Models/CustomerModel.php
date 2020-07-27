<?php  namespace App\Models ;


	/**
	  * 
	  */
	 class CustomerModel extends \CodeIgniter\Model
	 {
	 	protected $table = 'customer-info' ;
	 	protected $allowedFields = ['systemNum', 'companyName', 'tel', 'fax', 'address', 'guiNum'] ;
	 } 






 ?>