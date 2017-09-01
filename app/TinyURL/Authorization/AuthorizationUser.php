<?php
namespace TinyURL\Authorization;

class AutorizationUser implements AuthorizationInterface
{
    protected $_model;

    public function __construct(\User $model)
    {
        $this->_model = $model;
    }

    public function saveRegister(array $data)
    {
        $user = $this->_model;
        $user->email = $data['email'];
        $user->name = $data['name'];
        $user->password = \Hash::make($data['password']);

        if ($user->save()){
            return true;
        }
        return false;
    }

}


