<?php

	namespace App\Models ;

	/**
	 * 
	 */
	class ProductModel extends \CodeIgniter\Model
	{		
		protected $table = 'product-info';
		protected $allowedFields = [
			'companyName'	,
			'productNum'	,
			'productSpec'	,
			'unit'			,
			'unitPrice'		,
			'sellingPrice'	,
			'PS'
		] ;
	}


 ?>