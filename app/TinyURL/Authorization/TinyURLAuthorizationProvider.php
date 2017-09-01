<?php

use illuminate\Support\ServiceProvider;

class TinyURLAuthorizationProvider extends ServiceProvider
{
    
    public function register()
    {
        $this->app->bind('\TinyURL\Authorization\AuthorizationInterface',
                         '\TinyURL\Authorization\AuthorizationUser'
        );
    }

}
