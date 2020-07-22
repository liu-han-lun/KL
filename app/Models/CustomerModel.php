<?php  namespace App\Models ;


	/**
	  * 
	  */
	 class CustomerModel extends \CodeIgniter\Model
	 {
	 	
	 	public function __construct()
	 	{
	 		$this->db = \Config\Database::connect() ;
	 	}



	 	public function getList()
	 	{

	 		$builder = $this->db->table('customer-info') ;
	 		$query = $builder->orderBy('id')->get() ;
	 		return $query->getResult() ; 

	 	}


	 	public function addList( $CustomerList = NULL )
	 	{

	 		$builder = $this->db->table('customer-info') ;
	 		$query = $builder->insert($CustomerList) ;

	 	}


	 	public function deleteList($id = NULL)
	 	{

	 		$builder = $this->db->table('customer-info') ;
	 		$query = $builder->delete( [ 'id' => $id ] ) ;
	 	}


	 	public function editList( $id = NULL , $edit = NULL )
	 	{

	 		$builder = $this->db->table('customer-info') ;
	 		$builder->where( 'id' , $id ) ;
	 		$builder->update( $edit ) ;


	 	}




	 } 






 ?>