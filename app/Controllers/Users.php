<?php namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post'){
			$rules = [
				'email_usuario' => 'required|min_length[6]|max_length[50]|valid_email',
				'senha_usuario' => 'required|min_length[8]|max_length[255]|validateUser[email_usuario,senha_usuario]',
			];

			$errors = [
				'senha_usuario' => [
					'validateUser' => 'Email e/ou senha incorretos.'
				]
			];

			if(! $this->validate($rules, $errors)){
				$data['validation'] = $this->validator;
			}
			else{
				$model = new UserModel();

				$user = $model->where('email_usuario', $this->request->getVar('email_usuario'))
							->first();

				$this->setUserSession($user);

				return redirect()->to('/homepage');

			}

		}

		return view('login', $data);
	}

	//--------------------------------------------------------------------

	private function setUserSession($user){
		$data = [
			'id_usuario' => $user['id_usuario'],
			'nome_usuario' => $user['nome_usuario'],
			'email_usuario' => $user['email_usuario'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

	//--------------------------------------------------------------------

	public function register(){
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post'){
			$rules = [
				'nome_usuario' => 'required|min_length[3]|max_length[50]|is_unique[tb_usuario.nome_usuario]',
				'email_usuario' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[tb_usuario.email_usuario]',
				'senha_usuario' => 'required|min_length[8]|max_length[255]',
				'confirmarsenha' => 'required|matches[senha_usuario]',
			];

			if(! $this->validate($rules)){
				$data['validation'] = $this->validator;
			}
			else{
				$model = new UserModel();
				$newdata = [
					'nome_usuario' => $this->request->getVar('nome_usuario'),
					'senha_usuario' => $this->request->getVar('senha_usuario'),
					'email_usuario' => $this->request->getVar('email_usuario')
				];
				$model->save($newdata);
				$session = session();
				$session->setFlashData('Sucesso', 'Registrado com sucesso');
				return redirect()->to("/");
			}

		}
		echo view('register', $data);
	}

	public function logout(){
		session()->destroy();
		return redirect()->to('/');
	}
}
