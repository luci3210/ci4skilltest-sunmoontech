<?php namespace App\Controllers;

 use App\Models\Song;

class Dashboard extends BaseController
{
	public function index()
	{	
		$data = [];
		helper(['form']);
		$model = new Song();

		if($this->request->getMethod() == 'post')
		{
			$validate = [
				'title' => 'required',
				'artist' => 'required',
				'lyrics' => 'required',
			];

			if(! $this->validate($validate))
			{
				$data['validation'] = $this->validator;
			} else 
			{
				$model = new Song();

				$details  = [
					'addby' => session()->get('id'),
					'adddate' => date("Y/m/d"),
					'title' => $this->request->getVar('title'),
					'artist' => $this->request->getVar('artist'),
					'lyrics' => $this->request->getVar('lyrics'),
				];

				$model->save($details);

				$session = session();
				$session->setFlashdata('success','Successfully Registered!');
				return redirect()->to('/dashboard');

			}
		}

		$data['songlist'] = $model->orderBy('id', 'DESC')->findAll();

		echo view('dashboard/template/header',$data);
		echo view('dashboard/home',$data);
		echo view('dashboard/template/footer');
	}

    public function delete($id = null)
    {
        $model = new Song();
        $data['song'] = $model->where('id', $id)->delete();
        return redirect()->to('/dashboard');
    }

    public function edit($id = null)
    {
    	helper(['form']);

        $model = new Song();

        $data['song'] = $model->where('id', $id)->first();
        $data['songlist'] = $model->orderBy('id', 'DESC')->findAll();

        echo view('dashboard/template/header',$data);
		echo view('dashboard/update_form',$data);
		echo view('dashboard/template/footer');    
	}

	public function update()
    {  

        helper(['form']);

        $model = new Song();
        $id = $this->request->getVar('id');

        $data = [
            'title' => $this->request->getVar('title'),
            'artist'  => $this->request->getVar('artist'),
            'lyrics'  => $this->request->getVar('lyrics')
        ];

        $save = $model->update($id,$data);
        return redirect()->to('/dashboard');
    }

}

