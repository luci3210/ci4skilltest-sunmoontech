<?php
	
	namespace App\Validation;

	use App\Models\Authuser;

	class UserRules
	{

		public function validateUser(string $str, string $feilds, array $data)
		{
		$model  = new Authuser();

		$user = $model->where('username',$data['username'])->first();

		if(!$user)

			// return false;
			return password_verify($data['password'], $user['password']);
		}
	}

