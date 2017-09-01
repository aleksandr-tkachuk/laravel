<?php
use TinyURL\Repository as repository;

class IndexController extends BaseController
{
    protected $link;


    public function __construct(repository\LinkRepository $linkRepo)
    {
//        $this->link = $linkRepo;
//        $this->beforeFilter('auth');
    }

    public function  showIndex()
    {
        return View::make('index.index');

    }   

    public function postUrl()
    {
        $url = 'http://'.Input::get('url');
        return Redirect::intended($url);
/*
        $rules =array('url' => 'required|url');
        $validator = Validator::make(array('url'=> $url), $rules);
        if ($validator->fails())
        {
            return Redirect::to('/')->withErrors($validator);
        }
        $id = $this->link->create($url);
        $shortUrl = URL::to('/', array($id));
        return View::make('index.link',array('link' => $shortUrl));*/

    }

/*    public function getRedirect($id)
    {
        $url = $this->link->find($id);
        if (!$url)
        {
            $url = '/';
        }
        return Redirect::to($url);

    }*/





}


