<?php
namespace TinyURL\Authorization;

interface AuthorizationInterface
{
    public function saveRegister(array $data);
}
