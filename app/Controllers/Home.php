<?php namespace App\Controllers;

use App\Models\Authuser;

class Home extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);
		if($this->request->getMethod() == 'post')
		{
			$validate = [
				'username' => 'required',
				'password' => 'required|validateUser[username,password]',
			];

			$errors = [
				'password' => [
					'validateUser' => 'Username and Password don\'t match'
				]
			];

			if(! $this->validate($validate, $errors))
			{
				$data['validation'] = $this->validator;
			} else 
			{
				$model = new Authuser();
				$user = $model->where('username',$this->request->getVar('username'))->first();

				$this->setUserMethod($user);
				return redirect()->to('dashboard');
			}
		}
	
		return view('login',$data);
	}
	private function setUserMethod($user)
	{
		$data = [
			'id' => $user['id'],
			'fname' => $user['fname'],
			'lname' => $user['lname'],
			'username' => $user['username'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}
	public function register()
	{
		$data = [];
		helper(['form']);
		if($this->request->getMethod() == 'post')
		{
			$validate = [
				'fname' => 'required',
				'lname' => 'required',
				'username' => 'required',
				'password' => 'required',
				'confirmpassword' => 'matches[password]'
			];

			if(! $this->validate($validate))
			{
				$data['validation'] = $this->validator;
			} else 
			{
				$model = new Authuser();

				$details  = [
					'fname' => $this->request->getVar('fname'),
					'lname' => $this->request->getVar('lname'),
					'username' => $this->request->getVar('username'),
					'password' => $this->request->getVar('password'),
				];

				$model->save($details);

				$session = session();
				$session->setFlashdata('success','Successfully Registered!');
				return redirect()->to('/');

			}
		}
		return view('register',$data);
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/');
	}
	//--------------------------------------------------------------------

}
