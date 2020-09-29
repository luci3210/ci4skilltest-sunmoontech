<?php namespace App\Models;

use CodeIgniter\Model;

class Song extends Model {
	
	protected $table = 'songs';
	protected $allowedFields = ['addby','title','artist','lyrics','adddate'];
	protected $beforeInsert = ['beforeInsert'];
	protected $beforeUpdate = ['beforeUpdate'];

	protected function beforeInsert(array $data)
	{
		return $data;
	}

	protected function beforeUpdate(array $data)
	{
		return $data;
	}
}
