<?php namespace App\Models ;



	class DolistModels extends \CodeIgniter\Model
	{

		public function __construct()
		{
			
			$this->db = \Config\Database::connect() ;

		}
	

		public function getList()
		{
	
			$builder = $this->db->table('item') ;
			#$builder->orderBy('id') ;			
			$query = $builder->orderBy('id')->get() ;
			return $query->getResult() ;
			
		}


		public function addList( $dolist = NULL )
		{

			$builder = $this->db->table('item') ;
			$query = $builder->insert($dolist) ;


		}

		public function deleteList( $id = NULL )
		{
			$builder = $this->db->table('item') ;
			$query = $builder->delete([ 'id'=> $id ]) ;

		}

		public function editList( $id = NULL , $edit = NULL)
		{

			$builder = $this->db->table('item') ;
			$builder->where('id',$id) ;
			#var_dump($id) ;
			#var_dump($edit);
			$builder->update($edit) ;
		}

	}






 ?>