<?php
namespace App\Controllers;
use CodeIgniter\Controller;



class testClass extends Controller
{

	
	public function check_package($file = null,$data = null)
	{
		// Do Not Edit This Line

			$this->cache = \Config\Services::cache();
	
			
			$check = $this->cache->save($file, json_encode($data), 86400);
			return $check;

	}

	public function delete_package($file = null){
		$this->cache = \Config\Services::cache();
		 $check =  $this->cache->delete($file);
		 return $check;
	}
}


