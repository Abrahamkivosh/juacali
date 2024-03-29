<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Albums;
use App\Musics;
use App\Events;
use App\Photos;
use App\Videos;

class PagesController extends Controller
{
    public function index()
    {

        $photos = Photos::orderBy('id', 'DESC')->paginate(15);
        $events = Events::orderBy('id', 'DESC')->paginate(10);
        $albums = Albums::orderBy('id', 'DESC')->paginate(3);
        $latest = Albums::orderBy('id', 'DESC')->paginate(1);
        $upevents = Events::orderBy('id', 'DESC')->paginate(1);
        $users = User::orderBy('id', 'DESC')->get()->only(1,2,3,4);


        return view('index',compact('albums','latest','events','photos','users'));
    }
    public function photos(){
        $photos = Photos::all();

        return view('pages.photos',compact('photos'));
    }

    public function videos(){
        $videos = Videos::all();
        //dd($videos);

        return view('pages.videos',compact('videos'));
    }

}
