<?php

	namespace App\Models ;

	/**
	 * 
	 */
	class ProductModel extends \CodeIgniter\Model
	{		
		protected $table = 'product-info';
		protected $allowedFields = [
			'customerId'	,
			'productNum'	,
			'productSpec'	,
			'unit'			,
			'unitPrice'		,
			'sellingPrice'	,
			'PS'
		] ;
	}


 ?>