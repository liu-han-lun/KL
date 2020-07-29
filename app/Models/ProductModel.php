<?php

	namespace App\Models ;

	/**
	 * 
	 */
	class ProductModel extends \CodeIgniter\Model
	{		
		protected $table = 'product-info';
		protected $allowedFields = [
			'systemNum'		,
			'productNum'	,
			'productSpec'	,
			'unit'			,
			'unitPrice'		,
			'sellingPrice'	,
			'PS'
		] ;
	}


 ?>