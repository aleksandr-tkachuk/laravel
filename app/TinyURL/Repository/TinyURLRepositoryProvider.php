<?php
namespace App\TinyURL\Repository;
use illuminate\Support\ServiceProvider;

class TinyURLRepositoryProvider extends ServiceProvider
{
    public function register()
    {
//        $this->app->bind('TinyURL\Repository\Link\DbLinkRepository', function(){
//                return new \TinyURL\Repository\Link\DbLinkRepository(new \Link);
//        });

        $this->app->bind('\App\TinyURL\Repository\Link\LinkRepositoryInterface',
                '\App\TinyURL\Repository\Link\ShortLinkRepository');
    }

}


