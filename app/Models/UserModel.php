<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = "tb_usuario";
    protected $allowedFields = ['nome_usuario', 'senha_usuario', 'email_usuario'];
    protected $beforeInsert = ['beforeInsert'];

    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);
    
        return $data;
    }

    protected function passwordHash(array $data)
    {
        if(isset($data['data']['senha_usuario']))
          $data['data']['senha_usuario'] = password_hash($data['data']['senha_usuario'], PASSWORD_DEFAULT);

        return $data;
    }
}