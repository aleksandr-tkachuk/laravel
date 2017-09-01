<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Manager
 *
 * @author alex
 */
class ManagerController extends BaseController {
    //put your code here

    public function showArtists()
    {
        $artists = Artist::all();
        return View::make('manager.artists',['artists'=>$artists]);
    }
    public function showAlbums($id)
    {
        $albums = Artist::find($id)->albums;
        return View::make('manager.albums',['albums'=>$albums]);
    }
    public function showTracks($id)
    {
        $artist = Album::find($id)->artist->Name;
        $tracks = Album::find($id)->tracks()->select('Name','Composer')->get();
        return View::make('manager.tracks',['artist'=>$artist,'tracks'=>$tracks]);
    }
    
    public function showTrackData($id)
    {
        return 'track data';
    }
}

